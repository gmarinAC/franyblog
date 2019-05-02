(function(){
    'use strict';

    angular
        .module('App')
        .factory('service', factory)

    factory.$inject = ['$http','urls'];

    function factory($http,urls) {
        var service = {
            getData: getData,
            GetByUsername: GetByUsername
        };

        return service;

        function getData() { }
        function GetByUsername(useranme,password){
          return $http.post(urls.login+'login.php',{email: useranme, password: password}).then(handleSuccess,handleError('Error getting user by username'))
        }
        function handleSuccess(res) {
          return res.data;
      }
      function handleError(error) {
        return function () {
            return { success: false, message: error };
        };
    }

      }
})();