
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./css/app.css">
</head>
<body>
	
		<div ng-app="mainApp" ng-controller="ProductController" id="inside_body" ng-init="page_id=5">

	
	<h2>The Alchemist</h2>
		<div class="left-div"><img src="{{img}}" class="img-responsive" alt="Image"></div>
		<div class="right-div"><p><b>Product Description:</b> <br><br> {{desp}}</p>
		<p><b>Product Details: </b> {{detail}}</p>
		<p><b>Stock : </b>{{stock}}</p>
		<input class='button' type="button" value="Order!" ng-click="Order()">
		
		</div>
	
	
	
</div>	
	
</body>




</html>