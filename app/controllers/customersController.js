/*(function () {
   angular.module('myApp', [])
    .controller('myCtrl', function ($scope) {
        $scope.sortBy = 'name';
        $scope.reverse = false;
        $scope.customers = [
            {joined: '2000-12-02', name: 'John', city: 'New york', orderTotal: 9.99956},
            {joined: '2012-07-22', name: 'Rakesh', city: 'Kolkata', orderTotal: 49.17956},
            {joined: '2016-06-02', name: 'Manoj Paul', city: 'Bhubaneswar', orderTotal: 27.21}
        ];

        $scope.doSort = function (propName) {
            $scope.sortBy = propName;
            $scope.reverse = !$scope.reverse;
        };
    });
}());
*/

(function () {
  var CustomerCOntroller = function ($scope) {
        $scope.sortBy = 'name';
        $scope.reverse = false;
        $scope.customers = [
            {joined: '2000-12-02', name: 'John', city: 'New york', orderTotal: 9.99956},
            {joined: '2012-07-22', name: 'Rakesh', city: 'Kolkata', orderTotal: 49.17956},
            {joined: '2016-06-02', name: 'Manoj Paul', city: 'Bhubaneswar', orderTotal: 27.21}
        ];

        $scope.doSort = function (propName) {
            $scope.sortBy = propName;
            $scope.reverse = !$scope.reverse;
        };
    };
    CustomerCOntroller.$inject = ['$scope'];
     angular.module('myApp', ['ngRoute'])
    .controller('myCtrl', CustomerCOntroller);
}());



