
var app = angular.module('myApp', []);
app.controller('myCtrl', function () {
    $this.sortBy = 'name';
    $this.reverse = false;
    $this.customers = [
        {joined: '2000-12-02', name: 'John', city: 'New york', orderTotal: 9.99956},
        {joined: '2012-07-22', name: 'Rakesh', city: 'Kolkata', orderTotal: 49.17956},
        {joined: '2016-06-02', name: 'Manoj Paul', city: 'Bhubaneswar', orderTotal: 27.21}
    ];

    $this.doSort = function (propName) {
        $this.sortBy = propName;
        $this.reverse = !$this.reverse;
    };
});
    



