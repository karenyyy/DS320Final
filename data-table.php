<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- wave CSS
        ============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <link rel="stylesheet" href="css/wave/button.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Start Header Top Area -->
<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="logo-area">
                    <h1 style="color: white">DS320 Final Project</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top Area -->
<!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a data-toggle="collapse" data-target="#demodepart" href="#">Tables</a>
                                <ul id="demodepart" class="collapse dropdown-header-top">
                                    <li><a href="data-table.html">Data Table</a></li>
                                </ul>
                            </li>
                            <li><a data-toggle="tab" href="#"><i class="notika-icon notika-edit"></i> Final Report</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu end -->
<!-- Main Menu area start-->
<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li class="active"><a data-toggle="tab" href="index.php"><i class="notika-icon notika-house"></i>
                        Home</a>
                    </li>
                    <li><a data-toggle="tab" href="#Tables"><i class="notika-icon notika-windows"></i> Tables</a>
                    </li>
                    <li><a data-toggle="tab" href="#"><i class="notika-icon notika-edit"></i> Final Report</a>
                    </li>
                </ul>
                <div class="tab-content custom-menu-content">
                    <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="data-table.html">Data Table</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Menu area End-->
<!-- Breadcomb area Start-->
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-windows"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Data Table</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcomb area End-->
<!-- Data Table area Start-->
<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <h2>Basic Example</h2>
                    </div>
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                            <tr style="text-align: right;">
                                <th></th>
                                <th>Agency</th>
                                <th>Create Time</th>
                                <th>Location</th>
                                <th>Area Id</th>
                                <th>Beat</th>
                                <th>Priority</th>
                                <th>Incident Type Id</th>
                                <th>Incident Type Description</th>
                                <th>Event Number</th>
                                <th>Closed Time</th>
                                <th>Days to Resolve</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>0</th>
                                <td>OP</td>
                                <td>2011-01-01 00:00:00</td>
                                <td>ST&amp;SAN PABLO AV</td>
                                <td>1.0</td>
                                <td>06X</td>
                                <td>1.0</td>
                                <td>PDOA</td>
                                <td>POSSIBLE DEAD PERSON</td>
                                <td>LOP110101000001</td>
                                <td>2011-01-01 00:28:17</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>1</th>
                                <td>OP</td>
                                <td>2011-01-01 00:01:11</td>
                                <td>ST&amp;HANNAH ST</td>
                                <td>1.0</td>
                                <td>07X</td>
                                <td>1.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000002</td>
                                <td>2011-01-01 01:12:56</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>OP</td>
                                <td>2011-01-01 00:01:25</td>
                                <td>ST&amp;MARKET ST</td>
                                <td>1.0</td>
                                <td>10Y</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000003</td>
                                <td>2011-01-01 00:07:20</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>OP</td>
                                <td>2011-01-01 00:01:35</td>
                                <td>PRENTISS ST</td>
                                <td>2.0</td>
                                <td>21Y</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000005</td>
                                <td>2011-01-01 00:02:28</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>4</th>
                                <td>OP</td>
                                <td>2011-01-01 00:02:10</td>
                                <td>AV&amp;FOOTHILL BLVD</td>
                                <td>2.0</td>
                                <td>20X</td>
                                <td>1.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000004</td>
                                <td>2011-01-01 00:50:04</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>5</th>
                                <td>OP</td>
                                <td>2011-01-01 00:02:33</td>
                                <td>OAKLAND AV</td>
                                <td>1.0</td>
                                <td>08X</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000006</td>
                                <td>2011-01-01 00:07:39</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>6</th>
                                <td>OP</td>
                                <td>2011-01-01 00:03:03</td>
                                <td>B ST</td>
                                <td>3.0</td>
                                <td>33X</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000010</td>
                                <td>2011-01-01 01:06:26</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>7</th>
                                <td>OP</td>
                                <td>2011-01-01 00:04:25</td>
                                <td>AV&amp;FOOTHILL BLVD</td>
                                <td>2.0</td>
                                <td>24X</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000011</td>
                                <td>2011-01-01 00:04:55</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>8</th>
                                <td>OP</td>
                                <td>2011-01-01 00:05:13</td>
                                <td>AV&amp;FOOTHILL BLVD</td>
                                <td>2.0</td>
                                <td>24X</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000014</td>
                                <td>2011-01-01 00:38:54</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>9</th>
                                <td>OP</td>
                                <td>2011-01-01 00:05:51</td>
                                <td>AV&amp;TEVIS ST</td>
                                <td>3.0</td>
                                <td>26Y</td>
                                <td>2.0</td>
                                <td>415</td>
                                <td>DISTURBING THE PEACE</td>
                                <td>LOP110101000013</td>
                                <td>2011-01-01 02:53:51</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>10</th>
                                <td>OP</td>
                                <td>2011-01-01 00:06:21</td>
                                <td>LYNDE ST</td>
                                <td>2.0</td>
                                <td>21Y</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000015</td>
                                <td>2011-01-01 00:54:57</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>11</th>
                                <td>OP</td>
                                <td>2011-01-01 00:06:26</td>
                                <td>23RD ST&amp;HUGHES AV</td>
                                <td>2.0</td>
                                <td>21Y</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000018</td>
                                <td>2011-01-01 00:08:23</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>12</th>
                                <td>OP</td>
                                <td>2011-01-01 00:07:49</td>
                                <td>ST&amp;SAN PABLO AV</td>
                                <td>1.0</td>
                                <td>10X</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000016</td>
                                <td>2011-01-01 00:08:01</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>13</th>
                                <td>OP</td>
                                <td>2011-01-01 00:08:04</td>
                                <td>BONA ST</td>
                                <td>2.0</td>
                                <td>21Y</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000017</td>
                                <td>2011-01-01 00:08:49</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>14</th>
                                <td>OP</td>
                                <td>2011-01-01 00:08:18</td>
                                <td>83RD AV</td>
                                <td>3.0</td>
                                <td>34X</td>
                                <td>2.0</td>
                                <td>911H</td>
                                <td>911 HANG-UP</td>
                                <td>LOP110101000020</td>
                                <td>2011-01-01 00:44:51</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>15</th>
                                <td>OP</td>
                                <td>2011-01-01 00:08:19</td>
                                <td>85TH AV</td>
                                <td>3.0</td>
                                <td>34X</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000019</td>
                                <td>2011-01-01 00:09:01</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>16</th>
                                <td>OP</td>
                                <td>2011-01-01 00:09:33</td>
                                <td>HIGH ST</td>
                                <td>3.0</td>
                                <td>28X</td>
                                <td>1.0</td>
                                <td>245</td>
                                <td>ASSAULT W/DEADLY WEA</td>
                                <td>LOP110101000021</td>
                                <td>2011-01-02 15:31:11</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <th>17</th>
                                <td>OP</td>
                                <td>2011-01-01 00:09:45</td>
                                <td>AV&amp;MACARTHUR BLVD</td>
                                <td>3.0</td>
                                <td>32Y</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000024</td>
                                <td>2011-01-01 00:11:15</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>18</th>
                                <td>OP</td>
                                <td>2011-01-01 00:09:55</td>
                                <td>INTERNATIONAL BLVD</td>
                                <td>2.0</td>
                                <td>19X</td>
                                <td>2.0</td>
                                <td>933R</td>
                                <td>ALARM-RINGER</td>
                                <td>LOP110101000023</td>
                                <td>2011-01-01 01:05:18</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>19</th>
                                <td>OP</td>
                                <td>2011-01-01 00:10:47</td>
                                <td>AV&amp;A ST</td>
                                <td>3.0</td>
                                <td>33X</td>
                                <td>2.0</td>
                                <td>415C</td>
                                <td>415 UNKNOWN</td>
                                <td>LOP110101000025</td>
                                <td>2011-01-01 00:59:28</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>20</th>
                                <td>OP</td>
                                <td>2011-01-01 00:11:18</td>
                                <td>AV&amp;HOLLY ST</td>
                                <td>3.0</td>
                                <td>30X</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000027</td>
                                <td>2011-01-01 00:12:02</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>21</th>
                                <td>OP</td>
                                <td>2011-01-01 00:11:19</td>
                                <td>CROSBY AV</td>
                                <td>2.0</td>
                                <td>24X</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000026</td>
                                <td>2011-01-01 00:11:39</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>22</th>
                                <td>OP</td>
                                <td>2011-01-01 00:12:37</td>
                                <td>MACARTHUR BLVD</td>
                                <td>2.0</td>
                                <td>22Y</td>
                                <td>2.0</td>
                                <td>SECCK</td>
                                <td>SECURITY CHECK</td>
                                <td>LOP110101000028</td>
                                <td>2011-01-01 00:45:18</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>23</th>
                                <td>OP</td>
                                <td>2011-01-01 00:12:37</td>
                                <td>11TH ST</td>
                                <td>1.0</td>
                                <td>02Y</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000031</td>
                                <td>2011-01-01 00:49:09</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>24</th>
                                <td>OP</td>
                                <td>2011-01-01 00:13:17</td>
                                <td>94TH AV</td>
                                <td>3.0</td>
                                <td>34X</td>
                                <td>1.0</td>
                                <td>246</td>
                                <td>SHOOTING AT/INTO AN</td>
                                <td>LOP110101000029</td>
                                <td>2011-01-01 00:35:40</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>25</th>
                                <td>OP</td>
                                <td>2011-01-01 00:14:22</td>
                                <td>AV&amp;PLYMOUTH ST</td>
                                <td>3.0</td>
                                <td>34X</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000030</td>
                                <td>2011-01-01 00:14:47</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>26</th>
                                <td>OP</td>
                                <td>2011-01-01 00:14:59</td>
                                <td>63RD ST</td>
                                <td>1.0</td>
                                <td>12Y</td>
                                <td>1.0</td>
                                <td>459AU</td>
                                <td>AUTO BURGLARY--IP</td>
                                <td>LOP110101000032</td>
                                <td>2011-01-01 05:40:17</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>27</th>
                                <td>OP</td>
                                <td>2011-01-01 00:15:29</td>
                                <td>ST&amp;GENOA ST</td>
                                <td>1.0</td>
                                <td>10Y</td>
                                <td>2.0</td>
                                <td>415FC</td>
                                <td>415 FIRE CRACKERS</td>
                                <td>LOP110101000035</td>
                                <td>2011-01-01 00:16:37</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>28</th>
                                <td>OP</td>
                                <td>2011-01-01 00:15:42</td>
                                <td>ST&amp;GENOA ST</td>
                                <td>1.0</td>
                                <td>10Y</td>
                                <td>2.0</td>
                                <td>415FC</td>
                                <td>415 FIRE CRACKERS</td>
                                <td>LOP110101000033</td>
                                <td>2011-01-01 00:16:09</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>29</th>
                                <td>OP</td>
                                <td>2011-01-01 00:15:49</td>
                                <td>17TH ST</td>
                                <td>1.0</td>
                                <td>04X</td>
                                <td>1.0</td>
                                <td>245</td>
                                <td>ASSAULT W/DEADLY WEA</td>
                                <td>LOP110101000039</td>
                                <td>2011-01-01 12:25:40</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>30</th>
                                <td>OP</td>
                                <td>2011-01-01 00:16:17</td>
                                <td>ST&amp;WOOD ST</td>
                                <td>1.0</td>
                                <td>02Y</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000034</td>
                                <td>2011-01-01 00:16:23</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>31</th>
                                <td>OP</td>
                                <td>2011-01-01 00:16:28</td>
                                <td>77TH AV</td>
                                <td>3.0</td>
                                <td>30X</td>
                                <td>1.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000036</td>
                                <td>2011-01-01 00:31:11</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>32</th>
                                <td>OP</td>
                                <td>2011-01-01 00:16:59</td>
                                <td>AV&amp;INTERNATIONAL BLVD</td>
                                <td>3.0</td>
                                <td>26Y</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000038</td>
                                <td>2011-01-01 00:17:36</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>33</th>
                                <td>OP</td>
                                <td>2011-01-01 00:18:43</td>
                                <td>ST&amp;ELMHURST AV</td>
                                <td>3.0</td>
                                <td>33X</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000040</td>
                                <td>2011-01-01 00:28:07</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>34</th>
                                <td>OP</td>
                                <td>2011-01-01 00:19:00</td>
                                <td>62ND AV</td>
                                <td>3.0</td>
                                <td>26Y</td>
                                <td>2.0</td>
                                <td>911H</td>
                                <td>911 HANG-UP</td>
                                <td>LOP110101000042</td>
                                <td>2011-01-01 00:20:35</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>35</th>
                                <td>OP</td>
                                <td>2011-01-01 00:19:19</td>
                                <td>62ND AV</td>
                                <td>3.0</td>
                                <td>26Y</td>
                                <td>2.0</td>
                                <td>922</td>
                                <td>DRUNK ON THE STREET</td>
                                <td>LOP110101000043</td>
                                <td>2011-01-01 04:56:37</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>36</th>
                                <td>OP</td>
                                <td>2011-01-01 00:19:28</td>
                                <td>ST&amp;WEST ST</td>
                                <td>1.0</td>
                                <td>10Y</td>
                                <td>2.0</td>
                                <td>415FC</td>
                                <td>415 FIRE CRACKERS</td>
                                <td>LOP110101000044</td>
                                <td>2011-01-01 00:20:05</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>37</th>
                                <td>OP</td>
                                <td>2011-01-01 00:20:10</td>
                                <td>44TH ST</td>
                                <td>1.0</td>
                                <td>10Y</td>
                                <td>2.0</td>
                                <td>933R</td>
                                <td>ALARM-RINGER</td>
                                <td>LOP110101000045</td>
                                <td>2011-01-01 01:09:16</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>38</th>
                                <td>OP</td>
                                <td>2011-01-01 00:23:28</td>
                                <td>ST&amp;WEST ST</td>
                                <td>1.0</td>
                                <td>10Y</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000048</td>
                                <td>2011-01-01 00:24:29</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>39</th>
                                <td>OP</td>
                                <td>2011-01-01 00:24:51</td>
                                <td>ST&amp;BROADWAY</td>
                                <td>1.0</td>
                                <td>03X</td>
                                <td>1.0</td>
                                <td>211</td>
                                <td>ROBBERY</td>
                                <td>LOP110101000049</td>
                                <td>2011-01-01 01:48:29</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>40</th>
                                <td>OP</td>
                                <td>2011-01-01 00:26:29</td>
                                <td>10TH ST</td>
                                <td>1.0</td>
                                <td>03Y</td>
                                <td>1.0</td>
                                <td>943</td>
                                <td>FIGHT</td>
                                <td>LOP110101000050</td>
                                <td>2011-01-01 01:39:13</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>41</th>
                                <td>OP</td>
                                <td>2011-01-01 00:27:25</td>
                                <td>AV&amp;GENOA ST</td>
                                <td>1.0</td>
                                <td>10Y</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000053</td>
                                <td>2011-01-01 00:28:02</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>42</th>
                                <td>OP</td>
                                <td>2011-01-01 00:27:25</td>
                                <td>E 19TH ST</td>
                                <td>2.0</td>
                                <td>20X</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000054</td>
                                <td>2011-01-01 00:33:28</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>43</th>
                                <td>OP</td>
                                <td>2011-01-01 00:30:41</td>
                                <td>AV&amp;E 22ND ST</td>
                                <td>2.0</td>
                                <td>17Y</td>
                                <td>2.0</td>
                                <td>415FC</td>
                                <td>415 FIRE CRACKERS</td>
                                <td>LOP110101000055</td>
                                <td>2011-01-01 00:30:54</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>44</th>
                                <td>OP</td>
                                <td>2011-01-01 00:37:11</td>
                                <td>ST&amp;MARTIN LUTHER KING</td>
                                <td>1.0</td>
                                <td>06X</td>
                                <td>2.0</td>
                                <td>647</td>
                                <td>DISORDERLY CONDUCT:</td>
                                <td>LOP110101000062</td>
                                <td>2011-01-01 01:12:40</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>45</th>
                                <td>OP</td>
                                <td>2011-01-01 00:37:32</td>
                                <td>81ST AV</td>
                                <td>3.0</td>
                                <td>30X</td>
                                <td>1.0</td>
                                <td>945</td>
                                <td>AMBULANCE FOLLOW UP</td>
                                <td>LOP110101000060</td>
                                <td>2011-01-01 01:48:01</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>46</th>
                                <td>OP</td>
                                <td>2011-01-01 00:41:41</td>
                                <td>62ND AV</td>
                                <td>3.0</td>
                                <td>26Y</td>
                                <td>1.0</td>
                                <td>943</td>
                                <td>FIGHT</td>
                                <td>LOP110101000063</td>
                                <td>2011-01-01 00:51:04</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>47</th>
                                <td>OP</td>
                                <td>2011-01-01 00:43:16</td>
                                <td>ST&amp;TELEGRAPH AV</td>
                                <td>1.0</td>
                                <td>04X</td>
                                <td>2.0</td>
                                <td>415</td>
                                <td>DISTURBING THE PEACE</td>
                                <td>LOP110101000064</td>
                                <td>2011-01-01 01:36:17</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>48</th>
                                <td>OP</td>
                                <td>2011-01-01 00:44:58</td>
                                <td>ST&amp;BROADWAY</td>
                                <td>1.0</td>
                                <td>03X</td>
                                <td>1.0</td>
                                <td>242</td>
                                <td>BATTERY</td>
                                <td>LOP110101000065</td>
                                <td>2011-01-01 02:46:27</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>49</th>
                                <td>OP</td>
                                <td>2011-01-01 00:48:08</td>
                                <td>49TH AV</td>
                                <td>3.0</td>
                                <td>26X</td>
                                <td>2.0</td>
                                <td>949</td>
                                <td>SUSPICIOUS VEHICLE</td>
                                <td>LOP110101000071</td>
                                <td>2011-01-01 03:01:29</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>50</th>
                                <td>OP</td>
                                <td>2011-01-01 00:48:26</td>
                                <td>MAGNOLIA ST</td>
                                <td>1.0</td>
                                <td>07X</td>
                                <td>2.0</td>
                                <td>415BF</td>
                                <td>415 BOYFRIEND</td>
                                <td>LOP110101000069</td>
                                <td>2011-01-01 10:21:20</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>51</th>
                                <td>OP</td>
                                <td>2011-01-01 00:49:54</td>
                                <td>WALNUT ST</td>
                                <td>3.0</td>
                                <td>32X</td>
                                <td>1.0</td>
                                <td>CODE7</td>
                                <td>SUBJECT ARMED WITH W</td>
                                <td>LOP110101000070</td>
                                <td>2011-01-01 01:06:36</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>52</th>
                                <td>OP</td>
                                <td>2011-01-01 00:50:57</td>
                                <td>HIGH ST</td>
                                <td>3.0</td>
                                <td>28X</td>
                                <td>2.0</td>
                                <td>415BF</td>
                                <td>415 BOYFRIEND</td>
                                <td>LOP110101000077</td>
                                <td>2011-01-01 08:29:55</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>53</th>
                                <td>OP</td>
                                <td>2011-01-01 00:51:10</td>
                                <td>AV&amp;MACARTHUR BLVD</td>
                                <td>2.0</td>
                                <td>25X</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000072</td>
                                <td>2011-01-01 00:51:58</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>54</th>
                                <td>OP</td>
                                <td>2011-01-01 00:58:43</td>
                                <td>AV&amp;INTERNATIONAL BLVD</td>
                                <td>3.0</td>
                                <td>26Y</td>
                                <td>2.0</td>
                                <td>10851</td>
                                <td>STOLEN VEHICLE</td>
                                <td>LOP110101000088</td>
                                <td>2011-01-01 01:04:00</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>55</th>
                                <td>OP</td>
                                <td>2011-01-01 00:59:37</td>
                                <td>AV&amp;BROOKDALE AV</td>
                                <td>2.0</td>
                                <td>24Y</td>
                                <td>2.0</td>
                                <td>215</td>
                                <td>CARJACKING</td>
                                <td>LOP110101000084</td>
                                <td>2011-01-01 05:52:10</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>56</th>
                                <td>OP</td>
                                <td>2011-01-01 01:03:21</td>
                                <td>CAPP ST</td>
                                <td>2.0</td>
                                <td>21Y</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000087</td>
                                <td>2011-01-01 01:03:59</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>57</th>
                                <td>OP</td>
                                <td>2011-01-01 01:04:14</td>
                                <td>MITCHELL ST</td>
                                <td>2.0</td>
                                <td>20X</td>
                                <td>2.0</td>
                                <td>415C</td>
                                <td>415 UNKNOWN</td>
                                <td>LOP110101000089</td>
                                <td>2011-01-01 09:14:47</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>58</th>
                                <td>OP</td>
                                <td>2011-01-01 01:07:53</td>
                                <td>41ST ST</td>
                                <td>1.0</td>
                                <td>12X</td>
                                <td>2.0</td>
                                <td>415C</td>
                                <td>415 UNKNOWN</td>
                                <td>LOP110101000094</td>
                                <td>2011-01-01 02:11:07</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>59</th>
                                <td>OP</td>
                                <td>2011-01-01 01:09:55</td>
                                <td>OLIVE ST</td>
                                <td>3.0</td>
                                <td>34X</td>
                                <td>2.0</td>
                                <td>415</td>
                                <td>DISTURBANCE-DRINKERS</td>
                                <td>LOP110101000095</td>
                                <td>2011-01-01 01:24:30</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>60</th>
                                <td>OP</td>
                                <td>2011-01-01 01:11:37</td>
                                <td>AV&amp;FERN ST</td>
                                <td>3.0</td>
                                <td>28X</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000098</td>
                                <td>2011-01-01 04:44:31</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>61</th>
                                <td>OP</td>
                                <td>2011-01-01 01:11:55</td>
                                <td>AV&amp;MACARTHUR BLVD</td>
                                <td>3.0</td>
                                <td>35X</td>
                                <td>1.0</td>
                                <td>415C</td>
                                <td>415 UNKNOWN</td>
                                <td>LOP110101000101</td>
                                <td>2011-01-01 07:18:51</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>62</th>
                                <td>OP</td>
                                <td>2011-01-01 01:14:19</td>
                                <td>ST&amp;CLAY ST</td>
                                <td>1.0</td>
                                <td>03Y</td>
                                <td>2.0</td>
                                <td>647</td>
                                <td>DISORDERLY CONDUCT:</td>
                                <td>LOP110101000102</td>
                                <td>2011-01-01 01:58:17</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>63</th>
                                <td>OP</td>
                                <td>2011-01-01 01:16:04</td>
                                <td>65TH AV</td>
                                <td>3.0</td>
                                <td>26Y</td>
                                <td>2.0</td>
                                <td>10851</td>
                                <td>STOLEN VEHICLE</td>
                                <td>LOP110101000103</td>
                                <td>2011-01-01 02:15:57</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>64</th>
                                <td>OP</td>
                                <td>2011-01-01 01:20:17</td>
                                <td>MARKET ST</td>
                                <td>1.0</td>
                                <td>10X</td>
                                <td>2.0</td>
                                <td>SECCK</td>
                                <td>SECURITY CHECK</td>
                                <td>LOP110101000108</td>
                                <td>2011-01-01 08:12:22</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>65</th>
                                <td>OP</td>
                                <td>2011-01-01 01:22:00</td>
                                <td>LOCKWOOD ST</td>
                                <td>3.0</td>
                                <td>30X</td>
                                <td>1.0</td>
                                <td>415</td>
                                <td>415 FAMILY</td>
                                <td>LOP110101000112</td>
                                <td>2011-01-01 03:13:03</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>66</th>
                                <td>OP</td>
                                <td>2011-01-01 01:22:59</td>
                                <td>ST&amp;MANDELA PKWY</td>
                                <td>1.0</td>
                                <td>02X</td>
                                <td>2.0</td>
                                <td>901B</td>
                                <td>VEHICLE COLLISION-UN</td>
                                <td>LOP110101000109</td>
                                <td>2011-01-01 07:29:12</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>67</th>
                                <td>OP</td>
                                <td>2011-01-01 01:23:24</td>
                                <td>E 12TH ST</td>
                                <td>2.0</td>
                                <td>19X</td>
                                <td>2.0</td>
                                <td>912</td>
                                <td>SUSPICIOUS PERSON</td>
                                <td>LOP110101000118</td>
                                <td>2011-01-01 02:15:36</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>68</th>
                                <td>OP</td>
                                <td>2011-01-01 01:24:39</td>
                                <td>22ND ST</td>
                                <td>1.0</td>
                                <td>04X</td>
                                <td>1.0</td>
                                <td>941</td>
                                <td>PERSON DETAINED-IN C</td>
                                <td>LOP110101000114</td>
                                <td>2011-01-01 01:54:10</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>69</th>
                                <td>OP</td>
                                <td>2011-01-01 01:29:54</td>
                                <td>ST&amp;BROADWAY</td>
                                <td>1.0</td>
                                <td>03X</td>
                                <td>1.0</td>
                                <td>943</td>
                                <td>FIGHT</td>
                                <td>LOP110101000119</td>
                                <td>2011-01-01 03:05:50</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>70</th>
                                <td>OP</td>
                                <td>2011-01-01 01:30:37</td>
                                <td>103RD AV</td>
                                <td>3.0</td>
                                <td>32Y</td>
                                <td>2.0</td>
                                <td>912</td>
                                <td>SUSPICIOUS PERSON</td>
                                <td>LOP110101000123</td>
                                <td>2011-01-01 02:53:47</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>71</th>
                                <td>OP</td>
                                <td>2011-01-01 01:32:10</td>
                                <td>BURLWOOD AV</td>
                                <td>3.0</td>
                                <td>31Y</td>
                                <td>1.0</td>
                                <td>415</td>
                                <td>415 FAMILY</td>
                                <td>LOP110101000120</td>
                                <td>2011-01-01 02:28:31</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>72</th>
                                <td>OP</td>
                                <td>2011-01-01 01:34:55</td>
                                <td>ST&amp;TELEGRAPH AV</td>
                                <td>1.0</td>
                                <td>04X</td>
                                <td>2.0</td>
                                <td>415CU</td>
                                <td>DISTURBANCE-CUSTOMER</td>
                                <td>LOP110101000127</td>
                                <td>2011-01-01 08:55:25</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>73</th>
                                <td>OP</td>
                                <td>2011-01-01 01:37:19</td>
                                <td>LYMAN RD</td>
                                <td>2.0</td>
                                <td>22X</td>
                                <td>2.0</td>
                                <td>594</td>
                                <td>VANDALISM</td>
                                <td>LOP110101000125</td>
                                <td>2011-01-01 09:11:01</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>74</th>
                                <td>OP</td>
                                <td>2011-01-01 01:37:27</td>
                                <td>HEGENBERGER RD</td>
                                <td>3.0</td>
                                <td>31Y</td>
                                <td>2.0</td>
                                <td>911H</td>
                                <td>911 HANG-UP</td>
                                <td>LOP110101000126</td>
                                <td>2011-01-01 01:57:16</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>75</th>
                                <td>OP</td>
                                <td>2011-01-01 01:37:57</td>
                                <td>AV&amp;CARRINGTON ST</td>
                                <td>2.0</td>
                                <td>24X</td>
                                <td>2.0</td>
                                <td>415</td>
                                <td>DISTURBING THE PEACE</td>
                                <td>LOP110101000128</td>
                                <td>2011-01-01 01:39:13</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>76</th>
                                <td>OP</td>
                                <td>2011-01-01 01:39:45</td>
                                <td>19TH ST</td>
                                <td>1.0</td>
                                <td>05X</td>
                                <td>2.0</td>
                                <td>415C</td>
                                <td>415 UNKNOWN</td>
                                <td>LOP110101000129</td>
                                <td>2011-01-01 07:00:33</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>77</th>
                                <td>OP</td>
                                <td>2011-01-01 01:43:22</td>
                                <td>ST&amp;TELEGRAPH AV</td>
                                <td>1.0</td>
                                <td>04X</td>
                                <td>2.0</td>
                                <td>415</td>
                                <td>DISTURBING THE PEACE</td>
                                <td>LOP110101000131</td>
                                <td>2011-01-01 01:45:18</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>78</th>
                                <td>OP</td>
                                <td>2011-01-01 01:45:40</td>
                                <td>FRANKLIN ST</td>
                                <td>1.0</td>
                                <td>04X</td>
                                <td>2.0</td>
                                <td>922</td>
                                <td>DRUNK ON THE STREET</td>
                                <td>LOP110101000132</td>
                                <td>2011-01-01 01:47:18</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>79</th>
                                <td>OP</td>
                                <td>2011-01-01 01:50:51</td>
                                <td>ST&amp;CLAY ST</td>
                                <td>1.0</td>
                                <td>01X</td>
                                <td>2.0</td>
                                <td>10851</td>
                                <td>STOLEN VEHICLE</td>
                                <td>LOP110101000142</td>
                                <td>2011-01-01 01:56:05</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>80</th>
                                <td>OP</td>
                                <td>2011-01-01 01:51:53</td>
                                <td>ST&amp;FRANKLIN ST</td>
                                <td>1.0</td>
                                <td>04X</td>
                                <td>1.0</td>
                                <td>943</td>
                                <td>FIGHT</td>
                                <td>LOP110101000137</td>
                                <td>2011-01-01 02:00:55</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>81</th>
                                <td>OP</td>
                                <td>2011-01-01 01:58:04</td>
                                <td>84TH AV</td>
                                <td>3.0</td>
                                <td>33X</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000146</td>
                                <td>2011-01-01 02:29:54</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>82</th>
                                <td>OP</td>
                                <td>2011-01-01 01:58:38</td>
                                <td>PARK BLVD</td>
                                <td>2.0</td>
                                <td>16Y</td>
                                <td>2.0</td>
                                <td>933R</td>
                                <td>ALARM-RINGER</td>
                                <td>LOP110101000149</td>
                                <td>2011-01-01 02:46:34</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>83</th>
                                <td>OP</td>
                                <td>2011-01-01 01:58:43</td>
                                <td>SPRINGFIELD ST</td>
                                <td>3.0</td>
                                <td>32Y</td>
                                <td>2.0</td>
                                <td>20002</td>
                                <td>HIT &amp; RUN (PROPERTY</td>
                                <td>LOP110101000147</td>
                                <td>2011-01-01 06:34:53</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>84</th>
                                <td>OP</td>
                                <td>2011-01-01 02:00:57</td>
                                <td>FOOTHILL WAY</td>
                                <td>3.0</td>
                                <td>NaN</td>
                                <td>1.0</td>
                                <td>943</td>
                                <td>FIGHT</td>
                                <td>LOP110101000152</td>
                                <td>2011-01-01 02:37:16</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>85</th>
                                <td>OP</td>
                                <td>2011-01-01 02:01:49</td>
                                <td>E 25TH ST</td>
                                <td>2.0</td>
                                <td>18Y</td>
                                <td>2.0</td>
                                <td>SECCK</td>
                                <td>SECURITY CHECK</td>
                                <td>LOP110101000154</td>
                                <td>2011-01-01 02:02:46</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>86</th>
                                <td>OP</td>
                                <td>2011-01-01 02:02:46</td>
                                <td>SYCAMORE ST</td>
                                <td>1.0</td>
                                <td>06X</td>
                                <td>2.0</td>
                                <td>415</td>
                                <td>DISTURBANCE-DRINKERS</td>
                                <td>LOP110101000159</td>
                                <td>2011-01-01 03:10:40</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>87</th>
                                <td>OP</td>
                                <td>2011-01-01 02:03:53</td>
                                <td>ST&amp;MADISON ST</td>
                                <td>1.0</td>
                                <td>03X</td>
                                <td>1.0</td>
                                <td>945</td>
                                <td>AMBULANCE FOLLOW UP</td>
                                <td>LOP110101000157</td>
                                <td>2011-01-01 05:45:44</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>88</th>
                                <td>OP</td>
                                <td>2011-01-01 02:05:03</td>
                                <td>13TH ST</td>
                                <td>1.0</td>
                                <td>03X</td>
                                <td>2.0</td>
                                <td>459AU</td>
                                <td>AUTO BURGLARY--IP</td>
                                <td>LOP110101000161</td>
                                <td>2011-01-01 09:40:45</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>89</th>
                                <td>OP</td>
                                <td>2011-01-01 02:05:35</td>
                                <td>BIRCH ST</td>
                                <td>3.0</td>
                                <td>34X</td>
                                <td>1.0</td>
                                <td>415</td>
                                <td>415 FAMILY</td>
                                <td>LOP110101000163</td>
                                <td>2011-01-01 05:55:53</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>90</th>
                                <td>OP</td>
                                <td>2011-01-01 02:06:24</td>
                                <td>65TH AV</td>
                                <td>3.0</td>
                                <td>26Y</td>
                                <td>2.0</td>
                                <td>10851</td>
                                <td>STOLEN VEHICLE</td>
                                <td>LOP110101000160</td>
                                <td>2011-01-01 02:06:55</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>91</th>
                                <td>OP</td>
                                <td>2011-01-01 02:06:31</td>
                                <td>PIEDMONT AV</td>
                                <td>1.0</td>
                                <td>09X</td>
                                <td>1.0</td>
                                <td>943</td>
                                <td>FIGHT</td>
                                <td>LOP110101000162</td>
                                <td>2011-01-01 03:35:42</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>92</th>
                                <td>OP</td>
                                <td>2011-01-01 02:07:23</td>
                                <td>HAWTHORNE AV</td>
                                <td>1.0</td>
                                <td>08X</td>
                                <td>2.0</td>
                                <td>5150</td>
                                <td>MENTALLY ILL</td>
                                <td>LOP110101000164</td>
                                <td>2011-01-01 08:22:58</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>93</th>
                                <td>OP</td>
                                <td>2011-01-01 02:08:36</td>
                                <td>AV&amp;INTERNATIONAL BLVD</td>
                                <td>3.0</td>
                                <td>34X</td>
                                <td>2.0</td>
                                <td>23152</td>
                                <td>DUI ALCOHOL/DRUGS</td>
                                <td>LOP110101000171</td>
                                <td>2011-01-01 02:26:21</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>94</th>
                                <td>OP</td>
                                <td>2011-01-01 02:11:30</td>
                                <td>ST&amp;WASHINGTON ST</td>
                                <td>1.0</td>
                                <td>03Y</td>
                                <td>2.0</td>
                                <td>973</td>
                                <td>TRAFFIC CONTROL POST</td>
                                <td>LOP110101000173</td>
                                <td>2011-01-01 02:32:59</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>95</th>
                                <td>OP</td>
                                <td>2011-01-01 02:11:33</td>
                                <td>78TH AV</td>
                                <td>3.0</td>
                                <td>30Y</td>
                                <td>1.0</td>
                                <td>243E</td>
                                <td>BATTERY ON CO-HABITA</td>
                                <td>LOP110101000176</td>
                                <td>2011-01-01 06:41:20</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>96</th>
                                <td>OP</td>
                                <td>2011-01-01 02:12:02</td>
                                <td>PENNIMAN AV</td>
                                <td>3.0</td>
                                <td>28X</td>
                                <td>1.0</td>
                                <td>CODE7</td>
                                <td>SUBJECT ARMED WITH W</td>
                                <td>LOP110101000174</td>
                                <td>2011-01-01 03:45:59</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>97</th>
                                <td>OP</td>
                                <td>2011-01-01 02:12:46</td>
                                <td>BANCROFT AV</td>
                                <td>3.0</td>
                                <td>30Y</td>
                                <td>1.0</td>
                                <td>929</td>
                                <td>FIRE</td>
                                <td>LOP110101000177</td>
                                <td>2011-01-01 02:13:34</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>98</th>
                                <td>OP</td>
                                <td>2011-01-01 02:12:49</td>
                                <td>SPRINGFIELD ST</td>
                                <td>3.0</td>
                                <td>32Y</td>
                                <td>2.0</td>
                                <td>415C</td>
                                <td>415 UNKNOWN</td>
                                <td>LOP110101000175</td>
                                <td>2011-01-01 02:17:41</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>99</th>
                                <td>OP</td>
                                <td>2011-01-01 02:14:07</td>
                                <td>62ND AV</td>
                                <td>3.0</td>
                                <td>27Y</td>
                                <td>1.0</td>
                                <td>243E</td>
                                <td>BATTERY ON CO-HABITA</td>
                                <td>LOP110101000178</td>
                                <td>2011-01-01 05:43:22</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>100</th>
                                <td>OP</td>
                                <td>2011-01-01 02:15:07</td>
                                <td>HOLWAY ST</td>
                                <td>3.0</td>
                                <td>27Y</td>
                                <td>2.0</td>
                                <td>911H</td>
                                <td>911 HANG-UP</td>
                                <td>LOP110101000179</td>
                                <td>2011-01-01 05:02:00</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>101</th>
                                <td>OP</td>
                                <td>2011-01-01 02:16:05</td>
                                <td>91ST AV</td>
                                <td>3.0</td>
                                <td>33X</td>
                                <td>1.0</td>
                                <td>243E</td>
                                <td>BATTERY ON CO-HABITA</td>
                                <td>LOP110101000180</td>
                                <td>2011-01-01 03:36:25</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>102</th>
                                <td>OP</td>
                                <td>2011-01-01 02:16:42</td>
                                <td>ANTIOCH CT</td>
                                <td>1.0</td>
                                <td>13Z</td>
                                <td>2.0</td>
                                <td>933R</td>
                                <td>ALARM-RINGER</td>
                                <td>LOP110101000182</td>
                                <td>2011-01-01 05:11:58</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>103</th>
                                <td>OP</td>
                                <td>2011-01-01 02:16:58</td>
                                <td>36TH AV</td>
                                <td>2.0</td>
                                <td>23X</td>
                                <td>1.0</td>
                                <td>245</td>
                                <td>ASSAULT W/DEADLY WEA</td>
                                <td>LOP110101000181</td>
                                <td>2011-01-01 05:53:49</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>104</th>
                                <td>OP</td>
                                <td>2011-01-01 02:19:43</td>
                                <td>ST&amp;BROADWAY</td>
                                <td>1.0</td>
                                <td>08X</td>
                                <td>1.0</td>
                                <td>242</td>
                                <td>BATTERY</td>
                                <td>LOP110101000185</td>
                                <td>2011-01-01 04:52:07</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>105</th>
                                <td>OP</td>
                                <td>2011-01-01 02:20:03</td>
                                <td>100TH AV</td>
                                <td>3.0</td>
                                <td>32X</td>
                                <td>2.0</td>
                                <td>415</td>
                                <td>415 FAMILY</td>
                                <td>LOP110101000187</td>
                                <td>2011-01-01 08:00:57</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>106</th>
                                <td>OP</td>
                                <td>2011-01-01 02:23:39</td>
                                <td>GRAND AV</td>
                                <td>1.0</td>
                                <td>04X</td>
                                <td>2.0</td>
                                <td>911H</td>
                                <td>911 HANG-UP</td>
                                <td>LOP110101000188</td>
                                <td>2011-01-01 07:27:04</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>107</th>
                                <td>OP</td>
                                <td>2011-01-01 02:25:43</td>
                                <td>WISCONSIN ST</td>
                                <td>2.0</td>
                                <td>25X</td>
                                <td>1.0</td>
                                <td>459</td>
                                <td>BURGLARY</td>
                                <td>LOP110101000190</td>
                                <td>2011-01-01 04:49:07</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>108</th>
                                <td>OP</td>
                                <td>2011-01-01 02:26:28</td>
                                <td>TUNNEL RD</td>
                                <td>1.0</td>
                                <td>13Y</td>
                                <td>1.0</td>
                                <td>929</td>
                                <td>FIRE</td>
                                <td>LOP110101000192</td>
                                <td>2011-01-01 02:27:34</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>109</th>
                                <td>OP</td>
                                <td>2011-01-01 02:29:15</td>
                                <td>BLVD&amp;FRUITVALE AV</td>
                                <td>2.0</td>
                                <td>23X</td>
                                <td>2.0</td>
                                <td>SECCK</td>
                                <td>SECURITY CHECK</td>
                                <td>LOP110101000196</td>
                                <td>2011-01-01 06:21:07</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>110</th>
                                <td>OP</td>
                                <td>2011-01-01 02:31:09</td>
                                <td>8TH AV</td>
                                <td>2.0</td>
                                <td>17X</td>
                                <td>2.0</td>
                                <td>5150</td>
                                <td>MENTALLY ILL</td>
                                <td>LOP110101000195</td>
                                <td>2011-01-01 04:02:21</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>111</th>
                                <td>OP</td>
                                <td>2011-01-01 02:38:38</td>
                                <td>AV&amp;TYRRELL ST</td>
                                <td>3.0</td>
                                <td>27X</td>
                                <td>1.0</td>
                                <td>943</td>
                                <td>FIGHT</td>
                                <td>LOP110101000199</td>
                                <td>2011-01-01 03:36:18</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>112</th>
                                <td>OP</td>
                                <td>2011-01-01 02:41:19</td>
                                <td>CUTHBERT AV</td>
                                <td>2.0</td>
                                <td>21Y</td>
                                <td>1.0</td>
                                <td>929</td>
                                <td>FIRE</td>
                                <td>LOP110101000200</td>
                                <td>2011-01-01 02:42:24</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>113</th>
                                <td>OP</td>
                                <td>2011-01-01 02:43:51</td>
                                <td>BANCROFT AV</td>
                                <td>3.0</td>
                                <td>30Y</td>
                                <td>1.0</td>
                                <td>OD</td>
                                <td>OVERDOSE</td>
                                <td>LOP110101000201</td>
                                <td>2011-01-01 03:39:55</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>114</th>
                                <td>OP</td>
                                <td>2011-01-01 02:47:08</td>
                                <td>BRANN ST</td>
                                <td>3.0</td>
                                <td>29X</td>
                                <td>2.0</td>
                                <td>933R</td>
                                <td>ALARM-RINGER</td>
                                <td>LOP110101000202</td>
                                <td>2011-01-01 04:09:01</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>115</th>
                                <td>OP</td>
                                <td>2011-01-01 02:50:53</td>
                                <td>77TH AV</td>
                                <td>3.0</td>
                                <td>26Y</td>
                                <td>2.0</td>
                                <td>20002</td>
                                <td>HIT &amp; RUN (PROPERTY</td>
                                <td>LOP110101000205</td>
                                <td>2011-01-01 02:51:44</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>116</th>
                                <td>OP</td>
                                <td>2011-01-01 02:51:25</td>
                                <td>BROADWAY</td>
                                <td>1.0</td>
                                <td>03Y</td>
                                <td>2.0</td>
                                <td>647C</td>
                                <td>OBSTRUCT PERSON'S MO</td>
                                <td>LOP110101000206</td>
                                <td>2011-01-01 08:54:24</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>117</th>
                                <td>OP</td>
                                <td>2011-01-01 02:53:50</td>
                                <td>5TH AV</td>
                                <td>2.0</td>
                                <td>17X</td>
                                <td>1.0</td>
                                <td>211</td>
                                <td>ROBBERY</td>
                                <td>LOP110101000208</td>
                                <td>2011-01-01 03:55:06</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>118</th>
                                <td>OP</td>
                                <td>2011-01-01 03:03:08</td>
                                <td>HUMBOLDT AV</td>
                                <td>2.0</td>
                                <td>24Y</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000211</td>
                                <td>2011-01-01 03:04:07</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>119</th>
                                <td>OP</td>
                                <td>2011-01-01 03:07:28</td>
                                <td>E 22ND ST</td>
                                <td>2.0</td>
                                <td>21X</td>
                                <td>2.0</td>
                                <td>SECCK</td>
                                <td>SECURITY CHECK</td>
                                <td>LOP110101000212</td>
                                <td>2011-01-01 07:08:56</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>120</th>
                                <td>OP</td>
                                <td>2011-01-01 03:07:52</td>
                                <td>63RD AV</td>
                                <td>3.0</td>
                                <td>27Y</td>
                                <td>2.0</td>
                                <td>SECCK</td>
                                <td>SECURITY CHECK</td>
                                <td>LOP110101000213</td>
                                <td>2011-01-01 04:48:13</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>121</th>
                                <td>OP</td>
                                <td>2011-01-01 03:08:38</td>
                                <td>BLVD&amp;HIGH ST</td>
                                <td>3.0</td>
                                <td>27X</td>
                                <td>2.0</td>
                                <td>415</td>
                                <td>DISTURBING THE PEACE</td>
                                <td>LOP110101000214</td>
                                <td>2011-01-01 04:15:50</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>122</th>
                                <td>OP</td>
                                <td>2011-01-01 03:10:48</td>
                                <td>ST</td>
                                <td>1.0</td>
                                <td>08X</td>
                                <td>2.0</td>
                                <td>211</td>
                                <td>ROBBERY</td>
                                <td>LOP110101000216</td>
                                <td>2011-01-01 05:36:00</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>123</th>
                                <td>OP</td>
                                <td>2011-01-01 03:11:49</td>
                                <td>SAN PABLO AV</td>
                                <td>1.0</td>
                                <td>07X</td>
                                <td>1.0</td>
                                <td>245</td>
                                <td>ASSAULT W/DEADLY WEA</td>
                                <td>LOP110101000217</td>
                                <td>2011-01-01 04:01:43</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>124</th>
                                <td>OP</td>
                                <td>2011-01-01 03:14:26</td>
                                <td>18TH ST&amp;6TH AV</td>
                                <td>2.0</td>
                                <td>17X</td>
                                <td>1.0</td>
                                <td>243E</td>
                                <td>BATTERY ON CO-HABITA</td>
                                <td>LOP110101000218</td>
                                <td>2011-01-01 03:25:38</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>125</th>
                                <td>OP</td>
                                <td>2011-01-01 03:14:52</td>
                                <td>JACKSON ST</td>
                                <td>1.0</td>
                                <td>04X</td>
                                <td>2.0</td>
                                <td>SECCK</td>
                                <td>SECURITY CHECK</td>
                                <td>LOP110101000220</td>
                                <td>2011-01-01 09:31:07</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>126</th>
                                <td>OP</td>
                                <td>2011-01-01 03:15:01</td>
                                <td>E 12TH ST</td>
                                <td>2.0</td>
                                <td>23X</td>
                                <td>2.0</td>
                                <td>933SA</td>
                                <td>ALARM-SCHOOL ALARM</td>
                                <td>LOP110101000219</td>
                                <td>2011-01-01 07:25:49</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>127</th>
                                <td>OP</td>
                                <td>2011-01-01 03:15:54</td>
                                <td>92ND AV</td>
                                <td>3.0</td>
                                <td>33X</td>
                                <td>2.0</td>
                                <td>933R</td>
                                <td>ALARM-RINGER</td>
                                <td>LOP110101000222</td>
                                <td>2011-01-01 04:35:42</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>128</th>
                                <td>OP</td>
                                <td>2011-01-01 03:16:46</td>
                                <td>AV&amp;ARTHUR ST</td>
                                <td>3.0</td>
                                <td>30X</td>
                                <td>2.0</td>
                                <td>11550</td>
                                <td>USE OF/UNDER INFLUEN</td>
                                <td>LOP110101000224</td>
                                <td>2011-01-01 04:20:01</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>129</th>
                                <td>OP</td>
                                <td>2011-01-01 03:18:42</td>
                                <td>93RD AV</td>
                                <td>3.0</td>
                                <td>33X</td>
                                <td>2.0</td>
                                <td>SECCK</td>
                                <td>SECURITY CHECK</td>
                                <td>LOP110101000223</td>
                                <td>2011-01-01 08:17:40</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>130</th>
                                <td>OP</td>
                                <td>2011-01-01 03:19:40</td>
                                <td>MADERA AV</td>
                                <td>3.0</td>
                                <td>28X</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000225</td>
                                <td>2011-01-01 03:20:47</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>131</th>
                                <td>OP</td>
                                <td>2011-01-01 03:20:26</td>
                                <td>78TH AV</td>
                                <td>3.0</td>
                                <td>30X</td>
                                <td>1.0</td>
                                <td>901</td>
                                <td>VEHICLE COLLISION-DR</td>
                                <td>LOP110101000226</td>
                                <td>2011-01-02 00:06:06</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>132</th>
                                <td>OP</td>
                                <td>2011-01-01 03:20:54</td>
                                <td>62ND AV</td>
                                <td>3.0</td>
                                <td>27Y</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000227</td>
                                <td>2011-01-01 03:22:43</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>133</th>
                                <td>OP</td>
                                <td>2011-01-01 03:23:18</td>
                                <td>BROMLEY AV</td>
                                <td>3.0</td>
                                <td>27Y</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000228</td>
                                <td>2011-01-01 03:44:33</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>134</th>
                                <td>OP</td>
                                <td>2011-01-01 03:24:07</td>
                                <td>INTERNATIONAL BLVD</td>
                                <td>3.0</td>
                                <td>33X</td>
                                <td>2.0</td>
                                <td>933R</td>
                                <td>ALARM-RINGER</td>
                                <td>LOP110101000230</td>
                                <td>2011-01-01 04:29:40</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>135</th>
                                <td>OP</td>
                                <td>2011-01-01 03:25:34</td>
                                <td>BROADWAY</td>
                                <td>1.0</td>
                                <td>08X</td>
                                <td>2.0</td>
                                <td>SECCK</td>
                                <td>SECURITY CHECK</td>
                                <td>LOP110101000231</td>
                                <td>2011-01-01 07:10:59</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>136</th>
                                <td>OP</td>
                                <td>2011-01-01 03:27:38</td>
                                <td>E 15TH ST</td>
                                <td>2.0</td>
                                <td>20X</td>
                                <td>1.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000233</td>
                                <td>2011-01-01 03:48:40</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>137</th>
                                <td>OP</td>
                                <td>2011-01-01 03:28:58</td>
                                <td>19TH ST&amp;9TH AV</td>
                                <td>2.0</td>
                                <td>17X</td>
                                <td>2.0</td>
                                <td>10851</td>
                                <td>STOLEN VEHICLE</td>
                                <td>LOP110101000234</td>
                                <td>2011-01-01 05:44:57</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>138</th>
                                <td>OP</td>
                                <td>2011-01-01 03:36:51</td>
                                <td>INTERNATIONAL BLVD</td>
                                <td>3.0</td>
                                <td>34X</td>
                                <td>2.0</td>
                                <td>933R</td>
                                <td>ALARM-RINGER</td>
                                <td>LOP110101000236</td>
                                <td>2011-01-01 03:37:44</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>139</th>
                                <td>OP</td>
                                <td>2011-01-01 03:38:39</td>
                                <td>99TH AV CT</td>
                                <td>3.0</td>
                                <td>32X</td>
                                <td>2.0</td>
                                <td>415C</td>
                                <td>415 UNKNOWN</td>
                                <td>LOP110101000237</td>
                                <td>2011-01-01 08:14:19</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>140</th>
                                <td>OP</td>
                                <td>2011-01-01 03:41:14</td>
                                <td>26TH ST</td>
                                <td>1.0</td>
                                <td>06X</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000240</td>
                                <td>2011-01-01 03:57:02</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>141</th>
                                <td>OP</td>
                                <td>2011-01-01 03:42:00</td>
                                <td>MONTICELLO AV</td>
                                <td>3.0</td>
                                <td>27X</td>
                                <td>2.0</td>
                                <td>SECCK</td>
                                <td>SECURITY CHECK</td>
                                <td>LOP110101000239</td>
                                <td>2011-01-01 11:10:46</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>142</th>
                                <td>OP</td>
                                <td>2011-01-01 03:42:30</td>
                                <td>11TH ST</td>
                                <td>1.0</td>
                                <td>02Y</td>
                                <td>1.0</td>
                                <td>245</td>
                                <td>ASSAULT W/DEADLY WEA</td>
                                <td>LOP110101000242</td>
                                <td>2011-01-01 04:56:26</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>143</th>
                                <td>OP</td>
                                <td>2011-01-01 03:43:00</td>
                                <td>RUBY ST</td>
                                <td>1.0</td>
                                <td>08X</td>
                                <td>1.0</td>
                                <td>459</td>
                                <td>BURGLARY</td>
                                <td>LOP110101000241</td>
                                <td>2011-01-01 03:46:39</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>144</th>
                                <td>OP</td>
                                <td>2011-01-01 03:43:02</td>
                                <td>VICKSBURG AV</td>
                                <td>3.0</td>
                                <td>27X</td>
                                <td>1.0</td>
                                <td>943</td>
                                <td>FIGHT</td>
                                <td>LOP110101000243</td>
                                <td>2011-01-01 04:02:33</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>145</th>
                                <td>OP</td>
                                <td>2011-01-01 03:47:17</td>
                                <td>AV&amp;INTERNATIONAL BLVD</td>
                                <td>2.0</td>
                                <td>19X</td>
                                <td>2.0</td>
                                <td>23152</td>
                                <td>DUI ALCOHOL/DRUGS</td>
                                <td>LOP110101000248</td>
                                <td>2011-01-01 06:02:46</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>146</th>
                                <td>OP</td>
                                <td>2011-01-01 03:47:30</td>
                                <td>14TH ST</td>
                                <td>1.0</td>
                                <td>02X</td>
                                <td>2.0</td>
                                <td>933R</td>
                                <td>ALARM-RINGER</td>
                                <td>LOP110101000244</td>
                                <td>2011-01-01 07:39:07</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>147</th>
                                <td>OP</td>
                                <td>2011-01-01 03:50:22</td>
                                <td>CLAY ST</td>
                                <td>1.0</td>
                                <td>03Y</td>
                                <td>2.0</td>
                                <td>933AU</td>
                                <td>AUTO ALARM</td>
                                <td>LOP110101000250</td>
                                <td>2011-01-01 07:12:03</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>148</th>
                                <td>OP</td>
                                <td>2011-01-01 03:55:52</td>
                                <td>PERALTA ST</td>
                                <td>1.0</td>
                                <td>07X</td>
                                <td>1.0</td>
                                <td>242</td>
                                <td>BATTERY</td>
                                <td>LOP110101000253</td>
                                <td>2011-01-01 03:58:56</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>149</th>
                                <td>OP</td>
                                <td>2011-01-01 03:56:18</td>
                                <td>PERALTA ST</td>
                                <td>1.0</td>
                                <td>07X</td>
                                <td>2.0</td>
                                <td>242</td>
                                <td>BATTERY</td>
                                <td>LOP110101000252</td>
                                <td>2011-01-01 13:55:59</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>150</th>
                                <td>OP</td>
                                <td>2011-01-01 03:57:01</td>
                                <td>35TH AV</td>
                                <td>2.0</td>
                                <td>24X</td>
                                <td>1.0</td>
                                <td>243E</td>
                                <td>BATTERY ON CO-HABITA</td>
                                <td>LOP110101000254</td>
                                <td>2011-01-01 06:00:51</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>151</th>
                                <td>OP</td>
                                <td>2011-01-01 04:07:09</td>
                                <td>BLAINE ST</td>
                                <td>3.0</td>
                                <td>33X</td>
                                <td>2.0</td>
                                <td>273_6</td>
                                <td>VIOLATION OF COURT O</td>
                                <td>LOP110101000260</td>
                                <td>2011-01-01 10:30:53</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>152</th>
                                <td>OP</td>
                                <td>2011-01-01 04:09:06</td>
                                <td>ST&amp;EUCLID AV</td>
                                <td>2.0</td>
                                <td>14X</td>
                                <td>1.0</td>
                                <td>242</td>
                                <td>BATTERY</td>
                                <td>LOP110101000261</td>
                                <td>2011-01-01 04:26:28</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>153</th>
                                <td>OP</td>
                                <td>2011-01-01 04:09:51</td>
                                <td>W GRAND AV</td>
                                <td>1.0</td>
                                <td>04X</td>
                                <td>2.0</td>
                                <td>415GF</td>
                                <td>GIRLFRIEND CREATING</td>
                                <td>LOP110101000262</td>
                                <td>2011-01-01 05:21:47</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>154</th>
                                <td>OP</td>
                                <td>2011-01-01 04:11:40</td>
                                <td>CURRAN AV</td>
                                <td>2.0</td>
                                <td>21Y</td>
                                <td>2.0</td>
                                <td>911H</td>
                                <td>911 HANG-UP</td>
                                <td>LOP110101000263</td>
                                <td>2011-01-01 04:40:58</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>155</th>
                                <td>OP</td>
                                <td>2011-01-01 04:15:50</td>
                                <td>ORANGE ST</td>
                                <td>1.0</td>
                                <td>08X</td>
                                <td>1.0</td>
                                <td>243E</td>
                                <td>BATTERY ON CO-HABITA</td>
                                <td>LOP110101000266</td>
                                <td>2011-01-01 04:54:04</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>156</th>
                                <td>OP</td>
                                <td>2011-01-01 04:18:49</td>
                                <td>33RD ST</td>
                                <td>1.0</td>
                                <td>06X</td>
                                <td>2.0</td>
                                <td>933R</td>
                                <td>ALARM-RINGER</td>
                                <td>LOP110101000265</td>
                                <td>2011-01-01 05:31:36</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>157</th>
                                <td>OP</td>
                                <td>2011-01-01 04:25:56</td>
                                <td>61ST AV</td>
                                <td>3.0</td>
                                <td>29X</td>
                                <td>2.0</td>
                                <td>415</td>
                                <td>415 FAMILY</td>
                                <td>LOP110101000268</td>
                                <td>2011-01-01 11:02:45</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>158</th>
                                <td>OP</td>
                                <td>2011-01-01 04:27:20</td>
                                <td>WILLOW ST</td>
                                <td>1.0</td>
                                <td>02Y</td>
                                <td>1.0</td>
                                <td>943</td>
                                <td>FIGHT</td>
                                <td>LOP110101000269</td>
                                <td>2011-01-01 05:46:36</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>159</th>
                                <td>OP</td>
                                <td>2011-01-01 04:28:20</td>
                                <td>41ST ST</td>
                                <td>1.0</td>
                                <td>12X</td>
                                <td>2.0</td>
                                <td>SECCK</td>
                                <td>SECURITY CHECK</td>
                                <td>LOP110101000270</td>
                                <td>2011-01-01 04:39:11</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>160</th>
                                <td>OP</td>
                                <td>2011-01-01 04:29:15</td>
                                <td>HAWTHORNE AV</td>
                                <td>1.0</td>
                                <td>08X</td>
                                <td>2.0</td>
                                <td>5150</td>
                                <td>MENTALLY ILL</td>
                                <td>LOP110101000271</td>
                                <td>2011-01-01 05:54:23</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>161</th>
                                <td>OP</td>
                                <td>2011-01-01 04:32:47</td>
                                <td>REDWOOD RD</td>
                                <td>2.0</td>
                                <td>25Y</td>
                                <td>2.0</td>
                                <td>HAZ</td>
                                <td>HAZARDOUS SITUATION/</td>
                                <td>LOP110101000273</td>
                                <td>2011-01-01 08:09:13</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>162</th>
                                <td>OP</td>
                                <td>2011-01-01 04:35:00</td>
                                <td>35TH AV</td>
                                <td>2.0</td>
                                <td>24X</td>
                                <td>2.0</td>
                                <td>415C</td>
                                <td>415 UNKNOWN</td>
                                <td>LOP110101000274</td>
                                <td>2011-01-01 04:38:27</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>163</th>
                                <td>OP</td>
                                <td>2011-01-01 04:37:00</td>
                                <td>SALISBURY ST</td>
                                <td>2.0</td>
                                <td>24X</td>
                                <td>2.0</td>
                                <td>943</td>
                                <td>FIGHT</td>
                                <td>LOP110101000275</td>
                                <td>2011-01-01 05:56:22</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>164</th>
                                <td>OP</td>
                                <td>2011-01-01 04:49:32</td>
                                <td>E 25TH ST</td>
                                <td>2.0</td>
                                <td>18Y</td>
                                <td>2.0</td>
                                <td>415C</td>
                                <td>415 UNKNOWN</td>
                                <td>LOP110101000278</td>
                                <td>2011-01-01 07:00:17</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>165</th>
                                <td>OP</td>
                                <td>2011-01-01 04:51:51</td>
                                <td>HARRISON ST</td>
                                <td>1.0</td>
                                <td>04X</td>
                                <td>2.0</td>
                                <td>415C</td>
                                <td>415 UNKNOWN</td>
                                <td>LOP110101000279</td>
                                <td>2011-01-01 04:52:59</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>166</th>
                                <td>OP</td>
                                <td>2011-01-01 04:58:18</td>
                                <td>3RD AV</td>
                                <td>2.0</td>
                                <td>19X</td>
                                <td>2.0</td>
                                <td>415C</td>
                                <td>415 UNKNOWN</td>
                                <td>LOP110101000282</td>
                                <td>2011-01-01 07:14:33</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>167</th>
                                <td>OP</td>
                                <td>2011-01-01 05:03:34</td>
                                <td>BROADWAY</td>
                                <td>1.0</td>
                                <td>03X</td>
                                <td>2.0</td>
                                <td>415</td>
                                <td>DISTURBANCE-DRINKERS</td>
                                <td>LOP110101000286</td>
                                <td>2011-01-01 08:54:14</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>168</th>
                                <td>OP</td>
                                <td>2011-01-01 05:06:08</td>
                                <td>107TH AV</td>
                                <td>3.0</td>
                                <td>32X</td>
                                <td>1.0</td>
                                <td>929</td>
                                <td>FIRE</td>
                                <td>LOP110101000287</td>
                                <td>2011-01-01 05:06:32</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>169</th>
                                <td>OP</td>
                                <td>2011-01-01 05:12:09</td>
                                <td>ST&amp;WOOD ST</td>
                                <td>1.0</td>
                                <td>02Y</td>
                                <td>2.0</td>
                                <td>415C</td>
                                <td>415 UNKNOWN</td>
                                <td>LOP110101000290</td>
                                <td>2011-01-01 05:41:03</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>170</th>
                                <td>OP</td>
                                <td>2011-01-01 05:22:25</td>
                                <td>REGENT ST</td>
                                <td>1.0</td>
                                <td>12Y</td>
                                <td>2.0</td>
                                <td>537</td>
                                <td>DEFRAUDING AN INNKEE</td>
                                <td>LOP110101000294</td>
                                <td>2011-01-01 05:48:08</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>171</th>
                                <td>OP</td>
                                <td>2011-01-01 05:25:07</td>
                                <td>84TH AV</td>
                                <td>3.0</td>
                                <td>33X</td>
                                <td>2.0</td>
                                <td>EVAL</td>
                                <td>EVALUATION</td>
                                <td>LOP110101000295</td>
                                <td>2011-01-01 08:17:09</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>172</th>
                                <td>OP</td>
                                <td>2011-01-01 05:34:47</td>
                                <td>18TH ST</td>
                                <td>1.0</td>
                                <td>05X</td>
                                <td>1.0</td>
                                <td>211</td>
                                <td>ROBBERY</td>
                                <td>LOP110101000296</td>
                                <td>2011-01-01 07:06:27</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>173</th>
                                <td>OP</td>
                                <td>2011-01-01 05:36:43</td>
                                <td>ST&amp;MARTIN LUTHER KING</td>
                                <td>1.0</td>
                                <td>11X</td>
                                <td>2.0</td>
                                <td>415</td>
                                <td>DISTURBING THE PEACE</td>
                                <td>LOP110101000299</td>
                                <td>2011-01-01 07:21:22</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>174</th>
                                <td>OP</td>
                                <td>2011-01-01 05:40:01</td>
                                <td>50TH AV</td>
                                <td>3.0</td>
                                <td>27X</td>
                                <td>1.0</td>
                                <td>943</td>
                                <td>FIGHT</td>
                                <td>LOP110101000302</td>
                                <td>2011-01-01 06:19:53</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>175</th>
                                <td>OP</td>
                                <td>2011-01-01 05:42:28</td>
                                <td>35TH ST</td>
                                <td>1.0</td>
                                <td>06X</td>
                                <td>2.0</td>
                                <td>20002</td>
                                <td>HIT &amp; RUN (PROPERTY</td>
                                <td>LOP110101000303</td>
                                <td>2011-01-01 07:13:19</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>176</th>
                                <td>OP</td>
                                <td>2011-01-01 05:46:01</td>
                                <td>MACARTHUR BLVD</td>
                                <td>2.0</td>
                                <td>22X</td>
                                <td>2.0</td>
                                <td>20001</td>
                                <td>HIT &amp; RUN RESULTING</td>
                                <td>LOP110101000305</td>
                                <td>2011-01-01 08:30:13</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>177</th>
                                <td>OP</td>
                                <td>2011-01-01 05:52:22</td>
                                <td>SCHOOL ST</td>
                                <td>2.0</td>
                                <td>21Y</td>
                                <td>1.0</td>
                                <td>212_5</td>
                                <td>ROBBERY: FIRST DEGRE</td>
                                <td>LOP110101000309</td>
                                <td>2011-01-01 08:06:42</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>178</th>
                                <td>OP</td>
                                <td>2011-01-01 05:52:43</td>
                                <td>AV&amp;BANCROFT AV</td>
                                <td>3.0</td>
                                <td>34X</td>
                                <td>2.0</td>
                                <td>20002</td>
                                <td>HIT &amp; RUN (PROPERTY</td>
                                <td>LOP110101000312</td>
                                <td>2011-01-01 09:42:12</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>179</th>
                                <td>OP</td>
                                <td>2011-01-01 05:53:07</td>
                                <td>85TH AV</td>
                                <td>3.0</td>
                                <td>34X</td>
                                <td>2.0</td>
                                <td>911H</td>
                                <td>911 HANG-UP</td>
                                <td>LOP110101000311</td>
                                <td>2011-01-01 10:22:48</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>180</th>
                                <td>OP</td>
                                <td>2011-01-01 05:58:34</td>
                                <td>AV&amp;MANDANA BLVD</td>
                                <td>2.0</td>
                                <td>14Y</td>
                                <td>2.0</td>
                                <td>415</td>
                                <td>DISTURBING THE PEACE</td>
                                <td>LOP110101000315</td>
                                <td>2011-01-01 06:00:00</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>181</th>
                                <td>OP</td>
                                <td>2011-01-01 06:00:35</td>
                                <td>85TH AV</td>
                                <td>3.0</td>
                                <td>35X</td>
                                <td>2.0</td>
                                <td>911H</td>
                                <td>911 HANG-UP</td>
                                <td>LOP110101000316</td>
                                <td>2011-01-01 07:59:06</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>182</th>
                                <td>OP</td>
                                <td>2011-01-01 06:01:53</td>
                                <td>39TH AV</td>
                                <td>2.0</td>
                                <td>24X</td>
                                <td>2.0</td>
                                <td>415GS</td>
                                <td>415 GUNSHOTS</td>
                                <td>LOP110101000317</td>
                                <td>2011-01-01 08:33:15</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>183</th>
                                <td>OP</td>
                                <td>2011-01-01 06:11:06</td>
                                <td>ST&amp;SAN CARLOS AV</td>
                                <td>3.0</td>
                                <td>27X</td>
                                <td>1.0</td>
                                <td>918</td>
                                <td>PERSON SCREAMING</td>
                                <td>LOP110101000319</td>
                                <td>2011-01-01 08:06:35</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>184</th>
                                <td>OP</td>
                                <td>2011-01-01 06:23:44</td>
                                <td>24TH ST</td>
                                <td>1.0</td>
                                <td>06X</td>
                                <td>2.0</td>
                                <td>594</td>
                                <td>VANDALISM</td>
                                <td>LOP110101000321</td>
                                <td>2011-01-01 12:49:50</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>185</th>
                                <td>OP</td>
                                <td>2011-01-01 06:25:35</td>
                                <td>107TH AV</td>
                                <td>3.0</td>
                                <td>32X</td>
                                <td>2.0</td>
                                <td>911H</td>
                                <td>911 HANG-UP</td>
                                <td>LOP110101000320</td>
                                <td>2011-01-01 08:26:29</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>186</th>
                                <td>OP</td>
                                <td>2011-01-01 06:31:10</td>
                                <td>EMBARCADERO WEST</td>
                                <td>1.0</td>
                                <td>01X</td>
                                <td>1.0</td>
                                <td>211</td>
                                <td>ROBBERY</td>
                                <td>LOP110101000322</td>
                                <td>2011-01-01 06:43:40</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>187</th>
                                <td>OP</td>
                                <td>2011-01-01 06:33:51</td>
                                <td>SCHOOL ST</td>
                                <td>2.0</td>
                                <td>21Y</td>
                                <td>2.0</td>
                                <td>UNSEC</td>
                                <td>UNSECURED PREMISE</td>
                                <td>LOP110101000324</td>
                                <td>2011-01-01 07:36:45</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>188</th>
                                <td>OP</td>
                                <td>2011-01-01 06:35:03</td>
                                <td>7TH ST</td>
                                <td>1.0</td>
                                <td>03Y</td>
                                <td>1.0</td>
                                <td>945</td>
                                <td>AMBULANCE FOLLOW UP</td>
                                <td>LOP110101000323</td>
                                <td>2011-01-01 07:44:46</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>189</th>
                                <td>OP</td>
                                <td>2011-01-01 06:40:23</td>
                                <td>49TH AV</td>
                                <td>3.0</td>
                                <td>26X</td>
                                <td>2.0</td>
                                <td>949</td>
                                <td>SUSPICIOUS VEHICLE</td>
                                <td>LOP110101000325</td>
                                <td>2011-01-01 17:01:50</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>190</th>
                                <td>OP</td>
                                <td>2011-01-01 06:44:08</td>
                                <td>INTERNATIONAL BLVD</td>
                                <td>2.0</td>
                                <td>20X</td>
                                <td>1.0</td>
                                <td>261</td>
                                <td>SEXUAL ASSAULT; RAPE</td>
                                <td>LOP110101000327</td>
                                <td>2011-01-01 12:09:36</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>191</th>
                                <td>OP</td>
                                <td>2011-01-01 06:50:53</td>
                                <td>BROADWAY</td>
                                <td>1.0</td>
                                <td>03Y</td>
                                <td>2.0</td>
                                <td>415</td>
                                <td>415 FAMILY</td>
                                <td>LOP110101000329</td>
                                <td>2011-01-01 07:28:03</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>192</th>
                                <td>OP</td>
                                <td>2011-01-01 06:51:55</td>
                                <td>INTERNATIONAL BLVD</td>
                                <td>2.0</td>
                                <td>20X</td>
                                <td>2.0</td>
                                <td>933R</td>
                                <td>ALARM-RINGER</td>
                                <td>LOP110101000328</td>
                                <td>2011-01-01 08:39:20</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>193</th>
                                <td>OP</td>
                                <td>2011-01-01 06:56:25</td>
                                <td>WEST ST</td>
                                <td>1.0</td>
                                <td>06X</td>
                                <td>2.0</td>
                                <td>415C</td>
                                <td>415 UNKNOWN</td>
                                <td>LOP110101000331</td>
                                <td>2011-01-01 12:07:51</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>194</th>
                                <td>OP</td>
                                <td>2011-01-01 06:57:38</td>
                                <td>ST&amp;WEST ST</td>
                                <td>1.0</td>
                                <td>06X</td>
                                <td>2.0</td>
                                <td>20002</td>
                                <td>HIT &amp; RUN (PROPERTY</td>
                                <td>LOP110101000332</td>
                                <td>2011-01-01 09:32:29</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>195</th>
                                <td>OP</td>
                                <td>2011-01-01 07:00:12</td>
                                <td>BANCROFT AV</td>
                                <td>3.0</td>
                                <td>27X</td>
                                <td>2.0</td>
                                <td>594</td>
                                <td>VANDALISM</td>
                                <td>LOP110101000339</td>
                                <td>2011-01-01 23:07:15</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>196</th>
                                <td>OP</td>
                                <td>2011-01-01 07:02:12</td>
                                <td>BLVD&amp;PARKER AV</td>
                                <td>3.0</td>
                                <td>30Y</td>
                                <td>1.0</td>
                                <td>943</td>
                                <td>FIGHT</td>
                                <td>LOP110101000333</td>
                                <td>2011-01-01 07:08:18</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>197</th>
                                <td>OP</td>
                                <td>2011-01-01 07:06:22</td>
                                <td>PARKER AV</td>
                                <td>3.0</td>
                                <td>30Y</td>
                                <td>1.0</td>
                                <td>245</td>
                                <td>ASSAULT W/DEADLY WEA</td>
                                <td>LOP110101000335</td>
                                <td>2011-01-01 20:20:55</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>198</th>
                                <td>OP</td>
                                <td>2011-01-01 07:07:22</td>
                                <td>TAFT AV</td>
                                <td>1.0</td>
                                <td>12Y</td>
                                <td>1.0</td>
                                <td>243E</td>
                                <td>BATTERY ON CO-HABITA</td>
                                <td>LOP110101000337</td>
                                <td>2011-01-01 07:52:37</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>199</th>
                                <td>OP</td>
                                <td>2011-01-01 07:17:44</td>
                                <td>HIGH ST</td>
                                <td>3.0</td>
                                <td>26X</td>
                                <td>2.0</td>
                                <td>933R</td>
                                <td>ALARM-RINGER</td>
                                <td>LOP110101000340</td>
                                <td>2011-01-01 07:29:57</td>
                                <td>0</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Data Table area End-->
<!-- Start Footer area-->
<div class="footer-copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-copy-right">
                    <p>Copyright © 2019. Created by Group .</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer area-->
<!-- jquery
    ============================================ -->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="js/bootstrap.min.js"></script>
<!-- wow JS
    ============================================ -->
<script src="js/wow.min.js"></script>
<!-- price-slider JS
    ============================================ -->
<script src="js/jquery-price-slider.js"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="js/owl.carousel.min.js"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="js/meanmenu/jquery.meanmenu.js"></script>
<!-- counterup JS
    ============================================ -->
<script src="js/counterup/jquery.counterup.min.js"></script>
<script src="js/counterup/waypoints.min.js"></script>
<script src="js/counterup/counterup-active.js"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- sparkline JS
    ============================================ -->
<script src="js/sparkline/jquery.sparkline.min.js"></script>
<script src="js/sparkline/sparkline-active.js"></script>
<!-- flot JS
    ============================================ -->
<script src="js/flot/jquery.flot.js"></script>
<script src="js/flot/jquery.flot.resize.js"></script>
<script src="js/flot/flot-active.js"></script>
<!-- knob JS
    ============================================ -->
<script src="js/knob/jquery.knob.js"></script>
<script src="js/knob/jquery.appear.js"></script>
<script src="js/knob/knob-active.js"></script>
<!--  Chat JS
    ============================================ -->
<script src="js/chat/jquery.chat.js"></script>
<!--  todo JS
    ============================================ -->
<script src="js/todo/jquery.todo.js"></script>
<!--  wave JS
    ============================================ -->
<script src="js/wave/waves.min.js"></script>
<script src="js/wave/wave-active.js"></script>
<!-- plugins JS
    ============================================ -->
<script src="js/plugins.js"></script>
<!-- Data Table JS
    ============================================ -->
<script src="js/data-table/jquery.dataTables.min.js"></script>
<script src="js/data-table/data-table-act.js"></script>
<!-- main JS
    ============================================ -->
<script src="js/main.js"></script>
<!-- tawk chat JS
    ============================================ -->
<script src="js/tawk-chat.js"></script>
</body>

</html>