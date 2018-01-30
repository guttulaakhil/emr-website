<?php

  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content="">

    <title>EmR | Queries</title>
    <link rel="icon" href="../img/icon.png" sizes="32x32"/>

    <!-- bootstrap core css -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- custom css -->
    <link href="../css/stylish-portfolio.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <style>
      @media screen and (min-width:100px) {
          .medium{ font-size:100%; }
      }
      @media screen and (min-width:900px) {
          .medium{ font-size:150%; }
      }
      .medium{
        font-weight: bold;
      }
    </style>
  </head>

  <body style="background-color:#bfbfbf">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <img align="left" style="margin-top:5px;margin-bottom:5px;margin-right:10px;" src="../img/icon.png" alt="logo" height="42" width="42">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="dashboard.php" style="color:white;margin-right:30px;">EmR Club</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="dashboard.php">Home</a></li>
            <li><a href="positions.php">Projects</a></li>
            <li><a href="votersList.php">Workshops</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contactus.php">Contact us</a></li>
            <li><a href="aboutus.php">About us</a></li>
            <li class="active"><a href="queries.php">Queries</a></li>
          </ul>

        </div>
      </div>
    </nav>

    <br><br><br><br><br>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
          <div class="panel panel-default">
            <div align="center" class="panel-heading">
              <i class="fa fa-street-view fa-fw"></i><strong> Drop your query / feedback here</strong>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">

              <div class="form-group input-group">
                <span class="input-group-addon">
                  <i class="fa fa-user"></i>
                </span>
                <input class="form-control" placeholder="Name" type="text">
              </div>

              <div class="form-group input-group">
                <span class="input-group-addon">@</span>
                <input class="form-control" placeholder="E-mail" type="text">
              </div>

              <div class="form-group input-group">
                <span class="input-group-addon">
                  <i class="fa fa-tty"></i>
                </span>
                <input class="form-control" placeholder="Mobile" type="text">
              </div>

              <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" rows="4"></textarea>
              </div>

              <a href="#" class="btn btn-success btn-block">Submit</a>
            </div>
            <!-- /.panel-body -->
          </div>

        </div>
      </div>
    </div>


    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1 text-center">
            <hr class="small"/>
            <p class="text-muted" style="color:black;">&copy; Embedded Systems & Robotics Club, NIT Kurukshetra 2018</p>
            <p class="text-muted"><xmp><develop> MMSK Ag </design></xmp></p>
          </div>
        </div>
      </div>
      <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

    <!-- jquery -->
    <script src="../js/jquery-3.2.1.js"></script>
    <script src="../js/bootstrap.min.js"></script>


    <!-- custom theme javascript -->
    <script>
      // Scrolls to the selected menu item on the page
      $(function() {
          $('a[href=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
              if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                  var target = $(this.hash);
                  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                  if (target.length) {
                      $('html,body').animate({
                          scrollTop: target.offset().top
                      }, 1000);
                      return false;
                  }
              }
          });
      });
      //#to-top button appears after scrolling
      var fixed = false;
      $(document).scroll(function() {
          if ($(this).scrollTop() > 250) {
              if (!fixed) {
                  fixed = true;
                  // $('#to-top').css({position:'fixed', display:'block'});
                  $('#to-top').show("slow", function() {
                      $('#to-top').css({
                          position: 'fixed',
                          display: 'block'
                      });
                  });
              }
          } else {
              if (fixed) {
                  fixed = false;
                  $('#to-top').hide("slow", function() {
                      $('#to-top').css({
                          display: 'none'
                      });
                  });
              }
          }
      });
    </script>

  </body>
</html>