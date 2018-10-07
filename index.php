<?php
session_start();
  if(!isset($_SESSION["leaderID"])) {
    header("location: login.php");
  }
?>

<!doctype html>
<html lang="en" ng-app="ecourse">
<head>
  <meta charset="utf-8">
  <title>ECourse</title>
  <!-- <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css" /> -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

  <!-- <script language="javascript" type="text/javascript" src="bower_components/jqplot-bower/dist/jquery.min.js"></script> -->
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- <script language="javascript" type="text/javascript" src="bower_components/jqplot-bower/dist/jquery.jqplot.min.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqPlot/1.0.9/jquery.jqplot.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqPlot/1.0.9/jquery.jqplot.min.css" />
  <!-- <script type="text/javascript" src="bower_components/jqplot-bower/dist/plugins/jqplot.dateAxisRenderer.min.js"></script> -->
  <!-- <link rel="stylesheet" type="text/css" href="bower_components/jqplot-bower/dist/jquery.jqplot.css" /> -->
  


  <link rel="stylesheet" href="css/app.css">
  </head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#/">Ecourse</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#/">{{'OVERVIEW' | translate}}</a></li>
        <li><a href="#/tabularView">{{'NUM_NOTICE' | translate}}</a></li>
        <li><a href="#/activities/">{{'ACTIVITIES' | translate}}</a></li>
        <li><a href="#/participants/">{{'PARTICIPANTS' | translate}}</a></li>
        <li><a href="#/stats/numBeobachtungenPerLeaderDay/">{{'STATISTICS' | translate}}</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">{{'LOGOUT' | translate}}</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <div class="container">
        <div ng-view></div>
    </div>



  <script src="bower_components/angular/angular.js"></script>
  <script src="bower_components/angular-resource/angular-resource.js"></script>
  <script src="bower_components/angular-route/angular-route.js"></script>
  <script src="bower_components/angular-translate/angular-translate.min.js"></script>
  <script src="bower_components/angular-translate-loader-static-files/angular-translate-loader-static-files.min.js"></script>

  <script src="js/controllers/controllers.js"></script>
  <script src="js/controllers/controller.index.js"></script>
  <script src="js/controllers/controller.notices.js"></script>
  <script src="js/controllers/controller.participant.js"></script>
  <script src="js/controllers/controller.participants.js"></script>
  <script src="js/controllers/controller.statistics.js"></script>
  <script src="js/controllers/controller.activities.js"></script>
  
  
  <script src="js/app.js"></script>
  <script src="js/services.js"></script>
</body>
</html>
