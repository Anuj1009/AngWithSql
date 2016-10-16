var myApp=angular.module("myModule",[]);
myApp.controller("myCtrl",['$scope','$http','$log',function($scope,$http,$log){
  $http.get('example.php')
  .success(function(data)
{$scope.blogs=data;
})
.error(function(err){
  $log.error(err);
});
}])
