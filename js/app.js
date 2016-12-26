
/*main module*/
var app = angular.module('mainApp', ['ngRoute','ngCookies']);
app.config(function($routeProvider) {
	$routeProvider.
	when('/', {
		templateUrl : 'welcome.php',
		controller : 'WelcomeController'
	}).
	when('/Essential Rumi',{
		templateUrl : 'essential_rumi.php',
		controller : 'ProductController'

	}).
	when('/Kite Runner',{
		templateUrl : 'kite_runner.php',
		controller : 'ProductController'

	}).
	when('/Mocking Bird',{
		templateUrl : 'mocking_bird.php',
		controller : 'ProductController'

	}).
	when('/1984',{
		templateUrl : '1984.php',
		controller : 'ProductController'

	}).
	when('/Alchemist',{
		templateUrl : 'alchemist.php',
		controller : 'ProductController'

	}).
	when ('/login', {
		templateUrl : 'login.php',
		controller : 'LoginControl'
	}).
	when ('/add', {
		templateUrl : 'add.php',
		controller : 'AddControl'
	});
	
});

app.controller('MainController', function($scope){
	
});


app.controller('WelcomeController', function($scope,$cookieStore){
	
	
});

app.controller('AddControl', function($cookieStore,$scope,$http){
	if ($cookieStore.get('username') == null) {
		$scope.logged = true;
		$scope.op = "you Should first login!";


	} else {
		$scope.logged = false;
		
	}
	$scope.add = function() {
		// body...
		var url = 'upload_handle.php?id='+$scope.id+'&stock='+$scope.stock;
		$http.get(url).
		then(function (data) {
		$scope.op = data.data;	
		$scope.id = '';
		$scope.stock = '';
		});
	};
});

// product controller
app.controller('ProductController', function($scope,$http,$cookieStore,$timeout,$window){

	$timeout(function () {
		// body...
		var url = 'handler.php?id='+$scope.page_id+'&check=1';
$http.get(url).
then(function (data){
	var id = $scope.prod_id;
	$scope.price = data.data.prod_price;
	$scope.desp = data.data.prod_desp;
	$scope.img = data.data.prod_img_path;
	$scope.detail = data.data.prod_detail;
	$scope.stock = data.data.prod_stock;
	$scope.Order = function(id) {
		// body...
		
		if ($cookieStore.get('username') == null) {
			$scope.op = 'Please Login!';
				$timeout(function () {
			// body...
			
			$window.location.href = './#/login';
		},2000);
		} else {
			url = 'handler.php?id='+$scope.page_id+'&order=1';
			$http.get(url).
					then(function(data){
						if (data.data) {
							$scope.stock -= 1; 
						};

		});

		}
	}

	});
	},1);
});

/* controls the login page*/

app.controller('LoginControl',  function($scope,$http,$cookieStore,$timeout,$window){
	if($cookieStore.get('username') != null) {
		$scope.op = 'Already logged in!';
		$timeout(function () {
			// body...
			
			$window.location.href = './';
		},2000);

	};
	
	
	$scope.submit = function() {
		var url = 'login_handle.php?username='+ $scope.username+'&password='+$scope.password;
		$http.get(url).
		then(
			
			function(data) {
				if (data.data) {
					$cookieStore.put('username', $scope.username);
					$window.location.href = './';
				}
			}

			);
	};
	
});

