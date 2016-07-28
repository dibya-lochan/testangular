<!doctype html>
<html ng-app>
    <head>
        <title>
            MOre on Directives
        </title>
        <link href="angular-csp.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div ng-init="names=[{name: 'Sanmit', city: 'London'}, {name: 'Bhabani', city: 'Bubaneswar'}, {name: 'Arpita', city: 'Kolkata'}]">
            <ul>
                <li ng-repeat="name in names">{{name.name}}{{name.city}}</li>
            </ul>
            
            <table>
                <tr>
                    <td>Name</td>
                    <td>CIty</td>
                </tr>
                <tr ng-repeat="name in names">
                    <td>{{name.name}}</td>
                    <td>{{name.city}}</td>
                </tr>
            </table>
        <div>    
        <script src="angular.js"></script>
    </body>
</html>
