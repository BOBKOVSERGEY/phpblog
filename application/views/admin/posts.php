<div class="content-wrapper">
  <div class="container-fluid">
    <div class="card mb-3">
      <div class="card-header">Посты</div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <?php if (empty($list)): ?>
              <p>Список постов пуст</p>
            <?php else: ?>
              <table class="table table-responsive" style="width: 100%">
                <tr>
                  <th>Название</th>
                  <th>Редактировать</th>
                  <th>Удалить</th>
                </tr>
                <?php foreach ($list as $val): ?>
                  <tr>
                    <td><?php echo htmlspecialchars($val['name'], ENT_QUOTES); ?></td>
                    <td><a href="/admin/edit/<?php echo $val['id']; ?>" class="btn btn-primary">Редактировать</a></td>
                    <td><a href="/admin/delete/<?php echo $val['id']; ?>" class="btn btn-danger">Удалить</a></td>
                  </tr>
                <?php endforeach; ?>
              </table>
              <?php echo $pagination; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>