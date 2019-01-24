<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PILGRIM - Book Bus Tickets</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
<!--

Template 2075 Digital Team

http://www.tooplate.com/view/2075-digital-team

-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/et-line-font.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/style3.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400' rel='stylesheet' type='text/css'>
    <style>
body {
        background-image: url("images/photo-1464621922360-27f3bf0eca75.jpeg");
} 
 
</style>
</head>
<body>
<div id="wrapper">
    <div id="header">
        <!-- navigation section -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="index.html" class="navbar-brand"><span><img src="favicon.ico"></span>PILGRIM</a>
		</div>
	</div>
</section>
    </div>
    <div id="content">
    
    <?php
$date=$_POST['date'];
if (isset($_POST['classic'])){
$class="Classic";
}
else if (isset($_POST['luxury'])){
  $class="Luxury";
}
else if (isset($_POST['charter'])){
    $class="Charter";
}
if ($_POST['date']=="Mon Sep 26 2016" ||
       $_POST['date']=="Tue Sep 27 2016" ||
       $_POST['date']=="Wed Sep 28 2016" ||
       $_POST['date']=="Thu Sep 29 2016" ||
       $_POST['date']=="Fri Sep 30 2016" ||
       $_POST['date']=="Sat Oct 01 2016"){
    

    if($_POST['action']=="book"){
        ?>
     <section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<h1 class="heading bold">BOOK <span style="color:goldenrod">TICKET</span></h1>
					<hr>
				</div>
			</div>
            <div class="col-md-6 col-sm-12 contact-info">
				<h2 class="heading bold">ALMOST THERE</h2>
				<p>Just a few more deatils.</p>
				
			</div>
            <div class="col-md-6 col-sm-12">
				<form action="" id="confirmForm" method="post" class="wow fadeInUp" onsubmit="payWithPaystack()" data-wow-delay="0.6s">
					<div class="col-md-6 col-sm-6">
						<input type="text" class="form-control" required placeholder="First Name" name="name">
					</div>
					<div class="col-md-6 col-sm-6">
						<input type="text" class="form-control" required placeholder="Last Name" name="name2">
					</div>
					<div class="col-md-12 col-sm-12">
						<input type="tel" class="form-control" required placeholder="Phone Number" name="phone">
					</div>
                    <div class="col-md-6 col-sm-6">
						<input type="hidden" name="university" value= "<?php echo $_POST['university']; ?>" />
                        <input type="hidden" name="destination" value= "<?php echo $_POST['destination']; ?>" />
                        <input type="hidden" name="class" value= "<?php echo $class; ?>" />
                        <input type="hidden" name="date" value= "<?php echo $_POST['date']; ?>" />
                        <input type="hidden" name="email" value= "<?php echo $_POST['email']; ?>" />
					</div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                     <script src="js/jquery.js"></script>
 <script src="https://js.paystack.co/v1/inline.js"></script>
  <div class="col-md-offset-4 col-md-8 col-sm-offset-4 col-sm-8">
  <input type="button" class="form-control" onclick="payWithPaystack()" value="PAY">
                    </div>

 <?php
    $email= $_POST['email'];
    $promovalue=0;
            if ($_POST['destination']=="Abuja" && $class=="Classic") {
            $price=800000 - $promovalue;
        }
        elseif ($_POST['destination']=="Abuja" && $class=="Luxury") {
            $price=1000000 - $promovalue;
        }
        elseif ($_POST['destination']=="Abuja" && $class=="Charter") {
            $price=10000 - $promovalue;
        }
        elseif ($_POST['destination']=="Abuja" && $_POST['class']=="Flight") {
            $price=3000000 - $promovalue;
        }
        elseif ($_POST['destination']=="Akwa Ibom" && $_POST['class']=="Classic") {
            $price=850000 - $promovalue;
        }
        elseif ($_POST['destination']=="Akwa Ibom" && $_POST['class']=="Luxury") {
            $price=1200000 - $promovalue;
        }
        elseif ($_POST['destination']=="Akwa Ibom" && $_POST['class']=="Charter") {
            $price=10000000 - $promovalue;
        }
        elseif ($_POST['destination']=="Akwa Ibom" && $_POST['class']=="Toyota Hiace") {
            $price=1000000 - $promovalue;
        }
        elseif ($_POST['destination']=="Benin" && $_POST['class']=="Classic") {
            $price=650000 - $promovalue;
        }
        elseif ($_POST['destination']=="Benin" && $_POST['class']=="Luxury") {
            $price=850000 - $promovalue;
        }
        elseif ($_POST['destination']=="Benin" && $_POST['class']=="Charter") {
            $price=10000000 - $promovalue;
        }
        elseif ($_POST['destination']=="Calabar" && $_POST['class']=="Classic") {
            $price=850000 - $promovalue;
        }
        elseif ($_POST['destination']=="Calabar" && $_POST['class']=="Luxury") {
            $price=1200000 - $promovalue;
        }
        elseif ($_POST['destination']=="Calabar" && $_POST['class']=="Charter") {
            $price=10000000 - $promovalue;
        }
        elseif ($_POST['destination']=="Delta" && $_POST['class']=="Classic") {
            $price=650000 - $promovalue;
        }
        elseif ($_POST['destination']=="Delta" && $_POST['class']=="Luxury") {
            $price=850000 - $promovalue;
        }
        elseif ($_POST['destination']=="Delta" && $_POST['class']=="Charter") {
            $price=10000000 - $promovalue;
        }
        elseif ($_POST['destination']=="Ibadan" && $_POST['class']=="Classic") {
            $price=600000 - $promovalue;
        }
        elseif ($_POST['destination']=="Ibadan" && $_POST['class']=="Luxury") {
            $price=800000 - $promovalue;
        }
        elseif ($_POST['destination']=="Ibadan" && $_POST['class']=="Charter") {
            $price=1000000 - $promovalue;
        }
        elseif ($_POST['destination']=="Ilorin" && $_POST['class']=="Classic") {
            $price=600000 - $promovalue;
        }
        elseif ($_POST['destination']=="Ilorin" && $_POST['class']=="Luxury") {
            $price=800000 - $promovalue;
        }
        elseif ($_POST['destination']=="Ilorin" && $_POST['class']=="Charter") {
            $price=10000000 - $promovalue;
        }
        elseif ($_POST['destination']=="Jos" && $_POST['class']=="Classic") {
            $price=900000 - $promovalue;
        }
        elseif ($_POST['destination']=="Jos" && $_POST['class']=="Luxury") {
            $price=1100000 - $promovalue;
        }
        elseif ($_POST['destination']=="Jos" && $_POST['class']=="Charter") {
            $price=10000000 - $promovalue;
        }
        elseif ($_POST['destination']=="Kaduna" && $_POST['class']=="Classic") {
            $price=900000 - $promovalue;
        }
        elseif ($_POST['destination']=="Kaduna" && $_POST['class']=="Luxury") {
            $price=1100000 - $promovalue;
        }
        elseif ($_POST['destination']=="Kaduna" && $_POST['class']=="Charter") {
            $price=10000000 - $promovalue;
        }
        elseif ($_POST['destination']=="Kaduna" && $_POST['class']=="Toyota Hiace") {
            $price=1000000 - $promovalue;
        }
        elseif ($_POST['destination']=="Lagos" && $_POST['class']=="Classic") {
            $price=600000 - $promovalue;
        }
        elseif ($_POST['destination']=="Lagos" && $_POST['class']=="Luxury") {
            $price=800000 - $promovalue;
        }
        elseif ($_POST['destination']=="Lagos" && $_POST['class']=="Charter") {
            $price=10000000 - $promovalue;
        }
        elseif ($_POST['destination']=="Port Harcourt" && $_POST['class']=="Classic") {
            $price=850000 - $promovalue;
        }
        elseif ($_POST['destination']=="Port Harcourt" && $_POST['class']=="Luxury") {
            $price=1200000 - $promovalue;
        }
        elseif ($_POST['destination']=="Port Harcourt" && $_POST['class']=="Charter") {
            $price=10000000 - $promovalue;
        }
        elseif ($_POST['destination']=="Port Harcourt" && $_POST['class']=="Toyota Hiace") {
            $price=1000000 - $promovalue;
        }
   ?> 
<script>
  function payWithPaystack(){
    var handler = PaystackPop.setup({
      key: 'pk_live_cc983f0f7112a377a8c5aa18489d5f36407e8ea1',
      email: '<?php echo $email; ?>',
      amount: <?php echo $price; ?>,
      callback: function(response){
          $('#confirmForm').attr('action', 'regist22.php?trxref=' + response.trxref);
          $('#confirmForm').submit();
      }
    });
    handler.openIframe();
  }
</script>
				</form>
			</div>
			
			
		</div>
	</div>
</section> 
    <?php
    }
    else if ($_POST['action']=="reserve"){
        ?>
    <section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<h1 class="heading bold">RESERVE <span style="color:goldenrod">SEAT</span></h1>
					<hr>
				</div>
			</div>
            <div class="col-md-6 col-sm-12 contact-info">
				<h2 class="heading bold">ALMOST THERE</h2>
				<p>Just a few more details</p>
                <p>Note: Date and time of departure for reserved seats may be subject to change</p>
				
			</div>
            <div class="col-md-6 col-sm-12">
				<form action="regist5.php" id="confirmForm" method="post" class="wow fadeInUp" onsubmit="payWithPaystack()" data-wow-delay="0.6s">
					<div class="col-md-6 col-sm-6">
						<input type="text" class="form-control" required placeholder="First Name" name="name">
					</div>
					<div class="col-md-6 col-sm-6">
						<input type="text" class="form-control" required placeholder="Last Name" name="name2">
					</div>
					<div class="col-md-12 col-sm-12">
						<input type="tel" class="form-control" required placeholder="Phone Number" name="phone">
					</div>
                    <div class="col-md-6 col-sm-6">
						<input type="hidden" name="university" value= "<?php echo $_POST['university']; ?>" />
                        <input type="hidden" name="destination" value= "<?php echo $_POST['destination']; ?>" />
                        <input type="hidden" name="class" value= "<?php echo $class; ?>" />
                        <input type="hidden" name="date" value= "<?php echo $_POST['date']; ?>" />
                        <input type="hidden" name="email" value= "<?php echo $_POST['email']; ?>" />
					</div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <div class="col-md-offset-4 col-md-8 col-sm-offset-4 col-sm-8">
                    <input name="submit" type="submit" class="form-control" value="RESERVE SEAT">
                    </div>
				</form>
			</div>
			
			
		</div>
	</div>
</section>
     <?php   
    }
}
    else {        
    ?>
    <section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<h1 class="heading bold">RESERVE <span style="color:goldenrod">SEAT</span></h1>
					<hr>
				</div>
			</div>
            <div class="col-md-6 col-sm-12 contact-info">
				<h2 class="heading bold">ALMOST THERE</h2>
				<p>Sorry there is no trip on the selected date</p>
                <p></p>
				
			</div>
            <div class="col-md-6 col-sm-12">
				
			</div>
			
			
		</div>
	</div>
</section>
    <!-- book-->
<?php
    }
    ?>

    
    </div>
    
    <div id="footer">
   <footer>
         <div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p style="color:#000000">Copyright © <span style="color:goldenrod; font-family:montserrat">PILGRIM</span> 2016</p>
				<hr>
				<ul class="social-icon">
					
				</ul>
			</div>
		</div>
	</div>
        </footer>
    </div>
    
    <!-- footer section -->
    </div>
    <script src="js/jquery.js"></script>
<script src="js/jquery2.js.js"></script>
<script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min2.js"></script>
    <script src="js/jqBootstrapValidation2.js.js"></script>
    <script src="js/contact_me2.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
    </body>
</html>