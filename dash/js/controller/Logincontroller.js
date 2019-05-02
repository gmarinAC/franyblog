(
  function(){
    "use strict";
    angular.module('App').
  controller('LoginController',LoginController);
  LoginController.$inject = ['$scope','factoryLogin'];
  function LoginController($scope,factoryLogin){
    
    var vm = this;
    vm.loginUsuario = loginUsuario;
   $scope.loginUsuario = loginUsuario;
    function loginUsuario(email, password){
      console.log('flag 1');
      factoryLogin.loginAdmin(email,password,
        function(response){
          console.log('REPONSE::'+JSON.stringify(response))
        }
      );
    }
  }
  })();
