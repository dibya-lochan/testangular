<!doctype html>
<html ng-app>
    <head>
        <title>
            MOre on Directives
        </title>
        <link href="angular-csp.css" rel="stylesheet" type="text/css" />
    </head>
    <body ng-init="data={name: 'James', isVisible: true, loggedIn: false, status: 'navy'}">
        <div ng-cloak>
            <div ng-switch on='data.loggedIn'>
                <div ng-switch-when="true">
                    Welcome {{data.name}}
                </div>
                <div ng-switch-default ng-class="data.status">Login</div>
            </div>
        </div>
        <br />
        <div ng-show="data.isVisible">
            Name:<input type="text" ng-model="data.name">{{data.name}}
        </div>
        <script src="angular.js"></script>
    </body>
</html>
