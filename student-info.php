<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>EduHack | Student Info</title>
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
        <div id="logo1"><h1><a href="javascript:history.back(-1);"><i class="fa fa-chevron-left" aria-hidden="true"></i></a></h1></div>
        <div id="logo2"><h1>STUDENTS INFO</h1></div>
        <div id="logout"><h3><a href="index.php"><i class="fa fa-power-off" aria-hidden="true"></i> LogOut</a></h3></div>
    </div>

	<div id="caja2">
		<div id="data-title">
			<h1>RESUME</h1>
		</div>

		<div id="student-goals">
			<h2>LEARNING GOALS</h2>
			<input type="checkbox"> Adding numbers with 2 digits<br/>
			<input type="checkbox"> Spelling words with "-ng" or "-nk"<br/>
			<input type="checkbox"> What animals live in the Dutch forest?<br/>
		</div>	

		<div id="student-warnings">
				<h2><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> WARNING</h2>

				<ul>
					<li>You should take care of <a href=""><u>MATHS</u></a></li>
					<li>Great job with <a href=""><u>DUTCH</u></a>!</li>
				</ul>
		</div>

		<div id="data-title">
			<h1>DATA COMPARISON</h1>
		</div>

		<div id="data">
			<div id="ck-button">
				<button id="Class" class="button">Group</button>
			</div>

			<div id="ck-button">
				<button id="School" class="button">School</button>
			</div>

			<div id="ck-button">
				<button id="Netherlands" class="button">Netherland</button>
			</div>
		</div>
	</div>

	<div id="radar-chart">
		<canvas id="canvas"></canvas>
	</div>
	<script>
    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };
    var randomColorFactor = function() {
        return Math.round(Math.random() * 255);
    };
    var randomColor = function(opacity) {
        return 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',' + (opacity || '.3') + ')';
    };

    var config = {
        type: 'radar',
        data: {
            labels: ["Math", "Dutch", "History", "English", "Natural Science"],
            datasets: [{
                label: "Child",
                backgroundColor: "rgba(155,255,102,0.6)",
                pointBackgroundColor: "rgba(220,220,220,1)",
                data: [22, 70, 60, 60, 31]
            },  {
                label: "Group",
                backgroundColor: "rgba(102,102,255,0.2)",
                pointBackgroundColor: "rgba(155,255,102,1)",
                hoverPointBackgroundColor: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [60, 65, 40, 45, 50]
            },]
        },
        options: {
            legend: {
                position: 'top',
            },
            title: {
                display: false,
                text: 'Chart.js Radar Chart'
            },
            scale: {
              reverse: false,
              ticks: {
                beginAtZero: true
              }
            }
        }
    };

    window.onload = function() {
        window.myRadar = new Chart(document.getElementById("canvas"), config);
    };

    $('#randomizeData').click(function() {
        $.each(config.data.datasets, function(i, dataset) {
            dataset.data = dataset.data.map(function() {
                return randomScalingFactor();
            });

        });

        window.myRadar.update();
    });

    $('#Netherlands').click(function() {
        var newDataset = {
            label: 'Nederlands',
            borderColor: "rgba(255,178,202,0.2)",
            backgroundColor: "rgba(255,178,202,0.2)",
            pointBorderColor: randomColor(0.7),
            pointBackgroundColor: randomColor(0.5),
            pointBorderWidth: 1,
            data: [70, 70, 70, 70, 70]
        };
config.data.datasets.splice(1, 2);
        config.data.datasets.push(newDataset);
        window.myRadar.update();
    });



        $('#Class').click(function() {
        var newDataset = {
            label: 'Group',
            borderColor: randomColor(0.4),
            backgroundColor: 'rgba(102,102,255,0.2)',
            pointBorderColor: randomColor(0.7),
            pointBackgroundColor: randomColor(0.5),
            pointBorderWidth: 1,
            data: [60, 65, 40, 45, 50]
        };
config.data.datasets.splice(1, 2);
        config.data.datasets.push(newDataset);
        window.myRadar.update();
    });


        $('#School').click(function() {
        var newDataset = {
            label: 'School',
            borderColor: 'rgba(255,255,102,0.4)',
            backgroundColor: 'rgba(255,102,255,0.3)',
            pointBorderColor: randomColor(0.7),
            pointBackgroundColor: randomColor(0.5),
            pointBorderWidth: 1,
            data: [65, 67, 50, 59, 60]
        };
config.data.datasets.splice(1, 2);
        config.data.datasets.push(newDataset);
        window.myRadar.update();
    });





    $('#addData').click(function() {
        if (config.data.datasets.length > 0) {
            config.data.labels.push('dataset #' + config.data.labels.length);

            $.each(config.data.datasets, function (i, dataset) {
                dataset.data.push(randomScalingFactor());
            });

            window.myRadar.update();
        }
    });

    $('#removeDataset').click(function() {
        config.data.datasets.splice(0, 1);
        window.myRadar.update();
    });

    $('#removeData').click(function() {
        config.data.labels.pop(); // remove the label first

        $.each(config.data.datasets, function(i, dataset) {
            dataset.data.pop();
        });

        window.myRadar.update();
    });
    </script>
</div>

</body>
</html>