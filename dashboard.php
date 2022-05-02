<?php 

if(!isset($_SESSION)) {
  session_start();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/dashboard.css">
  <title>Dashboard</title>
</head>
<body>
  <div class="main">
    <canvas id="myChart"></canvas>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
  <script src="./assets/js/myChart.js"></script>
</body>
</html>