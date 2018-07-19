<?php  ?>
<div id="container"></div>
<button id="plain">Plain</button>
<button id="inverted">Inverted</button>
<button id="polar">Polar</button>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">


	var chart = Highcharts.chart('container', {

		title: {
			text: 'Chart.update'
		},

		subtitle: {
			text: 'Last Update <?php echo $last_update; ?>'
		},

		xAxis: {
			categories: <?php echo $category; ?>
		},

		series: [{
			type: 'column',
			colorByPoint: true,
			data: <?php echo $htm; ?>,
			showInLegend: false
		}]

	});


	$('#plain').click(function () {
		chart.update({
			chart: {
				inverted: false,
				polar: false
			},
			subtitle: {
				text: 'Plain'
			}
		});
	});

	$('#inverted').click(function () {
		chart.update({
			chart: {
				inverted: true,
				polar: false
			},
			subtitle: {
				text: 'Inverted'
			}
		});
	});

	$('#polar').click(function () {
		chart.update({
			chart: {
				inverted: false,
				polar: true
			},
			subtitle: {
				text: 'Polar'
			}
		});
	});
</script>