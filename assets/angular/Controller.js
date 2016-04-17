var expenceApp = angular.module('expenceApp', ['ngRoute','ngAnimate']);

expenceApp.config(['$routeProvider',function($routeProvider){
    $routeProvider
        .when('/',{
            templateUrl:"template/home.html",
            controller:"PhoneListCtrl"
        })
        .when('/about',{
            templateUrl:"template/about.html",
            controller:"AboutCtrl"
        })
        .when('/contact',{
            templateUrl:"template/contact.html",
            controller:"ContactCtrl"
        })
        .when('/phones/:phoneId',{
            templateUrl:"template/phone-detail.html",
            controller:"PhoneDetailCtrl"
        })
        .otherwise({
            redirectTo: '/'
        });
}]);

expenceApp.controller('PhoneListCtrl',['$scope','$http','$location', function($scope,$http, $location){ console.log("we are here") }]);
expenceApp.controller('AboutCtrl',['$scope','$http','$location', function($scope,$http, $location){
    $http.get('home.html').success(function(data,status,headers,config) {
        console.log(data);
    });
}]);
expenceApp.controller('ContactCtrl',['$scope','$http','$location', function($scope,$http, $location){ }]);

expenceApp.controller('PhoneDetailCtrl',['$scope','$http','$location','$routeParams', function($scope,$http, $location, $routeParams){
    $http.get('phones/'+$scope.phoneId+'.json').success(function(data){
        $scope.phone=data;
    })
}]);