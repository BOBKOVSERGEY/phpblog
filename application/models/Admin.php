<?php


namespace application\models;


use application\core\Model;

class Admin extends Model
{
  public $error;

  public function loginValidate($post)
  {
    $config = require __DIR__ . '/../config/admin.php';
    if ($config['login'] != $post['login'] or $config['password'] != $post['password']) {
      $this->error = 'Логин или пароль введены не верно';
      return false;
    }
    return true;
  }

  public function postValidate($post, $type)
  {
    $nameLen = trim($post['name']);
    $nameLen = iconv_strlen($nameLen);
    $descLen = trim($post['description']);
    $descLen = iconv_strlen($descLen);
    $textLen = trim($post['text']);
    $textLen = iconv_strlen($textLen);
    if ($nameLen < 3 or $nameLen > 100) {
      $this->error = 'Название должно содержать от 3 до 100 сиволов';
      return false;
    } else if ($descLen < 3 or $descLen > 255) {
      $this->error = 'Описание должно содержать от 3 до 255 сиволов';
      return false;
    } else if ($textLen < 10 or $textLen > 5000) {
      $this->error = 'Текст должен содержать от 10 до 5000 символов';
      return false;
    }

    if (empty($_FILES['img']['tmp_name']) and $type == 'add') {
      $this->error = 'Изображение не выбрано';
      return false;
    }
    return true;
  }

  public function postAdd($post)
  {
    $params = [
      'id' => null,
      'name' => $post['name'],
      'description' => $post['description'],
      'text' => $post['text'],
    ];

    $this->db->query('INSERT INTO posts VALUES(:id, :name, :description, :text)', $params);
    return $this->db->lastInsertId();
  }

  public function postUploadImg($path, $id)
  {
    //$img = new \Imagick($path);
    //$img->cropThumbnailImage(1240, 720);
    //$img->setImageCompressionQuality(80);
    //$img->writeImage('public/materials/' . $id . '.jpg');

    move_uploaded_file($path, __DIR__ . '/../../public/materials/' . $id . '.jpg');
  }

  public function isPostExist($id)
  {
    $params = [
      'id' => $id
    ];
    return $this->db->column('SELECT id FROM posts WHERE id = :id', $params);
  }
}