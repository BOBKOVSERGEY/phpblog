<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/public/styles/bootstrap.css" rel="stylesheet">
  <link href="/public/styles/main.css" rel="stylesheet">
  <link href="/public/styles/font-awesome.css" rel="stylesheet">
  <title><?php echo $title; ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="/">Я есть блог</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="/about">Обо мне</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Обратная связь</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <?php echo $content; ?>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <ul class="list-inline text-center">
          <li class="list-inline-item">
            <a href="https://www.youtube.com/user/Shift63770" target="_blank">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                                    </span>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://vk.com/php.youtube" target="_blank">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-vk fa-stack-1x fa-inverse"></i>
                                    </span>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="/" target="_blank">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
            </a>
          </li>
        </ul>
        <p class="copyright text-muted">&copy; <?php echo date('Y')?>, Видеоуроки PHP</p>
      </div>
    </div>
  </div>
</footer>
<script src="/public/scripts/jquery.js"></script>
<script src="/public/scripts/form.js"></script>
<script src="/public/scripts/popper.js"></script>
<script src="/public/scripts/bootstrap.js"></script>
</body>
</html>