<!DOCTYPE html>
<html>
<head>
  <title>Mizanur Rahman</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet" />
 <link href="csharp.css" rel="stylesheet" />
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
  <?php
      include_once('header.php')
  ?>
<!--Card C# project-->
<div class="wrapper">
<div class="padding">
  <div class="container">
	<div class="row text-center">
			<div class="col-12">
				<div class="card">
          <h1>Patient Managment</h1>
          <h5>Software Engineering Class Project</h5>
          <hr class="light-100">
          <a data-toggle="collapse" href="#collapse1">Software Engineering Class Project</a>

          <div id = "collapse1" class="w3-content w3-display-container">

              <img class="mySlides" src="pic1.jpg" style="width:100%">
              <img class="mySlides" src="login.jpg" style="width:100%">
              <img class="mySlides" src="signup.jpg" style="width:100%">
              <img class="mySlides" src="regpatient.jpg" style="width:100%">
              <img class="mySlides" src="insurance.jpg" style="width:100%">
              <img class="mySlides" src="medicahis.jpg" style="width:100%">
              <img class="mySlides" src="appoinment.jpg" style="width:100%">
              <img class="mySlides" src="appoinmentList.jpg" style="width:100%">
              <img class="mySlides" src="checkoutpatient.jpg" style="width:100%">
              <img class="mySlides" src="doctor.jpg" style="width:100%">
              <img class="mySlides" src="print.jpg" style="width:100%">
              <img class="mySlides" src="classLibary.jpg" style="width:100%">
              <img class="mySlides" src="ui.jpg" style="width:100%">
              <img class="mySlides" src="datatable.jpg" style="width:100%">
              <img class="mySlides" src="storeProcedure.jpg" style="width:100%">

            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
          </div>
					<div class="card-body">
						<h4 class="card-title">Patient Managment</h4>
						<p class="card-text">This patient managment system software takecare of patient by regestering new patient, make appoinment, meet with doctor, ambulance infor, checkout patient with Records<br>
              it patient record in the database, I created relational database to create, update and delete patient informatin.
             </p>
					</div>
				</div>
			</div>
      <!--Secend picture slide project-->
      <br>
      <hr class="my-4">
	</div>
</div>
</div>
</div>


<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}
</script>
</body>
</html>
