<!doctype html>
<html ng-app="myApp" >
    <head>
        <title>
            MOre on Directives
        </title>        
    </head>
    <body>
        <div ng-controller="myCtrl">
            <h2>Customers</h2>
            Filter: <input type="text" ng-model="customerFilter.name"/>
            <br /><br />

            <table>
                <tr>
                    <th ng-click="doSort('name')">Name</th>
                    <th ng-click="doSort('city')">City</th>
                    <th ng-click="doSort('orderTotal')">Order_total</th>
                    <th ng-click="doSort('joined')">Joined</th>
                </tr>
                <tr ng-repeat="cust in customers| filter: customerFilter | orderBy: sortBy:reverse">
                    <td>{{cust.name}}</td>
                    <td>{{cust.city}}</td>
                    <td>{{ cust.orderTotal | currency }}</td>
                    <td>{{ cust.joined | date }}</td>
                </tr>
            </table>
        </div>
        <script src="angular.js"></script>
        <script src="angular-route.js"></script>
        <script src="app/controllers/customersController.js"></script>
        
      
    </body>
</html>
