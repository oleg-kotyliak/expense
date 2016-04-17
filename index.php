<!DOCTYPE html>

<html>

<head>
  <title>Home Accounting</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Material Design fonts -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Material Design -->
  <link href="assets/css/bootstrap-material-design.css" rel="stylesheet">
  <link href="assets/css/ripples.css" rel="stylesheet">
  <link href="assets/css/styles.css" rel="stylesheet">
  <!-- Dropdown.js -->
  <link href="//cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css" rel="stylesheet">


    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <!--<script src="https://code.angularjs.org/1.5.0/angular.min.js"></script>-->
    <!--<script src="https://code.angularjs.org/1.5.0/angular-route.min.js"></script>-->
    <!--<script src="assets/angular/Controller.js"></script>-->
    <!--<script src="assets/js/core.js"></script>-->
    <script src="assets/js/material.js"></script>
    <script src="assets/js/ripples.js"></script>
    <script src="assets/amcharts/amcharts.js" type="text/javascript"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/noUiSlider/6.2.0/jquery.nouislider.min.js"></script>
</head>

<body ng-controller="AboutCtrl">

<header>
    <div class="container-fluid">
        <div class="row h-list">
            <div class="h-accounts col-md-2">
                <div>
                <div>
                    <div class="h-icon-holder">
                        <i class="material-icons">account_balance_wallet</i>
                    </div>
                    <div>
                        <div class="h-amount">77800 ₴</div> <div class="h-account-descript">My Cash under bad</div>
                    </div>
                </div>

                <div>
                    <div class="h-icon-holder">
                        <i class="material-icons">account_balance</i>
                    </div>
                    <div>
                        <div class="h-amount">422000 ₴</div> <div class="h-account-descript">Cash in the safe</div>
                    </div>
                </div>

                <div>
                    <div class="h-icon-holder">
                        <i class="material-icons">credit_card</i>
                    </div>
                    <div>
                        <div class="h-amount">52455 ₴</div> <div class="h-account-descript">Visa on some bank</div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">

            <div class="well b400">

                <h3 class="b400">Overview <span class="text-muted b100">this month</span></h3>

                <div class="row accounts-row-primary">
                    <div class="col-md-6">Accounts balance</div>
                    <div class="col-md-6 align-right text-success">$ 40 174.00</div>
                </div>

                <div class="row accounts-row-success">
                    <div class="col-md-6">Incomes</div>
                    <div class="col-md-6 align-right text-success">$ 40 174.00</div>
                </div>

                <div class="row accounts-row-danger">
                    <div class="col-md-6">Expense</div>
                    <div class="col-md-6 align-right text-danger">$ 40 174.00</div>
                </div>

                <a href="javascript:void(0)"class="btn btn-raised btn-info btn-overview">Manage accounts</a>

            </div>


            <div class="well">
                <h3>Expences by category</h3>
                <div id="chartdiv" style="width: 126%; margin-left: -60px; margin-top: -35px; height: 268px;">
                    <div class="well">
                        <h3>Expences by category</h3>
                        <div id="chartdiv" style="width: 100%; height: 400px;"></div>
                        <div id="legenddiv" style="border: 2px dotted #3f3; margin: 5px 0 20px 0;position: relative;"></div>
                    </div>
                </div>

                <a href="javascript:void(0)"class="btn btn-raised btn-info btn-overview">See more charts</a>
            </div>

        </div>

        <div class="col-md-9">

            <? require_once "mainChart.php"; ?>

        </div>
    </div>

    <div class="row">
    </div>
</div>

<section ng-view id="search"></section>

<script>
    $(function () {
        $.material.init();
        $(".shor").noUiSlider({
            start: 40,
            connect: "lower",
            range: {
                min: 0,
                max: 100
            }
        });

        $(".svert").noUiSlider({
            orientation: "vertical",
            start: 40,
            connect: "lower",
            range: {
                min: 0,
                max: 100
            }
        });
    });
</script>


<script src="assets/amcharts/pie.js" type="text/javascript"></script>

<script>
    AmCharts.makeChart("chartdiv", {
        "type": "pie",
        "dataProvider": [{
            country: "Shoping",
            litres: 2210
        }, {
            country: "Car",
            litres: 1450
        }, {
            country: "Rent",
            litres: 3500
        }, {
            country: "Caffe",
            litres: 1200
        }, {
            country: "Hobby",
            litres: 1700
        }],
        "titleField": "country",
        "valueField": "litres",
        "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]$</b></span>"

    });



</script>

</body>

</html>