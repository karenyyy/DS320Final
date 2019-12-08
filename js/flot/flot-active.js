(function ($) {
    "use strict";

    function getRandomData() {
        for (data.length > 0 && (data = data.slice(1)); data.length < totalPoints;) {
            var prev = data.length > 0 ? data[data.length - 1] : 50,
                y = prev + 10 * Math.random() - 5;
            0 > y ? y = 0 : y > 90 && (y = 90), data.push(y)
        }
        for (var res = [], i = 0; i < data.length; ++i) res.push([i, data[i]]);
        return res
    };


    for (var data = [], totalPoints = 100, d1 = [], i = 0; 10 >= i; i += 1) d1.push([i, parseInt(30 * Math.random())]);
    for (var d2 = [], i = 0; 20 >= i; i += 1) d2.push([i, parseInt(30 * Math.random())]);
    for (var d3 = [], i = 0; 10 >= i; i += 1) d3.push([i, parseInt(30 * Math.random())]);
    var options = {
        series: {
            shadowSize: 0,
            lines: {
                show: !1,
                lineWidth: 0
            }
        },
        grid: {
            borderWidth: 0,
            labelMargin: 10,
            hoverable: !0,
            clickable: !0,
            mouseActiveRadius: 6
        },
        xaxis: {
            tickDecimals: 0,
            ticks: !1
        },
        yaxis: {
            tickDecimals: 0,
            ticks: !1
        },
        legend: {
            show: !1
        }
    };
    $("#line-chart")[0] && $.plot($("#line-chart"), [{
        data: d1,
        lines: {
            show: !0,
            fill: .98
        },
        label: "Product 1",
        stack: !0,
        color: "#e3e3e3"
    }, {
        data: d3,
        lines: {
            show: !0,
            fill: .98
        },
        label: "Product 2",
        stack: !0,
        color: "#00c292"
    }], options), $("#recent-items-chart")[0] && $.plot($("#recent-items-chart"), [{
        data: getRandomData(),
        lines: {
            show: !0,
            fill: .99
        },
        label: "Items",
        stack: !0,
        color: "#00c292"
    }], options), $(".flot-chart")[0] && ($(".flot-chart").bind("plothover", function (event, pos, item) {
        if (item) {
            var x = item.datapoint[0].toFixed(2),
                y = item.datapoint[1].toFixed(2);
            $(".flot-tooltip").html(item.series.label + " of " + x + " = " + y).css({
                top: item.pageY + 5,
                left: item.pageX + 5
            }).show()
        } else $(".flot-tooltip").hide()
    }), $("<div class='flot-tooltip' class='chart-tooltip'></div>").appendTo("body"));

    /*----------------------------
    jQuery curvedLines
   ------------------------------ */

    // for (var d1 = [], i = 0; 10 >= i; i += 1) d1.push([i, parseInt(30 * Math.random())]);
    // for (var d2 = [], i = 0; 20 >= i; i += 1) d2.push([i, parseInt(30 * Math.random())]);
    // for (var d3 = [], i = 0; 10 >= i; i += 1) d3.push([i, parseInt(30 * Math.random())]);
    var international_blvd = [
            [2011, 3866],
            [2012, 3658],
            [2013, 3647],
            [2014, 3713],
            [2015, 3695],
            [2016, 2156]
        ],
        macarthur_blvd = [
            [2011, 3129],
            [2012, 3335],
            [2013, 3002],
            [2014, 2812],
            [2015, 3105],
            [2016, 1813]
        ],
        av_international_blvd = [
            [2011, 3067],
            [2012, 3193],
            [2013, 3405],
            [2014, 3291],
            [2015, 3106],
            [2016, 1829]
        ],
        broadway = [
            [2011, 2132],
            [2012, 2167],
            [2013, 2036],
            [2014, 1996],
            [2015, 2407],
            [2016, 1476]
        ],
        foothill_blvd = [
            [2011, 1791],
            [2012, 1649],
            [2013, 1650],
            [2014, 1774],
            [2015, 1753],
            [2016, 1052]
        ],
        telegraph_av = [
            [2011, 1584],
            [2012, 1623],
            [2013, 1558],
            [2014, 1573],
            [2015, 1507],
            [2016, 875]
        ],
        seven_street = [
            [2011, 1093],
            [2012, 1183],
            [2013, 1246],
            [2014, 1285],
            [2015, 1569],
            [2016, 1224]
        ];

    var options = {
        series: {
            shadowSize: 0,
            curvedLines: {
                apply: !0,
                active: !0,
                monotonicFit: !0
            },
            lines: {
                show: !1,
                lineWidth: 0,
                fill: 1
            }
        },
        grid: {
            borderWidth: 0,
            labelMargin: 10,
            hoverable: !0,
            clickable: !0,
            mouseActiveRadius: 6
        },
        xaxis: {
            tickDecimals: 0,
            ticks: !1
        },
        yaxis: {
            tickDecimals: 0,
            ticks: !1
        },
        legend: {
            show: !1
        }
    };
    $("#curved-line-chart")[0] && $.plot($("#curved-line-chart"), [
        {
        data: international_blvd,
        lines: {
            show: !0,
            fill: .98
        },
        label: "INTERNATIONAL BLVD",
        stack: !0,
        color: "#ffb1b6"
    },
        {
        data: macarthur_blvd,
        lines: {
            show: !0,
            fill: .98
        },
        label: "MACARTHUR BLVD",
        stack: !0,
        color: "#4ec241"
        },
        {
            data: av_international_blvd,
            lines: {
                show: !0,
                fill: .98
            },
            label: "AV INTERNATIONAL BLVD",
            stack: !0,
            color: "#c23445"
        },
        {
            data: broadway,
            lines: {
                show: !0,
                fill: .98
            },
            label: "BROADWAY",
            stack: !0,
            color: "#4d95ff"
        },
        {
            data: foothill_blvd,
            lines: {
                show: !0,
                fill: .98
            },
            label: "FOOTHILL BLVD",
            stack: !0,
            color: "#f794ff"
        },
        {
            data: telegraph_av,
            lines: {
                show: !0,
                fill: .98
            },
            label: "TELEGRAPH AVENUE",
            stack: !0,
            color: "#fff8af"
        },
        {
            data: seven_street,
            lines: {
                show: !0,
                fill: .98
            },
            label: "7TH STREET",
            stack: !0,
            color: "#ffd492"
        },
    ], options), $(".flot-chart")[0] && ($(".flot-chart").bind("plothover", function (event, pos, item) {
        if (item) {
            var x = item.datapoint[0].toFixed(2),
                y = item.datapoint[1].toFixed(2);
            $(".flot-tooltip").html(item.series.label + " of " + x + " = " + y).css({
                top: item.pageY + 5,
                left: item.pageX + 5
            }).show()
        } else $(".flot-tooltip").hide()
    }), $("<div class='flot-tooltip' class='chart-tooltip'></div>").appendTo("body"));


    function sparklineBar(id, values, height, barWidth, barColor, barSpacing) {
        $("." + id).sparkline(values, {
            type: "bar",
            height: height,
            barWidth: barWidth,
            barColor: barColor,
            barSpacing: barSpacing
        })
    }

    function sparklineLine(id, values, width, height, lineColor, fillColor, lineWidth, maxSpotColor, minSpotColor, spotColor, spotRadius, hSpotColor, hLineColor) {
        $("." + id).sparkline(values, {
            type: "line",
            width: width,
            height: height,
            lineColor: lineColor,
            fillColor: fillColor,
            lineWidth: lineWidth,
            maxSpotColor: maxSpotColor,
            minSpotColor: minSpotColor,
            spotColor: spotColor,
            spotRadius: spotRadius,
            highlightSpotColor: hSpotColor,
            highlightLineColor: hLineColor
        })
    }

    function sparklinePie(id, values, width, height, sliceColors) {
        $("." + id).sparkline(values, {
            type: "pie",
            width: width,
            height: height,
            sliceColors: sliceColors,
            offset: 0,
            borderWidth: 0
        })
    }

    function easyPieChart(id, trackColor, scaleColor, barColor, lineWidth, lineCap, size) {
        $("." + id).easyPieChart({
            trackColor: trackColor,
            scaleColor: scaleColor,
            barColor: barColor,
            lineWidth: lineWidth,
            lineCap: lineCap,
            size: size
        })
    }

    $(".stats-bar")[0] && sparklineBar("stats-bar", [6, 4, 8, 6, 5, 6, 7, 8, 3, 5, 9, 5, 8, 4], "35px", 3, "#00c292", 2),
    $(".stats-bar-2")[0] && sparklineBar("stats-bar-2", [4, 7, 6, 2, 5, 3, 8, 6, 6, 4, 8, 6, 5, 8], "35px", 3, "#01c0c8", 2),
    $(".stats-line")[0] && sparklineLine("stats-line", [3866, 3658, 3647, 3713, 3695, 2156], 68, 35, "#ffb1b6", "#ffb1b6", 1.25, "#ffb1b6", "#ffb1b6", "#ffb1b6", 3, "#ffb1b6", "#ffb1b6"),
    $(".stats-line-2")[0] && sparklineLine("stats-line-2", [3129, 3335, 3002, 2812, 3105, 1813], 68, 35, "#4ec241", "#4ec241", 1.25, "#4ec241", "#4ec241", "#4ec241", 3, "#4ec241", "#4ec241"),
    $(".stats-line-3")[0] && sparklineLine("stats-line-3", [3067, 3193, 3405, 3291, 3106, 1829], 68, 35, "#c23445", "#c23445", 1.25, "#c23445", "#c23445", "#c23445", 3, "#c23445", "#c23445"),
    $(".stats-line-4")[0] && sparklineLine("stats-line-4", [2132, 2167, 2036, 1996, 2407, 1472], 68, 35, "#4d95ff", "#4d95ff", 1.25, "#4d95ff", "#4d95ff", "#4d95ff", 3, "#4d95ff", "#4d95ff"),
    $(".stats-line-5")[0] && sparklineLine("stats-line-5", [1791, 1649, 1650, 1774, 1753, 1052], 68, 35, "#f794ff", "#f794ff", 1.25, "#f794ff", "#f794ff", "#f794ff", 3, "#f794ff", "#f794ff"),
    $(".stats-line-6")[0] && sparklineLine("stats-line-6", [1584, 1623, 1558, 1573, 1507, 875], 68, 35, "#fff8af", "#fff8af", 1.25, "#fff8af", "#fff8af", "#fff8af", 3, "#fff8af", "#fff8af"),
    $(".stats-line-7")[0] && sparklineLine("stats-line-7", [1093, 1183, 1246, 1285, 1569, 1223], 68, 35, "#ffd492", "#ffd492", 1.25, "#ffd492", "#ffd492", "#ffd492", 3, "#ffd492", "#ffd492"),
    $(".stats-pie")[0] && sparklinePie("stats-pie", [20, 35, 30, 5], 45, 45, ["#fff", "rgba(255,255,255,0.7)", "rgba(255,255,255,0.4)", "rgba(255,255,255,0.2)"]),
    $(".dash-widget-visits")[0] && sparklineLine("dash-widget-visits", [9, 4, 6, 5, 6, 4, 5, 7, 9, 3, 6, 5], "100%", "70px", "#00c292", "#00c292", 2, "#00c292", "#00c292", "#00c292", 5, "#00c292", "#00c292"),
    $(".main-pie")[0] && easyPieChart("main-pie", "rgba(255,255,255,0.2)", "rgba(255,255,255,0)", "rgba(255,255,255,0.7)", 2, "butt", 148),
    $(".sub-pie-1")[0] && easyPieChart("sub-pie-1", "rgba(255,255,255,0.2)", "rgba(255,255,255,0)", "rgba(255,255,255,0.7)", 2, "butt", 90),
    $(".sub-pie-2")[0] && easyPieChart("sub-pie-2", "rgba(255,255,255,0.2)", "rgba(255,255,255,0)", "rgba(255,255,255,0.7)", 2, "butt", 90)


    /*--------------------------
     Bar chart Active Class
    ---------------------------- */
    var data1 = [
            [2011,    1.875000],
            [2012,    0.714286],
            [2013,    32.575758],
            [2014,    5.468750],
            [2015,    18.483871],
            [2016,    5.411765]
        ],
        data2 = [
            [2011,     0.000000],
            [2012,     0.000000],
            [2013,     0.000000],
            [2014,     0.000000],
            [2015,    12.400000],
            [2016,     0.000000]
        ],
        data3 = [
            [2011,    0.108108],
            [2012,    0.125000],
            [2013,    0.155172],
            [2014,    0.093023],
            [2015,    5.484848],
            [2016,    0.266667]
        ],
        data4 = [
            [2011,    0.000000],
            [2012,    0.027397],
            [2013,    4.948276],
            [2014,    0.031646],
            [2015,    0.104575],
            [2016,    0.052632]
        ],
        data5 = [
            [2011,    0.007463],
            [2012,    0.191257],
            [2013,    0.355828],
            [2014,    0.133621],
            [2015,    0.367521],
            [2016,    2.884058]
        ],

        barData = [
            {
            label: "MURDER",
            data: data1,
            color: "#20c841"
        },
            {
            label: "AMBULANCE REQUESTED",
            data: data2,
            color: "#c21918"
        },
            {
            label: "EVIDENCE",
            data: data3,
            color: "#fb9678"
        },
            {
            label: "KIDNAPPING",
            data: data4,
            color: "#01c0c8"
        },
            {
                label: "VEHICLE COLLISION-DR",
                data: data5,
                color: "#c82abe"
            }];
    $("#bar-chart")[0] && $.plot($("#bar-chart"), barData, {

        series: {
            bars: {
                show: !0,
                barWidth: .05,
                order: 1,
                fill: 1
            }
        },
        grid: {
            borderWidth: 1,
            borderColor: "#eee",
            show: !0,
            hoverable: !0,
            clickable: !0
        },
        yaxis: {
            tickColor: "#eee",
            tickDecimals: 0,
            font: {
                lineHeight: 14,
                style: "normal",
                color: "#00c292"
            },
            shadowSize: 0
        },
        xaxis: {
            tickColor: "#fff",
            tickDecimals: 0,
            font: {
                lineHeight: 14,
                style: "normal",
                color: "#00c292"
            },
            shadowSize: 0
        },
        legend: {
            container: ".flot-overlay",
            backgroundOpacity: .5,
            noColumns: 0,
            backgroundColor: "black",
            lineWidth: 0
        }
    }), $(".flot-chart")[0] && ($(".flot-chart").bind("plothover", function (event, pos, item) {
        if (item) {
            var x = item.datapoint[0].toFixed(2),
                y = item.datapoint[1].toFixed(2);
            $(".flot-tooltip").html(item.series.label + " of " + x + " = " + y).css({
                top: item.pageY + 5,
                left: item.pageX + 5
            }).show()
        } else $(".flot-tooltip").hide()
    }), $("<div class='flot-tooltip' class='chart-tooltip'></div>").appendTo("body"))


    /*--------------------------
     Dynamic chart Active Class
    ---------------------------- */


    function getRandomData() {
        for (data.length > 0 && (data = data.slice(1)); data.length < totalPoints;) {
            var prev = data.length > 0 ? data[data.length - 1] : 50,
                y = prev + 10 * Math.random() - 5;
            0 > y ? y = 0 : y > 90 && (y = 90), data.push(y)
        }
        for (var res = [], i = 0; i < data.length; ++i) res.push([i, data[i]]);
        return res
    }

    function update() {
        plot.setData([getRandomData()]), plot.draw(), setTimeout(update, updateInterval)
    }

    var data = [],
        totalPoints = 300,
        updateInterval = 30;
    if ($("#dynamic-chart")[0]) {
        var plot = $.plot("#dynamic-chart", [getRandomData()], {
            series: {
                label: "Product",
                lines: {
                    show: !0,
                    lineWidth: .2,
                    fill: .99
                },
                color: "#00c292",
                shadowSize: 0
            },
            yaxis: {
                min: 0,
                max: 100,
                tickColor: "#eee",
                font: {
                    lineHeight: 14,
                    style: "normal",
                    color: "#00c292"
                },
                shadowSize: 0
            },
            xaxis: {
                tickColor: "#eee",
                show: !0,
                font: {
                    lineHeight: 14,
                    style: "normal",
                    color: "#00c292"
                },
                shadowSize: 0,
                min: 0,
                max: 250
            },
            grid: {
                borderWidth: 1,
                borderColor: "#eee",
                labelMargin: 10,
                hoverable: !0,
                clickable: !0,
                mouseActiveRadius: 6
            },
            legend: {
                show: !1
            }
        });
        update()
    }


})(jQuery); 