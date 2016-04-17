<div class="well">
    <h3>Incomes and expence overview by months</h3>
    <div id="chartdiv2" style="width:100%; height:400px;"></div>
</div>

<script src="assets/amcharts/serial.js" type="text/javascript"></script>
<script>

    // this chart is exactly the same as in areaStacked.html, only made using JSON except JavaScript API

    var chartData = [{
        "month": 01,
        "income": 39000,
        "expence": 9650
    },{
        "month": 02,
        "income": 42000,
        "expence": 38800
    },{
        "month": 03,
        "income": 35000,
        "expence": 5000
    },{
        "month": 04,
        "income": 77435,
        "expence": 24000
    },{
        "month": 05,
        "income": 26000,
        "expence": 3500
    },{
        "month": 06,
        "income": 33000,
        "expence": 55000
    },{
        "month": 7,
        "income": 39000,
        "expence": 9650
    },{
        "month": 8,
        "income": 42000,
        "expence": 38800
    },{
        "month": 9,
        "income": 35000,
        "expence": 5000
    },{
        "month": 10,
        "income": 77435,
        "expence": 24000
    },{
        "month": 11,
        "income": 26000,
        "expence": 3500
    },{
        "month": 12,
        "income": 33000,
        "expence": 55000
    }];

    AmCharts.makeChart("chartdiv2", {
        type: "serial",
        dataProvider: chartData,
        marginTop: 10,
        categoryField: "month",
        categoryAxis: {
            gridAlpha: 0.07,
            axisColor: "#DADADA",
            startOnAxis: true,
            guides: [{
                category: "2001",
                lineColor: "#CC0000",
                lineAlpha: 1,
                dashLength: 2,
                inside: true,
                labelRotation: 90,
                label: "fines for speeding increased"
            }, {
                category: "2007",
                lineColor: "#CC0000",
                lineAlpha: 1,
                dashLength: 2,
                inside: true,
                labelRotation: 90,
                label: "motorcycle maintenance fee introduced"
            }]
        },
        valueAxes: [{
            stackType: "regular",
            gridAlpha: 0.07,
            title: "Traffic incidents"
        }],

        graphs: [{
            type: "line",
            title: "Incomes",
//            hidden: true,
            valueField: "income",
            lineAlpha: 0,
            fillAlphas: 0.6,
//            balloonText: "<img src='images/car.png' style='vertical-align:bottom; margin-right: 10px; width:28px; height:21px;'><span style='font-size:14px; color:#000000;'><b>[[value]]</b></span>"
        }, {
            type: "line",
            title: "Expence",
            valueField: "expence",
            lineAlpha: 0,
            fillAlphas: 0.6,
//            balloonText: "<img src='images/motorcycle.png' style='vertical-align:bottom; margin-right: 10px; width:28px; height:21px;'><span style='font-size:14px; color:#000000;'><b>[[value]]</b></span>"
        }],
        legend: {
            position: "bottom",
            valueText: "[[value]]",
            valueWidth: 100,
            valueAlign: "left",
            equalWidths: false,
            periodValueText: "total: [[value.sum]]"
        },
        chartCursor: {
            cursorAlpha: 0
        },
        chartScrollbar: {
            color: "FFFFFF"
        }

    });

</script>