<?php


namespace application\controllers;


use application\core\Controller;

class MainController extends Controller
{

  public function indexAction()
  {
    $this->view->render('Главная страница');
  }

  public function aboutAction()
  {
    $this->view->render('О нас');
  }

  public function postAction()
  {
    $this->view->render('Блог');
  }

  public function contactAction()
  {
    if (!empty($_POST)) {
      if (!$this->model->contactValidate($_POST)) {
        $this->view->message('error', $this->model->error);
      }
      mail('admin@mail.ru', 'Сообщение из блога', $_POST['name'] . PHP_EOL . $_POST['email'] . PHP_EOL . $_POST['text']);
      $this->view->message('success', 'Сообщение отправлено администратору');
    }
    $this->view->render('Контакты');
  }

}