<html lang="en" style="" class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers no-applicationcache svg inlinesvg smil svgclippaths"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Redskins Training Camp Registration</title>
<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/normalize.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/main.css">
<link rel="stylesheet"  id="size-stylesheet"  href="<?php echo base_url();?>/assets/css/mobile.css">
	
<script src="<?php echo base_url();?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>

<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body class="landing">
<div class="container-fluid">
<div class="row">
<div class="right-panel-container">
<div class="right-panel">
<div class="custom-logo">
<img src="<?php echo base_url();?>/img/logo.png" attr="redskins logo">
</div>
<div class="player-img">
<img src="<?php echo base_url();?>/img/player-images.png">
</div>
</div>
</div>
<div class="left-panel-container">
<div class="left-panel">
<h4>Bon Secours Training Center, 2401 W Lelgh St, Richmond, VA 23220</h4>
<h4 class="text-center"><strong>2018 Redskins Training Camp</strong></h4>
<div class="registration_form">
<form name="registration" method="post" class="clearfix" action="<?php echo base_url('index.php/welcome/save_guestofsameuser');?>" novalidate="novalidate">
<div class="hide">
<div class="form-group">
<?php $i = 0; ?>
               <?php foreach ($get_userdetails as $row)
    { ?>
<label for="registration_primaryGuest_firstName" class="required">
First name&nbsp;<span class="asterisk">*</span></label><?php echo $row['firstName']; ?></div><div class="form-group"><label for="registration_primaryGuest_lastName" class="required">
Last name&nbsp;<span class="asterisk">*</span></label><?php echo $row['lastName']; ?></div><div class="form-group"><label for="registration_primaryGuest_email" class="required">
Email&nbsp;<span class="asterisk">*</span></label><?php echo $row['email']; ?></div><div class="form-group"><label for="registration_primaryGuest_zipCode" class="optional">
Zip code
</label><input type="text" id="registration_primaryGuest_zipCode" name="registration[primaryGuest][zipCode]" class="zipcode-input form-control" placeholder="Zip Code" size="5" maxlength="5" value="41101"></div><div class="form-group"><label class="required">
Subscriptions&nbsp;<span class="asterisk">*</span></label>

<div class="form-group"><div class="checkbox"><label><input type="checkbox" id="registration_primaryGuest_subscriptions_seasonTicketWaitlist" name="registration[primaryGuest][subscriptions][seasonTicketWaitlist]" value="1" checked="checked">
 Yes, I would like to sign up for the FREE Season Ticket Waitlist.
</label></div></div><div class="form-group"><div class="checkbox"><label><input type="checkbox" id="registration_primaryGuest_subscriptions_womensClub" name="registration[primaryGuest][subscriptions][womensClub]" value="1">
Yes, I would like to sign up for the FREE Redskins Women's club.
</label></div></div><div class="form-group"><div class="checkbox"><label><input type="checkbox" id="registration_primaryGuest_subscriptions_offers" name="registration[primaryGuest][subscriptions][offers]" value="1">
Yes, I would like to receive special offers from the Redskins and her Partner*.
</label></div></div><div class="form-group"><div class="checkbox"><label><input type="checkbox" id="registration_primaryGuest_subscriptions_saluteMilitaryAppreciationClub" name="registration[primaryGuest][subscriptions][saluteMilitaryAppreciationClub]" value="1">
Yes, I would like to sign up for the FREE Redskins Salute Military Appreciation Club.
</label></div></div></div>
<select id="registration_noOfGuests" name="registration[noOfGuests]" placeholder="No. of Guests" class="number-input form-control"><option value="">No. of Guests</option><option value="1">1</option><option value="2" selected="selected">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option></select>
</div>
<div class="text-center">
<div class="col-md-12 thank">
<span class="thankyou">THANK YOU FOR SIGNING UP!</span>
</div>
<div class="col-md-12 thank">
<div class="col-md-12">
<span class="gst">GUEST</span>
</div>
<div class="col-md-12">
<span class="frname"><?php echo $row['firstName']; ?> &nbsp; <?php echo $row['lastName']; ?></span>
<span class="fremail"><?php echo $row['email']; ?></span>
</div>
<?php
    }?>
	
<?php 

foreach ($get_guests as $row)
{?>
<div class="col-md-12">
<span class="frname"><?php echo $row['guestfirstName']; ?> &nbsp; <?php echo $row['guestlastName']; ?></span>
<span class="fremail"><?php echo $row['guestemail']; ?></span>
</div>
<?php
}?>
</div>
</div>
<div class="invatation_details">
<p>
Invite your friends and family to the Redskins Training Camp. You are not required to register kids 13 and under - your Fan Mobile Pass will also be valid for their entry.</p>
</div>
<div style="margin-left:10%;" class="input_fields_wrap invitee-list form-inline" data-prototype="    <div class=&quot;input-field clearfix&quot;>
            <div class=&quot;col-md-3 add friend-firstname&quot;>
            <input type=&quot;text&quot; id=&quot;registration_guests___name___firstName&quot; name=&quot;guestfirstName[]&quot; required=&quot;required&quot; placeholder=&quot;First Name&quot; class=&quot;form-control form-control&quot; />
            
        </div>
        <div class=&quot;col-md-3 add friend-lastname&quot;>
            <input type=&quot;text&quot; id=&quot;registration_guests___name___lastName&quot; name=&quot;guestlastName[]&quot; required=&quot;required&quot; placeholder=&quot;Last Name&quot; class=&quot;form-control form-control&quot; />
            
        </div>
        <div class=&quot;col-md-3 add friend-email&quot;>
            <input type=&quot;email&quot; id=&quot;registration_guests___name___email&quot; name=&quot;guestemail[]&quot; required=&quot;required&quot; placeholder=&quot;Email&quot; class=&quot;form-control form-control&quot; />
            
        </div>
        <div class=&quot;col-md-3 remove_field &quot;>X</div>
    </div>
">
<div class="hide input-field clearfix">
<div class="input-field clearfix">
<div class="col-md-3 add friend-firstname">
<input type="text" id="registration_guests_1_firstName" name="registration[guests][1][firstName]" required="required" placeholder="First Name" class="form-control form-control" value="p1">
</div>
<div class="col-md-3 add friend-lastname">
<input type="text" id="registration_guests_1_lastName" name="registration[guests][1][lastName]" required="required" placeholder="Last Name" class="form-control form-control" value="z">
</div>
<div class="col-md-3 add friend-email">
<input type="email" id="registration_guests_1_email" name="registration[guests][1][email]" required="required" placeholder="Email" class="form-control form-control" value="pryuzankar2@gmail.com">
</div>
<div class="col-md-3 remove_field ">X</div>
</div>
</div>
<div class="hide input-field clearfix">
<div class="input-field clearfix">
<div class="col-md-3 add friend-firstname">
<input type="text" id="registration_guests_2_firstName" name="registration[guests][2][firstName]" required="required" placeholder="First Name" class="form-control form-control" value="p2">
</div>
<div class="col-md-3 add friend-lastname">
<input type="text" id="registration_guests_2_lastName" name="registration[guests][2][lastName]" required="required" placeholder="Last Name" class="form-control form-control" value="n">
</div>
<div class="col-md-3 add friend-email">
<input type="email" id="registration_guests_2_email" name="registration[guests][2][email]" required="required" placeholder="Email" class="form-control form-control" value="lalit@gmail.com">
</div>
<div class="col-md-3 remove_field ">X</div>
</div>
</div>
</div>
<div class="input-field clearfix text-center">
<div class="col-md-12">
<input type="button" name="addfriends" value="+ Add Friends" class="addfriend" id="add-invitee-trigger">
<input type="submit" name="getregisterd" value="Submit">
</div>
</div>
<div class="hide">
<input type="hidden" id="registration_step" name="registration[step]" class="form-control"><input type="hidden" id="registration__token" name="registration[_token]" class="form-control" value="e3y5AwdBuJdhyTzWs7TRCKZWZZvUddLbXXtciEgULxY">
</div>
</form>
<div class="details_reg">
<p>Entry is first come, first serve. Date of camp are subject to change. See complete schedule and more information at <a href="http://www.redskins.com/trainingcamp" target="_blank">redskins.com/trainingcamp.</a> <br><br>
* Please share my email address with NBC Universal, so NBC Universal can send me information about special offer and promotion. I have read and agree to <a href="https://tracking.cirrusinsight.com/6305dab5-367d-4a0f-a674-87d2e81e6e99/nbcuniversal-com-privacy" target="_blank"> NBC UNERVERSAL’S PRIVACY POLICY. </a><br><br><br></p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="add_friend"></div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/additional-methods.js"></script>

<script src="<?php echo base_url();?>/assets/js/scripts.js"></script>
<script>
function adjustStyle(width) {
  width = parseInt(width);
  if (width < 701) {
    $("#size-stylesheet").attr("href", "assets/css/mobile.css");
	
	
  } else {
     $("#size-stylesheet").attr("href", "assets/css/main.css"); 
  }
}

$(function() {
  adjustStyle($(this).width());
  $(window).resize(function() {
    adjustStyle($(this).width());
  });
});
</script>
</body></html>