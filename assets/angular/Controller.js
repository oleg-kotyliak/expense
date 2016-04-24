var app = angular.module('expenceApp', []);

app.controller('Manage', function ($scope, $http) {
    
    $scope.nav = {
        page: 'main',
        mainTpl: 'blocks/mainChart.html'
    }

    $scope.templates = {
        mainChart : 'blocks/mainChart.html',
        overview: 'blocks/overview.html',
        expenceByCategory: "blocks/expenceByCategory.html",
        accounts: "blocks/accounts.html"
    }
    
    $scope.setMainTpl = function (tpl) {
        $scope.nav.mainTpl = tpl;
    }

    $scope.icons = {
        cash: {
            color: '',
            ico: '"account_balance_wallet"'
        },
        bank: {
            color: '',
            ico: '"account_balance"'
        },
        credit: {
            color: '',
            ico: '"credit_card"'
        }
    }
    
});

app.controller('MainContent', function($scope, $http) {

    $http.get('/test').success(function(data) {
        $scope.question=data.question;
    });

});

app.controller('Sidebar', function ($scope, $http) {
});

app.controller('Accounts', function ($scope, $http) {
    $scope.showAccountsPage = function () {
        $scope.setMainTpl($scope.templates.accounts);
    }
    
    $scope.accounts = {
        title: '',
        balance: '',
        type: 'Credit card'
    };
    var a = JSON.stringify({'a':'s','c':'s'});
    $scope.addAccount = function () {
        $http.post('/accounts/', $scope.accounts).success(function(data) {
            // console.log(data);
            $scope.accounts.title = '';
            $scope.accounts.balance = '';
            $scope.accounts.type = 'Credit card';
        });

    }


    // $scope.setMainTpl($scope.templates.accounts);
});
