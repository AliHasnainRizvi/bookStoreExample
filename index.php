
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
	 <title>Biblophile </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-cookies.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/app.css">
	<link rel="stylesheet" type="text/css" href="./css/side_nav.css">
	<script type="text/javascript" src='./js/app.js'></script>
</head>
<body>

<div class="container-fluid" ng-app="mainApp" ng-controller="MainController" ng-init="name='Created By Ali Hasnain :)'">
  <div class="row">
    <div class="col-sm-3 col-lg-2">
      <nav class="navbar navbar-default navbar-fixed-side">
        <nav class="navbar navbar-default" role="navigation">
        	<div class="container-fluid">
        		<!-- Brand and toggle get grouped for better mobile display -->
        		<div class="navbar-header">
        			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        				<span class="sr-only">Toggle navigation</span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        			</button>
        			<a class="navbar-brand" href="#/">Biblophile</a>
        		</div>
        
        		<!-- Collect the nav links, forms, and other content for toggling -->
        		<div class="collapse navbar-collapse navbar-ex1-collapse">
        			<ul class="nav navbar-nav">
        				<li ><a href="#/Essential Rumi">Essential Rumi</a></li>
        				<li><a href="#/Kite Runner">The Kite Runner</a></li>
        				<li><a href="#/Mocking Bird">To kill a mocking bird</a></li>
        				<li><a href="#/1984">1984</a></li>
        				<li><a href="#/Alchemist">Alchemist</a></li>
        				<li><a href="#/login">Login<span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
        				<li><a href="#/add">Add Stock</a></li>
        				<li>{{name}}</li>
        			</ul>
        			
        			
        		</div><!-- /.navbar-collapse -->
        	</div>
        </nav>
      </nav>
    </div>
    <div class="col-sm-9 col-lg-10" id="main_body">
      

      <h1>     Biblophile!</h1>
			<div ng-view></div>
    </div>
  </div>
</div>


	
		
	
</body>
