var app = angular.module('myApp', []);

app.controller('walletCtrl', function($scope, $http) {
    $http.get("PHP/WalletController.php")
    .then(function (response) {$scope.wallets = response.data.records;});
});


function addItem(){
	
}