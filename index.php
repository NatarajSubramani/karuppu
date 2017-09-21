<!DOCTYPE html>
<html lang="en">
<head>
  <title>Financial Express</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
</head>
<body>
<header>
<div class="header-top">
	<div class=" container">
		<div class="col-sm-3">
			<div class="logo">
				 <a href="#"><img src="img/logo.png"/></a>
			</div>
		</div>
		<div class="col-sm-9">
			<div class="mainmenu">
				<nav class="navbar navbar-inverse pull-right">
				  <div class="">
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					  </button>
					</div>
					<div class="collapse navbar-collapse" id="myNavbar">
					  <ul class="nav navbar-nav">
						<li class="">
							<form id="custom-search-form" class="form-search form-horizontal pull-right">
								<div class="input-append span12">
									<input type="text" class="search-query mac-style" placeholder="Search for anything">
									<button type="submit" class="btn"><i class="fa fa-search"></i></button>
								</div>
							</form>
						</li>
						<li><button class="btn btn-primary" >Intelligent Search</button></li>
						<li><button class="btn btn-primary">Filter</button></li>
					  </ul>
					</div>
				  </div>
				</nav>
			</div>
		</div>
	</div>
</div>
</header>
<div class="header-bottom">
	<div class="container">
	    <div class="content-shows current">									
			<h1>My Funds(20)</h1>
			<div class="span2">
				<button id="show-more" class="btn btn-primary">See more</button>
			</div>
		</div>
		<div id="main_area" class="current-hide">
                <!-- Slider -->
                    <div class="span12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="">
                            <div class="span8" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
																		
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
										    <div class="item-content">
											    <h1>My Funds(20)</h1>
											</div>
                                            <img src="img/slider1.jpg">
										</div>
                                        <div class="item" data-slide-number="1">
										    <div class="item-content">
											    <h1>My Funds(20)</h1>
											</div>
                                            <img src="img/slider1.jpg">
										</div>
                                        <div class="item" data-slide-number="2">
										    <div class="item-content">
											    <h1>My Funds(20)</h1>
											</div>
                                            <img src="img/slider1.jpg">
										</div>
                                        <div class="item" data-slide-number="3">
                                            <div class="item-content">
											    <h1>My Funds(20)</h1>
											</div>
                                            <img src="img/slider1.jpg">
										</div>
                                    </div><!-- Carousel nav -->
                                    <a class="carousel-control left" data-slide="prev" href="#myCarousel">‹</a> <a class="carousel-control right" data-slide="next" href="#myCarousel">›</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/Slider-->
                <div class="row hidden-phone" id="slider-thumbs">
                    <div class="span12">
                        <!-- Bottom switcher of slider -->
                        <div class="thumbnails">
						    <div class="col-sm-3">
                            <div class="span2">
                                <a  class="thumbnail" id="carousel-selector-0">
								<img src="img/icons/scan.png">
								<span>Portfolio scan</span>
								</a>
                            </div>
							</div>
                            <div class="col-sm-3">
                            <div class="span2">
                                <a class="thumbnail" id="carousel-selector-1">
								<img src="img/icons/report.png">
								<span>Comparison Chart</span>
								</a>
                            </div>
                            </div>
							<div class="col-sm-3">
                            <div class="span2">
                                <a  class="thumbnail" id="carousel-selector-2">
								    <img src="img/icons/chart.png"/><span>Chart</span>
								</a>
                            </div>
							</div>
							<div class="col-sm-3">
							   <div class="span2 pull-right">
							    <button id="close-banner" class="btn btn-primary">Close</button>
								</div>
							</div>
                        </div>
                    </div>
                </div>
        </div>
	</div>
</div>
<div class="tab-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="panel with-nav-tabs panel-default">
					<div class="panel-heading">
							<ul class="nav nav-tabs" id="get-data">
								<li class="active"><a href="#tab1default" data-toggle="tab">Price Overview</a></li>
								<li><a href="#tab2default" data-toggle="tab">Fund Information</a></li>
								<li><a href="#tab3default" data-toggle="tab">Performance</a></li>
								<li><a href="#tab4default" data-toggle="tab">Ratings</a></li>
								<li><a href="#tab5default" data-toggle="tab">Documents</a></li>
							</ul>
					</div>
					<div class="panel-body">
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1default">
                               <div >
							       <table rule="All" class="table table-responsive table-hover table-striped table-condensed table-bordered text-center" id="price-view">
								         <thead class="text-center"><th>Rank</th><th>Fund</th><th>Group</th><th>Focus</th><th>Yield</th><th>1Y</th><th>3Y</th><th>5Y</th><th>Del_Function</th></thead>
										 <tbody class="custab">
										 
										 </tbody>
								   </table>
							   </div>
							</div>
							<div class="tab-pane fade" id="tab2default">
							    <div >
							       <table rule="All" class="table table-responsive table-hover table-striped table-condensed table-bordered text-center" id="price-performance">
								   <thead class="text-center"><th>Rank</th><th>Fund</th><th>Group</th><th>Focus</th><th>Yield</th><th>1Y</th><th>3Y</th><th>5Y</th><th>Del_Function</th></thead>
										 <tbody class="custab">
										 
										 </tbody>
								   </table>
							   </div>
							</div>
							<div class="tab-pane fade" id="tab3default">
							     <div >
							       <table rule="All" class="table table-responsive table-hover table-striped table-condensed table-bordered text-center" id="annual-performance">
								   <thead class="text-center"><th>Rank</th><th>Fund</th><th>Group</th><th>Focus</th><th>Yield</th><th>1Y</th><th>3Y</th><th>5Y</th><th>Del_Function</th></thead>
										 <tbody class="custab">
										 
										 </tbody>
								   </table>
							   </div>
							</div>
							<div class="tab-pane fade" id="tab4default">Loading data from JSON source...</div>
							<div class="tab-pane fade" id="tab5default">Loading data from JSON source...</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="aside-part">
					<div class="col-sm-12">
						<div class="aside-part1">
							<a href="" class="btn btn-primary btn-block">Configure your widgets</a>
						</div>
					</div>
					<div class="col-sm-12">
					  <div class="panel panel-default">
						<div class="funds-header">
							<div class="progress-head panel-heading">
							   <h3>Most Popular Funds
							   <span class="fa fa-gear"></span>
							   </h3>
							</div>
						</div>
						<div class="panel-body">
						    <div class="progress-outer">
								<div class="progress">
									<div class="progress-bar progress-bar-warning active" style="width:80%; box-shadow:-1px 10px 10px rgba(240, 173, 78,0.7);"></div>
									<div class="progress-value"></div>
								</div>
								<div class="progress-para">
								   <p><span class="fa fa-angle-double-right text-primary"></span>CF Wood ward Equity Income</p>
								</div>
							</div>
							<div class="progress-outer">
								<div class="progress">
									<div class="progress-bar progress-bar-warning active" style="width:60%; box-shadow:-1px 10px 10px rgba(240, 173, 78,0.7);"></div>
									<div class="progress-value"></div>
								</div>
								<div class="progress-para">
								   <p><span class="fa fa-angle-double-right text-primary"></span>CF Wood ward Equity Income</p>
								</div>
							</div>
							<div class="progress-outer">
								<div class="progress">
									<div class="progress-bar progress-bar-warning active" style="width:45%; box-shadow:-1px 10px 10px rgba(240, 173, 78,0.7);"></div>
									<div class="progress-value"></div>
								</div>
								<div class="progress-para">
								   <p><span class="fa fa-angle-double-right text-primary"></span>CF Wood ward Equity Income</p>
								</div>
							</div>
							<div class="progress-outer">
								<div class="progress">
									<div class="progress-bar progress-bar-warning active" style="width:25%; box-shadow:-1px 10px 10px rgba(240, 173, 78,0.7);"></div>
									<div class="progress-value"></div>
								</div>
								<div class="progress-para">
								   <p><span class="fa fa-angle-double-right text-primary"></span>CF Wood ward Equity Income</p>
								</div>
							</div>
							</div>
						</div>
					    </div>
					</div>
					<div class="perform-funding">
						<div class="col-sm-12">
							<div class="panel panel-default">
								<div class="funds-header">
									<div class="progress-head panel-heading">
									   <h3>Top Performing Fund
									   <span class="fa fa-gear"></span>
									   </h3>
									</div>
								</div>
								<div class="panel-body">
									<div class="progress-outer">								    
										<div class="progress">
											<div class="progress-bar progress-bar-info progress-bar-striped active" style="width:33%; box-shadow:-1px 10px 10px rgba(91, 192, 222, 0.7);"></div>
											<div class="progress-value">33%</div>										
										</div>	
										<div class="progress-para">
										   <p><span class="fa fa-angle-double-right text-primary"></span>CF Wood ward Equity Income</p>
										</div>
									</div>
									<div class="progress-outer">
										<div class="progress">
											<div class="progress-bar progress-bar-success progress-bar-striped active" style="width:23%; box-shadow:-1px 10px 10px rgba(116, 195, 116,0.7);"></div>
											<div class="progress-value">23%</div>
										</div>
										<div class="progress-para">
										   <p><span class="fa fa-angle-double-right text-primary"></span>CF Wood ward Equity Income</p>
										</div>
									</div>
									<div class="progress-outer">
										<div class="progress">
											<div class="progress-bar progress-bar-warning progress-bar-striped active" style="width:15%; box-shadow:-1px 10px 10px rgba(240, 173, 78,0.7);"></div>
											<div class="progress-value">15%</div>
										</div>
										<div class="progress-para">
										   <p><span class="fa fa-angle-double-right text-primary"></span>CF Wood ward Equity Income</p>
										</div>
									</div>
								</div>
							</div>  
						</div>  
					</div>  
				</div>  
			</div>  
		</div>
	</div>
</div>
<footer class="container-fluid text-center">
  <p>Copyright ©FE 2017</p>
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/my-js.js"></script>
</body>
</html>