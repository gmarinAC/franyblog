angular.module('App',['ngRoute','ui.bootstrap']).
  config(['$routeProvider',function($routeProvider){
      $routeProvider.when('/',{
        templateUrl : "views/login.html",
        controller: 'LoginController as ctrl'
      }).
      when('/dashboard',{
        templateUrl : "views/dashboard.html",
        controller:""
      })
  }]);

  angular.module('App').constant("urls",{
      "login":'http://localhost/franylife/model/'
  })