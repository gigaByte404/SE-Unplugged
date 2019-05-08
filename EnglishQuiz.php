<!DOCTYPE html>
<html lang="en">
<head>
	<title>English Quiz</title>
	<meta charset="UTF-8">
	<meta name="description" content="WebUni Education Template">
	<meta name="keywords" content="webuni, education, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>

<style type="text/css">
#quiz {
	margin-left: 10px;
	background: white;
	padding: 20px 30px 20px 30px;
	width: auto;
	border-radius: 20px;
	
}

input {
	margin-bottom: 20px;
	display: block;
}

#textbox {
	height: 25px;
	font-size: 16px;
	border-radius: 5px;
	border: none;
	padding-left: 5px;
}

#after_submit {
	visibility: hidden;
	background: white;
	padding: 10px 20px 10px 20px;
	width: auto;
	border-radius: 20px;
	margin-left: 10px;
	font-size: 60px;
	margin-top: 30px;
	text-align: center;	

}

#mc {
	display: inline;
} 

/*radio button start*/
/* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #3E3E3E;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}


	</style>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="site-logo">
						<img src="img/logo.png" alt="">
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">
					<a href="./adminlogin.php" class="site-btn header-btn" style="float: right;">Admin Login</a>
					<a href="./teacherlogin.php" class="site-btn header-btn" style="float: right;">Teacher Login</a>
					<nav class="main-menu">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="blog.php">About us</a></li>
							<li><a href="courses.php">Courses</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->

	<!-- Page info -->
	<div class="page-info-section set-bg" data-setbg="img/page-bg/1.jpg">
		<div class="container">
		</div>
	</div>
	<!-- Page info end -->


	<!-- search section -->
	<section class="search-section ss-other-page">
		<div class="container">
			<div class="search-warp">
				<div class="section-title text-white">
					<h2><span>English Quiz</span></h2>
				</div>
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<!-- search form -->
						<form class="course-search-form" id = "quiz" name = "quiz"> 
							<ol>
								<b><li class = "questions"> Which word BEST completes the sentence below?<br>
									A tree has the _____ stem of all the plants.</li></b>
									<label class="container">hard
									  <input type="radio" checked="checked" name = "question1" value="hard">
									  <span class="checkmark"></span>
									</label>
									<label class="container">harder
									  <input type="radio" name = "question1" value="harder">
									  <span class="checkmark"></span>
									</label>
									<label class="container">hardest
									  <input type="radio" name = "question1" value="hardest">
									  <span class="checkmark"></span>
									</label>
						
								<b><li class = "questions">Someone who is joyful is:</li></b>
									<label class="container">without joy
									  <input type="radio" checked="checked" name = "question2" value="without joy">
									  <span class="checkmark"></span>
									</label>
									<label class="container">full of joy
									  <input type="radio" name = "question2" value="full of joy">
									  <span class="checkmark"></span>
									</label>
									<label class="container">joyless
									  <input type="radio" name = "question2" value="joyless">
									  <span class="checkmark"></span>
									</label>
						
								<b><li class = "questions">What is an adjective?</li></b>								
								<label class="container">like a pronoun
								  <input type="radio" name = "question3" value="like a pronoun">
								  <span class="checkmark"></span>
								</label>
								<label class="container">adverb
								  <input type="radio" name = "question3" value="adverb">
								  <span class="checkmark"></span>
								</label>
								<label class="container">words that describe a noun
								  <input type="radio" checked="checked" name = "question3" value="words that describe a noun">
								  <span class="checkmark"></span>
								</label>

								<b><li class = "questions">Ana is beautiful. What is beautiful in the sentence?</li></b>
								<label class="container">adjective
								  <input type="radio" checked="checked" name = "question4" value="adjective">
								  <span class="checkmark"></span>
								</label>
								<label class="container">verb
								  <input type="radio" name = "question4" value="verb">
								  <span class="checkmark"></span>
								</label>
								<label class="container">preposition
								  <input type="radio" name = "question4" value="preposition">
								  <span class="checkmark"></span>
								</label>

								<b><li class = "questions">Joan is kind. What is kind in the sentence?</li></b>
								<label class="container">noun
								  <input type="radio" name = "question5" value="noun">
								  <span class="checkmark"></span>
								</label>
								<label class="container">adjective
								  <input type="radio" checked="checked" name = "question5" value="adjective">
								  <span class="checkmark"></span>
								</label>
								<label class="container">verb
								  <input type="radio" name = "question5" value="verb">
								  <span class="checkmark"></span>
								</label>

							</ol>

							<br><button class="site-btn btn-dark" id = "button" type = "button" value = "I'm finished!" onclick = "check();">I'm finished!</button>
							<!-- <input class="site-btn btn-dark" id = "button" type = "button" value = "I'm finished!" onclick = "check();"> -->

							<!-- <input type="text" placeholder="Course">
							<input type="text" class="last-m" placeholder="Category">
							<button class="site-btn btn-dark">Search Couse</button> -->
						</form>
						<div id = "after_submit">
							<h3 id = "number_correct"></h3>
							<h3 id = "message"></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- search section end -->

<script type="text/javascript">
	function check(){

		var question1 = document.quiz.question1.value;
		var question2 = document.quiz.question2.value;
		var question3 = document.quiz.question3.value;
		var question4 = document.quiz.question4.value;
		var question5 = document.quiz.question5.value;
		var correct = 0;


		if (question1 == "hardest") {
			correct++;
	}
		if (question2 == "full of joy") {
			correct++;
	}	
		if (question3 == "words that describe a noun") {
			correct++;
		}
		if (question4 == "adjective") {
			correct++;
		}
		if (question5 == "adjective") {
			correct++;
		}
		
		// var pictures = ["img/win.gif", "img/meh.jpeg", "img/lose.gif"];
		var messages = ["Great job!", "Almost there!", "You can do better!"];
		var score;

		if (correct <2) {
			score = 2;
		}

		if (correct > 2 && correct < 5) {
			score = 1;
		}

		if (correct == 5) {
			score = 0;
		}


		document.getElementById("after_submit").style.visibility = "visible";

		document.getElementById("message").innerHTML = messages[score];
		document.getElementById("number_correct").innerHTML = "You got " + correct + " correct.";
		// document.getElementById("picture").src = pictures[score];
		}
		

</script>




	<!-- footer section -->
	<footer class="footer-section spad pb-0" style="margin-top: 140px;">
		<div class="footer-top">
			<div class="footer-warp">
				<div class="row">
					<div class="widget-item" style="margin-right: 100px;">
						<h4>Contact Info</h4>
						<ul class="contact-list">
							<li>afraz.bese16seecs@seecs.edu.pk</li>
							<li>atariq.bese16seecs@seecs.edu.pk</li>
							<li>hbukhari.bese16seecs@seecs.edu.pk</li>
							<li>mlatif.bese16seecs@seecs.edu.pk</li>
						</ul>
					</div>
					<div class="widget-item" style="margin-right: 100px;">
						<h4>Offered Courses</h4>
						<ul>
							<li style="padding-bottom: 18px;"><a href="">Programming Course for Kids</a></li>
							<li style="padding-bottom: 18px;"><a href="">Science Course for Kids</a></li>
							<li><a href="">Mathematics Course for Kids</a></li>
						</ul>
					</div>
					
					<div class="widget-item" style="margin-right: 20px;">
						<h4>About Us</h4>
						<ul>
							<li style="padding-bottom: 18px;"><a href="">Software Engineers</a></li>
							<li style="padding-bottom: 18px;"><a href="">Portal for Teachers</a></li>
							<li style="padding-bottom: 18px;"><a href="">Students Grades</a></li>
							<li style="padding-bottom: 18px;"><a href="">Student's LMS</a></li>
							
						</ul>
					</div>
					<div class="widget-item">
						<h4>Newsletter</h4>
						<form class="footer-newslatter">
							<input type="email" placeholder="E-mail">
							<button class="site-btn">Subscribe</button>
							<p>*We don’t spam</p>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="footer-warp">
				<ul class="footer-menu">
					<li><a href="#">Terms & Conditions</a></li>
					<li><a href="#">Register</a></li>
					<li><a href="#">Privacy</a></li>
				</ul>
				
			</div>
		</div>
	</footer> 
	<!-- footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>