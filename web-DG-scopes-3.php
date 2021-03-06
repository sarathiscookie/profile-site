<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Example - example-guide-concepts-1-production</title>
    <style>
        .show-scope-demo.ng-scope,
        .show-scope-demo .ng-scope  {
            border: 1px solid red;
            margin: 3px;
        }
    </style>
</head>
<body ng-app="appModule">
<div ng-controller="appController">
    <div>
        <p>First Increment: {{firstincrement}}</p>
    </div>
    <div>
        <p>Second Increment: {{secondincrement}}</p>
    </div>
    <div>
        <button ng-click="firstincrementfn(firstincrement);">First Increment</button>
    </div>
    <div>
        <button ng-click="secondincrementfn(secondincrement);">Second Increment</button>
    </div>
    <div>
        <button ng-click="totalincrement(firstincrement, secondincrement);">Total Increment</button>
    </div>
    <div>
        <p>Total is: {{total}}</p>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
<script>
    angular.module('appModule', [])
        .controller('appController', ['$scope', function($scope){
            $scope.firstincrement  = 1;
            $scope.secondincrement = 1;
            $scope.firstincrementfn = function(firstincrement){
                var first = $scope.firstincrement++;
                /*$scope.total = first + second;*/
            }
            $scope.secondincrementfn = function(secondincrement){
                var second = $scope.secondincrement++;
                /*$scope.total = first + second;*/
            }
            $scope.totalincrement = function(firstincrement, secondincrement){
                $scope.total = firstincrement + secondincrement;
            }
        }]);
</script>
</body>
</html>

<!--
Copyright 2016 Google Inc. All Rights Reserved.
Use of this source code is governed by an MIT-style license that
can be found in the LICENSE file at http://angular.io/license
-->