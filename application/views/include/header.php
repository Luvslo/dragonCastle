<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd"
>
<html lang="en">
<head>
    <title><?php echo $title;?></title>
    
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="<?php echo base_url()?>bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url()?>bootstrap/css/bootstrap-combined.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/jquery-ui.css" />

    
    <link rel="stylesheet" href="<?php echo base_url()?>bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url()?>bootstrap/css/jquery.jOrgChart.css"/>
    <link rel="stylesheet" href="<?php echo base_url()?>bootstrap/css/custom.css"/>


    <script type="text/javascript" src="<?php echo base_url()?>bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>bootstrap/js/jquery-ui.min.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url()?>bootstrap/js/bootstrap-collapse.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>bootstrap/js/bootstrap-dropdown.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>bootstrap/js/bootstrap-modal.js"></script>
    
    <!-- -->
    <script type="text/javascript" src="<?php echo base_url()?>bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>bootstrap/js/bootstrap-transition.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>bootstrap/js/bootstrap-modal.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>bootstrap/js/jquery-ui.js"></script>
    <script type="text/javascript" laguage="javascript">
        /*$(document).ready( function() {
            $("#myModal").modal('show');
            });*/
        function showMarket()
        {
            $("#myModal").modal('show');
        }
    </script>
    
    
    
    <style>
        #master
        {
            position: relative;
            top: 150px;
            left: 275px;
            width: 800px;
        }
        #decor
        {
            border: 2px groove;
            width: 250px;
            margin: 5px;
            float: left;
            
        }
        #decorImage
        {
            
            position: relative;
            width: 50%;
            height: 80%;
            margin: 0 auto;
            margin-top: 50px;
            height: 180px;
        }
        #decorText
        {
            border: 2px dotted;
            margin: 0 auto;
            text-align: center;
        }
        #leftbar
        {
            position: fixed;
            top: 170px;
            left: 110px;
        }
        #rightbar
        {
            position: fixed;
            top: 170px;
            right:110px;
        }
        #button
        {
            width: 108px !important;
        }
        #main
        {
            position: relative;
        }
    </style>
    <script>
        function test()
        {
            document.getElementById("xp").setAttribute("value",20);
        }
    </script>
    
</head>
<body>