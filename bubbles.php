<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>EduHack | Global Info</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta http-equiv="Language" content="Español" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="style/style.css">

	<?php include("includes/head.php"); ?>
</head>

<body>
<div class="contenedor">
    <div id="site-info">
        <div id="logo1"><h1><a href="resume.php"><i class="fa fa-home" aria-hidden="true"></i></a></h1></div>
    	<div id="logo2"><h1>GROUPS INFO</h1></div>
        <div id="logout"><h3><a href="index.php"><i class="fa fa-power-off" aria-hidden="true"></i> LogOut</a></h3></div>
    </div>

	<div id="caja1">
		<div id="groups-title">
			<h2> GROUPS & STUDENTS</h2>
		</div>

		<div id="groups">

			<ul>
				<li><input type="checkbox" id="GroupA" checked> <b>Group A</b>
					<ul>
						<li><input type="checkbox" class="checka" checked> Student A 1</li>
						<li><input type="checkbox" class="checka" checked> Student A 2</li>
						<li><input type="checkbox" class="checka" checked> Student A 3</li>
						<li><input type="checkbox" class="checka" checked> Student A 4</li>
						<li><input type="checkbox" class="checka" checked> Student A 5</li>
						<li><input type="checkbox" class="checka" checked> Student A 6</li>
						<li><input type="checkbox" class="checka" checked> Student A 7</li>
						<li><input type="checkbox" class="checka" checked> Student A 8</li>
						<li><input type="checkbox" class="checka" checked> Student A 9</li>
						<li><input type="checkbox" class="checka" checked> Student A 10</li>
						<li><input type="checkbox" class="checka" checked> Student A 11</li>
						<li><input type="checkbox" class="checka" checked> Student A 12</li>
						<li><input type="checkbox" class="checka" checked> Student A 13</li>
						<li><input type="checkbox" class="checka" checked> Student A 14</li>
						<li><input type="checkbox" class="checka" checked> Student A 15</li>
					</ul>
				</li>
				<br/>
				<li><input type="checkbox" id="GroupB"> <b>Group B</b>
					<ul>
						<li><input type="checkbox" class="checkb"> Student B 1</li>
						<li><input type="checkbox" class="checkb"> Student B 2</li>
						<li><input type="checkbox" class="checkb"> Student B 3</li>
						<li><input type="checkbox" class="checkb"> Student B 4</li>
						<li><input type="checkbox" class="checkb"> Student B 5</li>
						<li><input type="checkbox" class="checkb"> Student B 6</li>
						<li><input type="checkbox" class="checkb"> Student B 7</li>
						<li><input type="checkbox" class="checkb"> Student B 8</li>
						<li><input type="checkbox" class="checkb"> Student B 9</li>
						<li><input type="checkbox" class="checkb"> Student B 10</li>
						<li><input type="checkbox" class="checkb"> Student B 11</li>
						<li><input type="checkbox" class="checkb"> Student B 12</li>
						<li><input type="checkbox" class="checkb"> Student B 13</li>
						<li><input type="checkbox" class="checkb"> Student B 14</li>
						<li><input type="checkbox" class="checkb"> Student B 15</li>
					</ul>
				</li>
			</ul>
            <script type="text/javascript">
                $('#GroupA').change(function () {
                    ($(this).is(":checked") ? $('.checka').prop("checked", true) :    $('.checka').prop("checked", false))
                });

                $('#GroupB').change(function () {
                    ($(this).is(":checked") ? $('.checkb').prop("checked", true) :    $('.checkb').prop("checked", false))
                });
            </script>
		</div>
		<div id="subjects">
			<div id="ck-button">
				<button id="Maths" class="button">Maths</button>
			</div>

			<div id="ck-button">
				<button id="Dutch" class="button">Dutch</button>
			</div>

			<div id="ck-button">
				<button id="History" class="button">History</button>
			</div>

			<div id="ck-button">
				<button id="English" class="button">English</button>
			</div>

			<div id="ck-button">
				<button id="Natural_Sciences" class="button">Natural Sciences</button>
			</div>
		</div>
	</div>

	<a href="student-info.php"><div id="bubbles">
		<canvas id="canvas"></canvas>
		<script>
        var DEFAULT_DATASET_SIZE = 7;

        var addedCount = 0;

        var randomScalingFactor = function() {
            return (Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100);
        };
        var randomColorFactor = function() {
            return Math.round(Math.random() * 255);
        };
        var randomColor = function() {
            return 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',.7)';
        };

        var bubbleChartData = {
            animation: {
                duration: 10000
            },
            datasets: [{
                label: "Maths",
                backgroundColor: 'rgba(255,51,51,0.8)',
                data: [{
                    x: 105,
                    y: 22,
                    r: 35,
                }, {
                    x: 310,
                    y: 35,
                    r: 30,
                }, {
                    x: 515,
                    y: 60,
                    r: 30,
                }, {
                    x: 720,
                    y: 43,
                    r: 45,
                }, {
                    x: 925,
                    y: 17,
                    r: 40,
                }, {
                    x: 1130,
                    y: 72,
                    r: 15,
                }, {
                    x: 1335,
                    y: 54,
                    r: 15,
                },{
                    x: 1540,
                    y: 43,
                    r: 35,
                },{
                    x: 1745,
                    y: 60,
                    r: 50,
                },{
                    x: 1950,
                    y: 96,
                    r: 40,
                },{
                    x: 2155,
                    y: 51,
                    r: 25,
                },{
                    x: 2360,
                    y: 52,
                    r: 20,
                },{
                    x: 2565,
                    y: 58,
                    r: 10,
                },{
                    x: 2770,
                    y: 74,
                    r: 25,
                },{
                    x: 2975,
                    y: 10,
                    r: 50,
                }]
            }]
        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myChart = new Chart(ctx, {
                type: 'bubble',
                data: bubbleChartData,
                options: {
                    responsive: true,
                    title:{
                        display:true,
                    },
                }
            });
        };

        $('#Dutch').click(function() {
            ++addedCount;
            var newDataset = {
                label: "Dutch",
                datasetIndex: 2,
                backgroundColor: 'rgba(178,255,102,0.8)',
                data: [{
                    x: 105,
                    y: 70,
                    r: 20,
                }, {
                    x: 310,
                    y: 50,
                    r: 50,
                }, {
                    x: 515,
                    y: 63,
                    r: 15,
                }, {
                    x: 720,
                    y: 65,
                    r: 45,
                }, {
                    x: 925,
                    y: 34,
                    r: 10,
                }, {
                    x: 1130,
                    y: 56,
                    r: 25,
                }, {
                    x: 1335,
                    y: 76,
                    r: 35,
                },{
                    x: 1540,
                    y: 56,
                    r: 40,
                },{
                    x: 1745,
                    y: 61,
                    r: 25,
                },{
                    x: 1950,
                    y: 59,
                    r: 15,
                },{
                    x: 2155,
                    y: 33,
                    r: 10,
                },{
                    x: 2360,
                    y: 20,
                    r: 35,
                },{
                    x: 2565,
                    y: 55,
                    r: 20,
                },{
                    x: 2770,
                    y: 59,
                    r: 30,
                },{
                    x: 2975,
                    y: 68,
                    r: 25,
                }]
            };

            bubbleChartData.datasets.splice(0, 1);
            bubbleChartData.datasets.push(newDataset);
            window.myChart.update();
        });

	$('#Maths').click(function() {
            ++addedCount;
            var newDataset = {
                label: "Maths",
                datasetIndex: 2,
                backgroundColor: 'rgba(255,51,51,0.8)',
                data: [{
                    x: 105,
                    y: 22,
                    r: 35,
                }, {
                    x: 310,
                    y: 35,
                    r: 30,
                }, {
                    x: 515,
                    y: 60,
                    r: 30,
                }, {
                    x: 720,
                    y: 43,
                    r: 45,
                }, {
                    x: 925,
                    y: 17,
                    r: 40,
                }, {
                    x: 1130,
                    y: 72,
                    r: 15,
                }, {
                    x: 1335,
                    y: 54,
                    r: 15,
                },{
                    x: 1540,
                    y: 43,
                    r: 35,
                },{
                    x: 1745,
                    y: 60,
                    r: 50,
                },{
                    x: 1950,
                    y: 96,
                    r: 40,
                },{
                    x: 2155,
                    y: 51,
                    r: 25,
                },{
                    x: 2360,
                    y: 52,
                    r: 20,
                },{
                    x: 2565,
                    y: 58,
                    r: 10,
                },{
                    x: 2770,
                    y: 74,
                    r: 25,
                },{
                    x: 2975,
                    y: 10,
                    r: 50,
                }]
            };

            bubbleChartData.datasets.splice(0, 1);
            bubbleChartData.datasets.push(newDataset);
            window.myChart.update();
        });

	$('#History').click(function() {
            ++addedCount;
            var newDataset = {
                label: "History",
                datasetIndex: 2,
                backgroundColor: 'rgba(102,178,255,0.8)',
                data: [{
                    x: 105,
                    y: 60,
                    r: 30,
                }, {
                    x: 310,
                    y: 42,
                    r: 15,
                }, {
                    x: 515,
                    y: 32,
                    r: 40,
                }, {
                    x: 720,
                    y: 75,
                    r: 20,
                }, {
                    x: 925,
                    y: 12,
                    r: 35,
                }, {
                    x: 1130,
                    y: 48,
                    r: 50,
                }, {
                    x: 1335,
                    y: 63,
                    r: 20,
                },{
                    x: 1540,
                    y: 21,
                    r: 30,
                },{
                    x: 1745,
                    y: 29,
                    r: 40,
                },{
                    x: 1950,
                    y: 71,
                    r: 50,
                },{
                    x: 2155,
                    y: 48,
                    r: 5,
                },{
                    x: 2360,
                    y: 45,
                    r: 30,
                },{
                    x: 2565,
                    y: 42,
                    r: 10,
                },{
                    x: 2770,
                    y: 97,
                    r: 20,
                },{
                    x: 2975,
                    y: 48,
                    r: 45,
                }]
            };

            bubbleChartData.datasets.splice(0, 1);
            bubbleChartData.datasets.push(newDataset);
            window.myChart.update();
        });

	$('#English').click(function() {
            ++addedCount;
            var newDataset = {
                label: "English",
                datasetIndex: 2,
                backgroundColor: 'rgba(255,255,102,0.8)',
                data: [{
                    x: 105,
                    y: 60,
                    r: 50,
                }, {
                    x: 310,
                    y: 60,
                    r: 45,
                }, {
                    x: 515,
                    y: 66,
                    r: 50,
                }, {
                    x: 720,
                    y: 31,
                    r: 35,
                }, {
                    x: 925,
                    y: 51,
                    r: 15,
                }, {
                    x: 1130,
                    y: 36,
                    r: 40,
                }, {
                    x: 1335,
                    y: 10,
                    r: 35,
                },{
                    x: 1540,
                    y: 84,
                    r: 5,
                },{
                    x: 1745,
                    y: 66,
                    r: 10,
                },{
                    x: 1950,
                    y: 38,
                    r: 40,
                },{
                    x: 2155,
                    y: 35,
                    r: 10,
                },{
                    x: 2360,
                    y: 62,
                    r: 5,
                },{
                    x: 2565,
                    y: 19,
                    r: 35,
                },{
                    x: 2770,
                    y: 39,
                    r: 25,
                },{
                    x: 2975,
                    y: 47,
                    r: 30,
                }]
            };

            bubbleChartData.datasets.splice(0, 1);
            bubbleChartData.datasets.push(newDataset);
            window.myChart.update();
        });

	$('#Natural_Sciences').click(function() {
            ++addedCount;
            var newDataset = {
                label: "Natural_Sciences",
                datasetIndex: 2,
                backgroundColor: 'rgba(255,102,255,0.8)',
                data: [{
                    x: 105,
                    y: 31,
                    r: 25,
                }, {
                    x: 310,
                    y: 47,
                    r: 5,
                }, {
                    x: 515,
                    y: 89,
                    r: 5,
                }, {
                    x: 720,
                    y: 37,
                    r: 45,
                }, {
                    x: 925,
                    y: 62,
                    r: 25,
                }, {
                    x: 1130,
                    y: 30,
                    r: 45,
                }, {
                    x: 1335,
                    y: 59,
                    r: 5,
                },{
                    x: 1540,
                    y: 59,
                    r: 20,
                },{
                    x: 1745,
                    y: 67,
                    r: 50,
                },{
                    x: 1950,
                    y: 19,
                    r: 30,
                },{
                    x: 2155,
                    y: 65,
                    r: 25,
                },{
                    x: 2360,
                    y: 32,
                    r: 20,
                },{
                    x: 2565,
                    y: 34,
                    r: 30,
                },{
                    x: 2770,
                    y: 11,
                    r: 40,
                },{
                    x: 2975,
                    y: 73,
                    r: 40,
                }]
            };

            bubbleChartData.datasets.splice(0, 1);
            bubbleChartData.datasets.push(newDataset);
            window.myChart.update();
        });
	</script>
	</div></a>


</div>

</body>
</html>