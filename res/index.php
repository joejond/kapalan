<?php
session_start();
include	'./../inc/cekSession.php';
include	'./../inc/conn_db.php';
?>

<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=9"  />
        <title>MONITA - Vessel Tracking System</title>
        
        
        <link rel="stylesheet" type="text/css" href="./../extjs/resources/css/ext-all-gray.css" /> 
		<!-- highCharts-->
        <script type="text/javascript" src="./../js/jquery.min.js"></script>
		<script type="text/javascript" src="./../module/highcharts/highcharts.js"></script>
		<script type="text/javascript" src="./../module/highcharts/highcharts-more.js"></script>
		<script type="text/javascript" src="./../module/highcharts/exporting.js"></script>
		<!--ext JS-->
		<script type="text/javascript" src="./../extjs/ext-all.js"></script>		
        
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false"></script>
        
        <style type="text/css">
            .labels {
              color: blue;
              font-family: "Lucida Grande", "Arial", sans-serif;
              font-size: 9px;
              font-weight: bold;
              text-align: center;
              width: 80px;
              white-space: nowrap;
            }
        </style>            
        <script type="text/javascript" src="markerwithlabel.js"></script>
        <script type="text/javascript" src="tab_map.js"></script>
        <script type="text/javascript" src="detail_kapal.js"></script>
        <!--script type="text/javascript" src="data_hitung.js"></script-->
        <script type="text/javascript" src="marine.js"></script>
    </head>
    <body></body>
</html>
