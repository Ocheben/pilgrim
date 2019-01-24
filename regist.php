<?php
    
 // Require the paystack class
  require_once 'Paystack.php';

    // Configuration options
    $config['paystack_key_test_secret']         = 'sk_test_e4543faf51b26059f0610b9a379e9760882fbdbd';
    $config['paystack_key_live_secret']         = 'sk_live_c8c26ddb82ca71f12cc4daf88003ccfb8e091546';
    $config['paystack_test_mode']               = FALSE; // set to false when you are ready to go live

    // Create the library object
    $paystack = new Paystack( $config );

  $response = $paystack->transaction->verify([
                            'reference'=>filter_input(INPUT_GET,'trxref')
                          ]);
if($response->status && $response->data->status==='success'){
   
?>

    <?php
    $destination=$_POST['destination2'];
    $university=$_POST['university2'];
    $class=$_POST['class'];

    $email=$_POST['email'];
    $name=$_POST['name'];
    $name2="..";
    $phone=$_POST['phone'];
    $ref=$_GET['trxref'];

    
    //Price
        if ($_POST['destination2']=="Abuja" && $class=="Classic") {
            $price="9000";
        }
        elseif ($_POST['destination2']=="Abuja" && $class=="Luxury") {
            $price="11000";
        }
        elseif ($_POST['destination2']=="Abuja" && $class=="Charter") {
            $price="100000";
        }

        elseif ($_POST['destination2']=="Akwa Ibom" && $_POST['class']=="Classic") {
            $price="10000";
        }
        elseif ($_POST['destination2']=="Akwa Ibom" && $_POST['class']=="Luxury") {
            $price="11000";
        }
        elseif ($_POST['destination2']=="Akwa Ibom" && $_POST['class']=="Charter") {
            $price="100000";
        }
        elseif ($_POST['destination2']=="Benin" && $_POST['class']=="Classic") {
            $price="7000";
        }
        elseif ($_POST['destination2']=="Benin" && $_POST['class']=="Luxury") {
            $price="9000";
        }
        elseif ($_POST['destination2']=="Benin" && $_POST['class']=="Charter") {
            $price="100000";
        }
        elseif ($_POST['destination2']=="Calabar" && $_POST['class']=="Classic") {
            $price="10000";
        }
        elseif ($_POST['destination2']=="Calabar" && $_POST['class']=="Luxury") {
            $price="12000";
        }
        elseif ($_POST['destination2']=="Calabar" && $_POST['class']=="Charter") {
            $price="100000";
        }
        elseif ($_POST['destination2']=="Delta" && $_POST['class']=="Classic") {
            $price="7000";
        }
        elseif ($_POST['destination2']=="Delta" && $_POST['class']=="Luxury") {
            $price="9000";
        }
        elseif ($_POST['destination2']=="Delta" && $_POST['class']=="Charter") {
            $price="100000";
        }
        elseif ($_POST['destination2']=="Ibadan" && $_POST['class']=="Classic") {
            $price="7000";
        }
        elseif ($_POST['destination2']=="Ibadan" && $_POST['class']=="Luxury") {
            $price="9000";
        }
        elseif ($_POST['destination2']=="Ibadan" && $_POST['class']=="Charter") {
            $price="100000";
        }
        elseif ($_POST['destination2']=="Ilorin" && $_POST['class']=="Classic") {
            $price="7000";
        }
        elseif ($_POST['destination2']=="Ilorin" && $_POST['class']=="Luxury") {
            $price="9000";
        }
        elseif ($_POST['destination2']=="Ilorin" && $_POST['class']=="Charter") {
            $price="100000";
        }
        elseif ($_POST['destination2']=="Jos" && $_POST['class']=="Classic") {
            $price="11000";
        }
        elseif ($_POST['destination2']=="Jos" && $_POST['class']=="Luxury") {
            $price="13000";
        }
        elseif ($_POST['destination2']=="Jos" && $_POST['class']=="Charter") {
            $price="100000";
        }
        elseif ($_POST['destination2']=="Kaduna" && $_POST['class']=="Classic") {
            $price="11000";
        }
        elseif ($_POST['destination2']=="Kaduna" && $_POST['class']=="Luxury") {
            $price="13000";
        }
        elseif ($_POST['destination2']=="Kaduna" && $_POST['class']=="Charter") {
            $price="100000";
        }

        elseif ($_POST['destination2']=="Lagos" && $_POST['class']=="Classic") {
            $price="7000";
        }
        elseif ($_POST['destination2']=="Lagos" && $_POST['class']=="Luxury") {
            $price="9000";
        }
        elseif ($_POST['destination2']=="Lagos" && $_POST['class']=="Charter") {
            $price="100000";
        }
        elseif ($_POST['destination2']=="Port Harcourt" && $_POST['class']=="Classic") {
            $price="9000";
        }
        elseif ($_POST['destination2']=="Port Harcourt" && $_POST['class']=="Luxury") {
            $price="11000";
        }
        elseif ($_POST['destination2']=="Port Harcourt" && $_POST['class']=="Charter") {
            $price="100000";
        }

  // Date
       if ($_POST['date2']=="Saturday")	{
           $date="Saturday, 24th June";
       }
    else if ($_POST['date2']=="Sunday")	{
           $date="Sunday, 25th June";
       }
    else if ($_POST['date2']=="Friday")	{
           $date="Friday, 23rd June";
       }
           
     
 
    //save to MySQL
    //connect to MySQL
    $con =mysql_connect("localhost:3306","pilgrim","Ojile!(60");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
    //Connect to Database
      switch ($_POST['destination2']) {
        case "Abuja":
            mysql_select_db("pilgrim_dec_abuja", $con);
              $time="8:00am";
            break;

       
        case "Lagos":
            mysql_select_db("pilgrim_dec_lagos", $con);
              $time="8:00am";
            break;
            

        case "Port Harcourt" :
            mysql_select_db("pilgrim_dec_port", $con);
              $time="7:00am";
            break;
              
        case "Akwa Ibom" :
            mysql_select_db("pilgrim_dec_akwa", $con);
              $time="7:00am";
            break;
              
        case "Calabar" :
            mysql_select_db("pilgrim_dec_calabar", $con);
              $time="7:00am";
            break;
              
        case "Ibadan" :
            mysql_select_db("pilgrim_dec_ibadan", $con);
              $time="8:00am";
            break;
              
        case "Ilorin" :
            mysql_select_db("pilgrim_dec_ilorin", $con);
              $time="8:00am";
            break;
              
        case "Benin" :
            mysql_select_db("pilgrim_dec_benin", $con);
              $time="8:00am";
            break;
              
        case "Delta" :
            mysql_select_db("pilgrim_dec_delta", $con);
              $time="8:00am";
            break;
              
        case "Kaduna" :
            mysql_select_db("pilgrim_dec_kaduna", $con);
              $time="7:00am";
            break;
              
        case "Jos" :
            mysql_select_db("pilgrim_dec_jos", $con);
              $time="7:00am";
            break;

        default:
            echo "Please select a class";
    }
    
    //save to my sql
    if ($_POST['date2']=="Saturday")	{
    
        $sql="INSERT INTO Saturday (name, name2, phone, email, date, location, university, class, trxref)
VALUES ('$_POST[name]', '$_POST[name2]','$_POST[phone]','$_POST[email]', '$_POST[date2]', '$_POST[destination2]', '$_POST[university2]',  '$_POST[class]', '$ref')";

}
    
  elseif ($_POST['date2']=="Sunday") {
        $sql="INSERT INTO Sunday (name, name2, phone, email, date, location, university, class, trxref)
VALUES ('$_POST[name]', '$_POST[name2]','$_POST[phone]','$_POST[email]', '$_POST[date2]', '$_POST[destination2]', '$_POST[university2]',  '$_POST[class]', '$ref')";

    }
    
  elseif ($_POST['date2']=="Friday") {
        $sql="INSERT INTO Friday (name, name2, phone, email, date, location, university, class, trxref)
VALUES ('$_POST[name]', '$_POST[name2]','$_POST[phone]','$_POST[email]', '$_POST[date2]', '$_POST[destination2]', '$_POST[university2]',  '$_POST[class]', '$ref')";

    }
    
    
    
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
    
    mysql_close($con);
    
    
    //send mail
    //Email information
$from_add = "info@pilgrim.ng"; 

	$to_add = "ocheben@gmail.com"; //<-- put your yahoo/gmail email address here
    echo $to_add;

	$subject = "YOUR TICKET";
	$message = "$name $name2 has just booked a $class ticket from $destination to $university on $date. phone no=$phone, email=$email, trxref=$ref";
	
	$headers = "From: $from_add \r\n";
	$headers .= "Reply-To: $from_add \r\n";
	$headers .= "Return-Path: $from_add\r\n";
	$headers .= "X-Mailer: PHP \r\n";
    
    mail($to_add,$subject,$message,$headers);
    //send text
    
    
if(isset($_POST['email'])){    
        $to = $_POST['email']; // this is your Email address
    $from = "info@pilgrim.ng"; // this is the sender's Email address
    $subject = "Your Reservation has been made";
    $subject2 = "Copy of your form submission";
    $message ='<!DOCTYPE html>
<html>
<head>
<title></title>
<!--


 -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<style type="text/css">
    /* CLIENT-SPECIFIC STYLES */
    body, table, td, a{-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;} /* Prevent WebKit and Windows mobile changing default text sizes */
    table, td{mso-table-lspace: 0pt; mso-table-rspace: 0pt;} /* Remove spacing between tables in Outlook 2007 and up */
    img{-ms-interpolation-mode: bicubic;} /* Allow smoother rendering of resized image in Internet Explorer */

    /* RESET STYLES */
    img{border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none;}
    table{border-collapse: collapse !important;}
    body{height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important;}

    /* iOS BLUE LINKS */
    a[x-apple-data-detectors] {
        color: inherit !important;
        text-decoration: none !important;
        font-size: inherit !important;
        font-family: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
    }

    /* MOBILE STYLES */
    @media screen and (max-width: 525px) {

        /* ALLOWS FOR FLUID TABLES */
        .wrapper {
          width: 100% !important;
            max-width: 100% !important;
        }

        /* ADJUSTS LAYOUT OF LOGO IMAGE */
        .logo img {
          margin: 0 auto !important;
        }

        /* USE THESE CLASSES TO HIDE CONTENT ON MOBILE */
        .mobile-hide {
          display: none !important;
        }

        .img-max {
          max-width: 100% !important;
          width: 100% !important;
          height: auto !important;
        }

        /* FULL-WIDTH TABLES */
        .responsive-table {
          width: 100% !important;
        }

        /* UTILITY CLASSES FOR ADJUSTING PADDING ON MOBILE */
        .padding {
          padding: 10px 5% 15px 5% !important;
        }

        .padding-meta {
          padding: 30px 5% 0px 5% !important;
          text-align: center;
        }

        .padding-copy {
             padding: 10px 5% 10px 5% !important;
          text-align: center;
        }

        .no-padding {
          padding: 0 !important;
        }

        .section-padding {
          padding: 50px 15px 50px 15px !important;
        }

        /* ADJUST BUTTONS ON MOBILE */
        .mobile-button-container {
            margin: 0 auto;
            width: 100% !important;
        }

        .mobile-button {
            padding: 15px !important;
            border: 0 !important;
            font-size: 16px !important;
            display: block !important;
        }

    }

    /* ANDROID CENTER FIX */
    div[style*="margin: 16px 0;"] { margin: 0 !important; }
</style>
</head>
<body style="margin: 0 !important; padding: 0 !important;">

<!-- HIDDEN PREHEADER TEXT -->
<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
</div>

<!-- HEADER -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td bgcolor="#0B3C5D" align="center">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
            <tr>
            <td align="center" valign="top" width="500">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px;" class="wrapper">
                <tr>
                    <td align="center" valign="top" style="padding: 15px 0;" class="logo">
                        <a href="http://pilgrim.ng" target="_blank">
                            <img alt="" src="http://www.pilgrim.ng/images/pilgrim.ico" width="60" height="60" style="display: block; font-family: Helvetica, Arial, sans-serif; color: #ffffff; font-size: 16px;" border="0">
                        </a>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <tr>
        <td bgcolor="#ffffff" align="center" style="padding: 15px;">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
            <tr>
            <td align="center" valign="top" width="500">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px;" class="responsive-table">
                <tr>
                    <td>
                        <!-- COPY -->
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td align="center" style="font-size: 32px; font-family: Helvetica, Arial, sans-serif; color: #333333; padding-top: 30px;" class="padding-copy">Your trip has been confirmed</td>
                            </tr>
                            <tr>
                                <td align="left" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy"><p>Hello ' . $name . ',</p>
                                <p>Thank you for your purchase, we have recieved your payment. <br/>Your trip from ' . $university . ' to ' . $destination . ' on ' . $date . ' has been confirmed.</p>
                                    <p>Here are your boarding details.</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <tr>
        <td bgcolor="#ffffff" align="center" style="padding: 15px;" class="padding">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
            <tr>
            <td align="center" valign="top" width="500">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px; " class="responsive-table">
                <tr>
                    <td style="padding: 10px 0 0 0; border-top: 1px dashed #aaaaaa;">
                        <!-- TWO COLUMNS -->
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td valign="top" class="mobile-wrapper">
                                    <!-- LEFT COLUMN -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="left">
                                        <tr>
                                            <td style="padding: 0 0 10px 0;">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tr>
                                                        <td align="left" style="font-family: Arial, sans-serif; color: #333333; font-size: 16px;">Name</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- RIGHT COLUMN -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="right">
                                        <tr>
                                            <td style="padding: 0 0 10px 0;">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tr>
                                                        <td align="right" style="font-family: Arial, sans-serif; color: #333333; font-size: 16px;">' . $name . '</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- TWO COLUMNS -->
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td valign="top" style="padding: 0;" class="mobile-wrapper">
                                    <!-- LEFT COLUMN -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="left">
                                        <tr>
                                            <td style="padding: 0 0 10px 0;">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tr>
                                                        <td align="left" style="font-family: Arial, sans-serif; color: #333333; font-size: 16px;">Leaving From</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- RIGHT COLUMN -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="right">
                                        <tr>
                                            <td style="padding: 0 0 10px 0;">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tr>
                                                        <td align="right" style="font-family: Arial, sans-serif; color: #333333; font-size: 16px;">' . $university . '</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!-- TWO COLUMNS -->
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td valign="top" style="padding: 0;" class="mobile-wrapper">
                                    <!-- LEFT COLUMN -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="left">
                                        <tr>
                                            <td style="padding: 0 0 10px 0;">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tr>
                                                        <td align="left" style="font-family: Arial, sans-serif; color: #333333; font-size: 16px;">Destination</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- RIGHT COLUMN -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="right">
                                        <tr>
                                            <td style="padding: 0 0 10px 0;">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tr>
                                                        <td align="right" style="font-family: Arial, sans-serif; color: #333333; font-size: 16px;">' . $destination . '</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <!-- TWO COLUMNS -->
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td valign="top" style="padding: 0;" class="mobile-wrapper">
                                    <!-- LEFT COLUMN -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="left">
                                        <tr>
                                            <td style="padding: 0 0 10px 0;">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tr>
                                                        <td align="left" style="font-family: Arial, sans-serif; color: #333333; font-size: 16px;">Class</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- RIGHT COLUMN -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="right">
                                        <tr>
                                            <td style="padding: 0 0 10px 0;">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tr>
                                                        <td align="right" style="font-family: Arial, sans-serif; color: #333333; font-size: 16px;">' . $class . '</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <!-- TWO COLUMNS -->
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td valign="top" style="padding: 0;" class="mobile-wrapper">
                                    <!-- LEFT COLUMN -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="left">
                                        <tr>
                                            <td style="padding: 0 0 10px 0;">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tr>
                                                        <td align="left" style="font-family: Arial, sans-serif; color: #333333; font-size: 16px;">Date</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- RIGHT COLUMN -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="right">
                                        <tr>
                                            <td style="padding: 0 0 10px 0;">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tr>
                                                        <td align="right" style="font-family: Arial, sans-serif; color: #333333; font-size: 16px;">' . $date . '</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <!-- TWO COLUMNS -->
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td valign="top" style="padding: 0;" class="mobile-wrapper">
                                    <!-- LEFT COLUMN -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="left">
                                        <tr>
                                            <td style="padding: 0 0 10px 0;">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tr>
                                                        <td align="left" style="font-family: Arial, sans-serif; color: #333333; font-size: 16px;">Time</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- RIGHT COLUMN -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="right">
                                        <tr>
                                            <td style="padding: 0 0 10px 0;">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tr>
                                                        <td align="right" style="font-family: Arial, sans-serif; color: #333333; font-size: 16px;">' . $time . '</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr>
                    <td style="padding: 10px 0 0px 0; border-top: 1px solid #eaeaea; border-bottom: 1px dashed #aaaaaa;">
                        <!-- TWO COLUMNS -->
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td valign="top" class="mobile-wrapper">
                                    <!-- LEFT COLUMN -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="left">
                                        <tr>
                                            <td style="padding: 0 0 10px 0;">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tr>
                                                        <td align="left" style="font-family: Arial, sans-serif; color: #333333; font-size: 16px; font-weight: bold;">Price</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- RIGHT COLUMN -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="47%" style="width: 47%;" align="right">
                                        <tr>
                                            <td>
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tr>
                                                        <td align="right" style="font-family: Arial, sans-serif; color: #7ca230; font-size: 16px; font-weight: bold;">&#8358;' . $price . '</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <tr>
        <td bgcolor="#ffffff" align="center" style="padding: 15px;">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
            <tr>
            <td align="center" valign="top" width="500">
            <![endif]-->
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px;" class="responsive-table">
                <tr>
                    <td>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <!-- COPY -->
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td align="left" style="padding: 0 0 0 0; font-size: 14px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color: #aaaaaa; font-style: italic;" class="padding-copy"></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <tr>
        <td bgcolor="#0B3C5D" align="center" style="padding: 15px;">
            <table border="0" cellpadding="0" cellspacing="0" width="500" class="responsive-table">
                <tr>
                    <td>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <!-- COPY -->
                                
                            </tr>
                            
                            <tr>
                                <td align="center">
                                    <!-- BULLETPROOF BUTTON -->
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td align="center" style="padding-top: 25px;" class="padding">
                                                <table border="0" cellspacing="0" cellpadding="0" class="mobile-button-container">
                                                    <tr>
                                                        <td align="center" style="border-radius: 3px;" bgcolor="#daa520"><a href="http://pilgrim.ng/#contact3" target="_blank" style="font-size: 16px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; border-radius: 3px; padding: 15px 25px; border: 1px solid #daa520; display: inline-block;" class="mobile-button">CONTACT US</a></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td align="left" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy"></td>
                                
                            </tr>
                            <tr>
                                <td align="left" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy"></td>
                                
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
    <tr>
        <td bgcolor="#ffffff" align="center" style="padding: 20px 0px;">
            <!--[if (gte mso 9)|(IE)]>
            <table align="center" border="0" cellspacing="0" cellpadding="0" width="500">
            <tr>
            <td align="center" valign="top" width="500">
            <![endif]-->
            <!-- UNSUBSCRIBE COPY -->
            <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" style="max-width: 500px;" class="responsive-table">
                <tr>
                    <td align="center" style="font-size: 12px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color:#666666;">
                        
                        <br>
                        <a href="http://pilgrim.ng" target="_blank" style="color: #666666; text-decoration: none;">Subscribe</a>
                        <span style="font-family: Arial, sans-serif; font-size: 12px; color: #444444;">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                        <a href="http://pilgrim.ng" target="_blank" style="color: #666666; text-decoration: none;"></a>
                    </td>
                </tr>
            </table>
            <!--[if (gte mso 9)|(IE)]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </td>
    </tr>
</table>

</body>
</html>
';
    $message2 = "Here is a copy of your message " . $name . " " . $name2. "just booked a ticket to " . $university . "from " . $destination . "on " . $date ;

    $headers = "From:" . $from;
    $headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
 
    ?>
    
<html>
    <head>
		<title>PILGRIM</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/pikaday.css"/>
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
    
<body class="is-loading-0 is-loading-1">
		<!-- Wrapper -->
<div id="wrapper" class="imge">
    
				<!-- About -->
					<article id="about" class="panel secondary">
						<div class="image">
							<img src="images/about.jpeg" alt="" data-position="center center" />
						</div>
						<div class="content" style="background: rgba(144, 144, 144, 0.6); color:#ffffff">
							<ul class="actions spinX">
								<li><a href="#work" class="button small back" onclick="workback()"><span style="color:#ffffff">Back</span></a></li>
							</ul>
							<div class="inner">
								<header>
									<h2>Booking Confirmation</h2>
                                    <p>Thank you for your purchase, we have recieved your payment.</p>
									<p>Your trip from <?php echo $_POST['university2'];?> to <?php echo $_POST['destination2'];?> on <?php echo $date;?> has been confirmed. </p>
								</header>
								<p></p>
								<p></p>
							</div>
						</div>
					</article>
    </div>
    
    		<!-- Scripts -->
        
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
        <script src="assets/js/pikaday.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
            <script src="assets/js/index.js"></script>
    </body>
</html>

<?php
}
?>