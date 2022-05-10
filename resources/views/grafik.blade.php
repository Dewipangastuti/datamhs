<html>
<head>
	<script type="text/javascript" src="../resources/js/Chart.js"></script>
</head>
<body>
	<h1>GRAFIK IPK MAHASISWA</h1>
	<div style="width: 510px;height: 510px: margin: auto;">
		<canvas id="grafikIPK"></canvas>
	</div>
	<script>
		var grafik = document.getElementById("grafikIPK").getContext('2d');
		var grafikIPK = new Chart(grafik, {
		type: 'bar',
		data: {
			labels: <?php echo json_encode($nama); ?>,
			datasets: [{
			label: '',
			data: <?php echo json_encode($ipk); ?>,
			backgroundColor: [
			'rgba(255, 99, 132, 0.2)',
			'rgba(54, 162, 235, 0.2)',
			'rgba(255, 206, 86, 0.2)',
			'rgba(75, 192, 192, 0.2)',
			'rgba(153, 102, 255, 0.2)',
			'rgba(255, 159, 64, 0.2)'
			],
			borderColor: [
			'rgba(255,99,132,1)',
			'rgba(54, 162, 235, 1)',
			'rgba(255, 206, 86, 1)',
			'rgba(75, 192, 192, 1)',
			'rgba(153, 102, 255, 1)',
			'rgba(255, 159, 64, 1)'
			],
			borderWidth: 1
			}]
		},
		options: {
					scales: {
							yAxes: [{
									ticks: {
											beginAtZero:true
											}
									}]
							}
					}
				});
	</script>
</body>
</html>