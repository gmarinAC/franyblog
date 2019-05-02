app.controller('FashionController',['ngDialog','$scope',(ngDialog,$scope)=>{
    $scope.ubicacion='#!/fashion';
    $scope.fotoSelecionada;
    $scope.fotoSelecionadaIndex;
    $scope.arregloFotos=randomizarArray([
        {
            url: 'img/fotofashion/imgFrany301.jpg'
        },
        {
            url: 'img/fotofashion/imgFrany304.jpg'
        },
        {
            url: 'img/fotofashion/imgFrany310.jpg'
        },
        {
            url: 'img/fotofashion/imgFrany309.jpg'
        },
        {
            url: 'img/fotofashion/imgFrany311.jpg'
        },
        {
            url: 'img/fotofashion/imgFrany314.jpg'
        },
        {
            url: 'img/fotofashion/imgFrany318.jpg'
        },
        {
            url: 'img/fotofashion/imgFrany315.jpg'
        },
        {
            url: 'img/fotofashion/imgFrany317.jpg'
        },
        {
            url: 'img/fotofashion/imgFrany312.jpg'
        },
        {
            url: 'img/fotofashion/imgFrany309.jpg'
        },
        {
            url: 'img/fotofashion/imgFrany306.jpg'
        },
        {
            url: 'img/fotofashion/imgFrany311.jpg'
        }
     ] );

  
    
    $scope.abrirImgen = function(index){
        console.log(index);
        $scope.fotoSelecionada = $scope.arregloFotos[index];
        console.log( $scope.fotoSelecionada);
        ngDialog.open({
            template: 'views/modal/modalGaleriaBase.html',
            className: 'ngdialog-theme-default',
            scope: $scope,
        });
    };
    $scope.btnPrev = function(){
        $scope.fotoSelecionada = navArray(PREVITEM,$scope.fotoSelecionada,$scope.arregloFotos);
        console.log($scope.fotoSelecionada);
     }
     $scope.btnNext = function(){
         $scope.fotoSelecionada = navArray(NEXITEM,$scope.fotoSelecionada,$scope.arregloFotos);
         console.log($scope.fotoSelecionada);
     }
}])