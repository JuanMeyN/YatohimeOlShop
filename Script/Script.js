var app = angular.module('myApp', []);

app.controller('walletCtrl', function($scope, $http) {
    $http.get("PHP/WalletController.php")
    .then(function (response) {$scope.wallets = response.data.records;});
});

app.controller('bagCtrl', function($scope, $http) {
    $http.get("PHP/BagController.php")
    .then(function (response) {$scope.wallets = response.data.records;});
});

app.controller('glassesCtrl', function($scope, $http) {
    $http.get("PHP/GlassesController.php")
    .then(function (response) {$scope.wallets = response.data.records;});
});

app.controller('exwalletCtrl', function($scope, $http) {
    $http.get("PHP/ExWalletController.php")
    .then(function (response) {$scope.wallets = response.data.records;});
});

function addItem(){
	
}