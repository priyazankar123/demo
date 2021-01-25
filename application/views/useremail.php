<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  
  <div class="row">
    <div class="col-sm-12"><img src="<?php echo base_url();?>/images/EmailHeader.jpg" alt="EmailHeader" style="height:268px;width:600px;margin-left:28%;margin-right:25%;">
	</div>
  
  </div>
  <div class="row">
     <div class="col-sm-12">
	           <?php foreach($view_user as $row){ ?>
				<h6 style="margin-left:31%;margin-top:1%;font-size:18px;color:#7a1526;"><b><?php echo $row['firstName']; ?><b> &nbsp; <?php echo $row['lastName']; ?></h6>
			   <?php }?>
	 </div>
   
  </div>

  <div class="header" style=" display: inline-block; 
  width: 100%;
 ">
   <div class="playerOne" style="float: left;margin-left:120px;">
   <img src="<?php echo base_url();?>/images/PepsiGraphic.gif" style="height:160px;width:170px;margin-left:75%;" alt="PepsiGraphic">
    </div>
   <div class="playerTwo" style="float: right;margin-right:350px;">
   <img src="<?php echo base_url();?>/images/Barcode.png" style="height:160px;" alt="Barcode">
	 </div>
  </div>  
	<span>
	    <h5 style="margin-left:31%;height:1px;margin-top:10px;color:#7a1526; font-weight:550;"> GUEST BARCODES<h5>

		<hr style="width:450px; height:1px;margin-left:18%;background-color:#7a1526;">
  </span>
   <div class="row">
   <div class="col-sm-12">
    <span style="margin-left:30%;">	
         <?php $this->load->model('usermodel');
	           $id =$this->uri->segment(3);  
               $user=$this->usermodel->get_alldetails($id); 
			   for ($i = 1; $i <=$user; $i++){?>
			   
			  <img src="<?php echo base_url();?>/images/Barcode.png" style="margin-top:15px;height:160px;width:250px;" alt="Barcode">
		</span> &nbsp;&nbsp; <?php if($i==2 || $i==4 )
		{?> <br><?php  
		} }?>
  </div>
</div>		<br>	   
					 
					 
 
    <div class="row">
    <div class="col-sm-12"><img src="<?php echo base_url();?>/images/EmailBody1.jpg" style="margin-left:29%;height:200px;width:600px;" alt="EmailBody1"></div>
   
   </div>
    <div class="row">
    <div class="col-sm-12"><img src="<?php echo base_url();?>/images/EmailBody2.jpg" style="margin-left:29%;height:200px;width:600px;" alt="EmailBody2"></div>
   
  </div>
    <div class="row">
    <div class="col-sm-12"><img src="<?php echo base_url();?>/images/EmailBody3.jpg" style="margin-left:29%;height:200px;width:600px;" alt="EmailBody3"></div>
   
  </div>
    <div class="row">
    <div class="col-sm-12" ><img src="<?php echo base_url();?>/images/EmailBody4.jpg" style="margin-left:29%;height:200px;width:600px;" alt="EmailBody4">
</div>
   
  </div>
  

  
</div>

</body>
</html>
