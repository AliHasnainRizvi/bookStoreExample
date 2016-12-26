
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./css/app.css">
</head>
<body>
	
		<div ng-app="mainApp" >
			<h2>Please Login first! ;)</h2> <br>
			<legend>Login</legend>
		
			<div class="form-group">
				<label for="">Username</label>
				<input type="text" class="form-control" id="" placeholder="Username" ng-model='username'>

				<label for="">Password</label>
				<input type="password" class="form-control" id="" placeholder="Password" ng-model='password'>
			</div>
		
			
		
			<button type="submit" class="btn btn-primary" ng-click="submit()">Submit</button>


			<h4>{{op}}</h4>
			 </div>
			
			
			
</body>




</html>