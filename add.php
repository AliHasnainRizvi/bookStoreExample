<html>
	
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./css/app.css">
</head>
<body>
	<div ng-app="mainApp" ng-controller="AddControl" id="inside_body">
			<h3>{{op}}</h3>
			<legend>Add item</legend>
		
			<div class="form-group">
				<label for="">Product Id</label>
				<input type="text" class="form-control" id="" placeholder="id" ng-model='id'>

				<label for="">Stock</label>
				<input type="text" class="form-control" id="" placeholder="Stock" ng-model='stock'>

			
			</div>
		
			
		
			<button type="submit" class="btn btn-primary" ng-disabled="logged" ng-click="add()">Submit</button>
		


	</div>
</body>


</html>