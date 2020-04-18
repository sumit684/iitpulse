
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>E-Book | IIT-PULSE </title>

	<!-- Bootstrap CSS CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<!-- Our Custom CSS -->

	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

	<!-- Font Awesome JS -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

	<style type="text/css">
        /*
    DEMO STYLE
    */

    @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
    body {
    	font-family: 'Poppins', sans-serif;
    	background: #fafafa;
    }

    p {
    	font-family: 'Poppins', sans-serif;
    	font-size: 1.1em;
    	font-weight: 300;
    	line-height: 1.7em;
    	color: #999;
    }

    a,
    a:hover,
    a:focus {
    	color: inherit;
    	text-decoration: none;
    	transition: all 0.3s;
    }

    .navbar {
    	padding: 15px 10px;
    	background: #fff;
    	border: none;
    	border-radius: 0;
    	margin-bottom: 40px;
    	box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
    }

    .navbar-btn {
    	box-shadow: none;
    	outline: none !important;
    	border: none;
    }

    .line {
    	width: 100%;
    	height: 1px;
    	border-bottom: 1px dashed #ddd;
    	margin: 40px 0;
    }

/* ---------------------------------------------------
    SIDEBAR STYLE
    ----------------------------------------------------- */

    #sidebar {
    	width: 250px;
    	position: fixed;
    	top: 0;
    	left: -250px;
    	height: 100vh;
    	z-index: 999;
    	background: rgb(75, 75, 75);
    	color: #fff;
    	transition: all 0.3s;
    	overflow-y: scroll;
    	box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.2);
    }

    #sidebar.active {
    	left: 0;
    }

    #dismiss {
    	width: 35px;
    	height: 35px;
    	line-height: 35px;
    	text-align: center;
    	background: rgb(75, 75, 75);
    	position: absolute;
    	top: 10px;
    	right: 10px;
    	cursor: pointer;
    	-webkit-transition: all 0.3s;
    	-o-transition: all 0.3s;
    	transition: all 0.3s;
    }

    #dismiss:hover {
    	background: #fff;
    	color: #7386D5;
    }

    .overlay {
    	display: none;
    	position: fixed;
    	width: 100vw;
    	height: 100vh;
    	background: rgba(0, 0, 0, 0.7);
    	z-index: 998;
    	opacity: 0;
    	transition: all 0.5s ease-in-out;
    }
    .overlay.active {
    	display: block;
    	opacity: 1;
    }

    #sidebar .sidebar-header {
    	padding: 20px;
    	background: rgb(75, 75, 75);
    }

    #sidebar ul.components {
    	padding: 20px 0;
    	border-bottom: 1px solid #47748b;
    }

    #sidebar ul p {
    	color: #fff;
    	padding: 10px;
    }

    #sidebar ul li a {
    	padding: 10px;
    	font-size: 1.1em;
    	display: block;
    }

    #sidebar ul li a:hover {
    	color: rgb(75, 75, 75);
    	background: #fff;
    }

    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
    	color: #fff;
    	background: #6d7fcc;
    }

    a[data-toggle="collapse"] {
    	position: relative;
    }

    .dropdown-toggle::after {
    	display: block;
    	position: absolute;
    	top: 50%;
    	right: 20px;
    	transform: translateY(-50%);
    }

    ul ul a {
    	font-size: 0.9em !important;
    	padding-left: 30px !important;
    	background: #6d7fcc;
    }

    ul.CTAs {
    	padding: 20px;
    }

    ul.CTAs a {
    	text-align: center;
    	font-size: 0.9em !important;
    	display: block;
    	border-radius: 5px;
    	margin-bottom: 5px;
    }

    a.download {
    	background: #fff;
    	color: #7386D5;
    }

    a.article,
    a.article:hover {
    	background: #6d7fcc !important;
    	color: #fff !important;
    }

/* ---------------------------------------------------
    CONTENT STYLE
    ----------------------------------------------------- */

    #content {
    	width: 100%;
    	padding: 20px;
    	min-height: 100vh;
    	transition: all 0.3s;
    	position: absolute;
    	top: 0;
    	right: 0;
    }

    #sidebarCollapse{
    	position: fixed;
    	top: 5%;
    	left:0;
    	transform: translateY(-50%);
    	transition: all 0.3s;
    	z-index: 1500;
    	border-bottom-right-radius: 200px;
    	border-top-right-radius: 200px;
    	background: rgb(75, 75, 75);
    }
    #sidebarCollapse.active{
    	left:250px;
    }

</style>

</head>

<body>

	<div class="wrapper">
		<!-- Sidebar  -->
		<nav id="sidebar">
			<!-- <div id="dismiss">
				<i class="fas fa-arrow-left"></i>
			</div -->

			<div class="sidebar-header">
				<h3>E - Books</h3>
			</div>

			<ul class="list-unstyled components">
				<div class="input-group p-1">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<li class="active">
					<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Physics</a>
					<ul class="collapse list-unstyled" id="homeSubmenu">
						<?php
						foreach ($pdfs as $index => $name):
							?>
							<li>
								<a href="#" onclick="view('<?=rawurlencode($name)?>');"><?= basename($name,'.pdf')?></a>
							</li>
							<?php
						endforeach;
						?>
					</ul>
				</li>
			</ul>
		</nav>
		<button type="button" id="sidebarCollapse" class="btn btn-info">
			<i class="fas fa-angle-double-right" id="fa-right"></i>
			<i class="fas fa-angle-double-left" id="fa-left" style="display: none;"></i>
		</button>
	</div>
	<!-- Page Content  -->
	<div id="content">

		<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
			<div class="container-fluid">


				<!-- 	</nav> -->
				<div class="pdfViewer">
					<iframe src="<?=base_url()?>/pdfviewer/web/viewer.html?file=../../pdfs/2.pdf" style="height:95vh; width:100%; display: none;"></iframe>
				</div>
			</div>
		</div>

		<div class="overlay"></div>

		<!-- jQuery CDN - Slim version (=without AJAX) -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<!-- Popper.JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<!-- Bootstrap JS -->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
		<!-- jQuery Custom Scroller CDN -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function () {
				$("#sidebar").mCustomScrollbar({
					theme: "minimal"
				});

				$('#dismiss, .overlay').on('click', function () {
					$('#sidebar').removeClass('active');
					$('#sidebarCollapse').removeClass('active');
					$('#fa-right').toggle();
					$('#fa-left').toggle();
					$('.overlay').removeClass('active');
				});

				$('#sidebarCollapse').on('click', function () {
					sidebar();
				});
				sidebar();

			});

			function sidebar(){
				$('#sidebar').toggleClass('active');
				$('#sidebarCollapse').toggleClass('active');
				$('.overlay').toggleClass('active');
				$('#fa-right').toggle();
				$('#fa-left').toggle();
				$('.collapse.in').toggleClass('in');
				$('a[aria-expanded=true]').attr('aria-expanded', 'false');
			}
			function view(pdf) {
			// $('.pdfViewer iframe').hide("fast");
			$('.pdfViewer iframe').attr('src',"<?=base_url()?>/pdfviewer/web/viewer.html?file=../../pdfs/"+pdf);
			$('.pdfViewer iframe').show("slow");
		}

	</script>
</body>

</html>