(function(){
    'use strict';
    angular
        .module('App')
        .factory('factoryLogin', login)

    login.$inject = ['$http','urls','$location','service'];

    function login($http,urls,$location,service) {
        var factoryDash = {
            getData: getData,
            loginAdmin : loginAdmin
        };

        return factoryDash;

        function getData() { 
          alert('Factory cargada');
        }

        function loginAdmin(username,password,callback){
          console.log('email::'+username);
          console.log('password:::'+password);
          var response;
          service.GetByUsername(username,password)
              .then(function (response) {
                 if(response == 1){
                   alert('Usuario correcto');
                 }else{
                   alert('usuario incorrecto');
                 }
                  callback(response);
              });
        }
    }
})();