
<html>
<head>
  <link rel="stylesheet" href="/MeCamera-Admin/bootstrap-4.1.3/css/bootstrap.css">

  <style>

  body{
    font-family: Kanit ;
  }

  .footer {
     position: fixed;
     left: 0;
     bottom: 0;
     width: 100%;
     height: 8%;
     background-color: #FBFBFB;
     color: #8d8d8d;
     text-align: center;
  }

  nav{
    position: fixed;
    height: 10%;
    background-color: #FBFBFB;
  }

  hr {
    border: none;
    margin-top: 0;
    height: 2px;
    background-color:  #efefef;
  }

  #Logo{
    color: #ff6f00;
  }

  #navbarDropdown{
    color: #8d8d8d
  }

  .nav-link{
    color: #8d8d8d;
  }

  .nav-link:hover{
    color: #ff6f00;
  }

  .active{
    color: #ff6f00;
  }

  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="imgcontainer" >
    <img src="Icon/Me Camera-Shape.png" height="35px" width="35px" >
  </div>
  <a class="navbar-brand" id="Logo" style="font-size: 26px; padding-left: 10px" href="#">Me Camera</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav" style="font-size: 20px">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link
          <?php if ($_GET['page'] == 'user' ) { echo " active "; } ?>"

          href="index.php?page=user">สมาชิกในระบบ</a>

        </li>

        <li class="nav-item">
          <a class="nav-link
          <?php if ($_GET['page'] == 'store' ) { echo " active "; } ?>"

           href="index.php?page=store">สมาชิกผู้ปล่อยเช่า</a>

        </li>

        <li class="nav-item">
          <a class="nav-link
          <?php if ($_GET['page'] == 'post' ) { echo " active "; } ?>"

           href="index.php?page=post">การโพสต์เช่า</a>

        </li>
      </ul>
    </div>
</nav>

<div class="text-center" style="padding: 75px">
  <?php

    if ($_GET['page'] == 'user') {

          include(__DIR__ . '/scr/User.php');

    }else if ($_GET['page'] == 'store') {

          include(__DIR__ . '/scr/Store.php');

    }else {

          include(__DIR__ . '/scr/Post.php');

    }


    ?>
</div>
<div class="footer">
  <hr>
  <p>© 2018 by MeCamera</p>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
