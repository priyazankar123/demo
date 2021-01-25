<div class="card">
			<!-- /.card-header -->
			<div class="card-body">
				<div class="emailbody"> <img src="<?php echo base_url();?>/images/EmailHeader.jpg" alt="EmailHeader">
					<?php foreach($view_user as $row){ ?>
						<h6 style="margin-left:270px;margin-top:15px;color:#7a1526;"><b><?php echo $row['firstName']; ?><b> &nbsp; <?php echo $row['lastName']; ?></h6>
						<?php }?>
							<br> <span>
			  <img src="<?php echo base_url();?>/images/PepsiGraphic.gif" style="height:160px;margin-left:145px;" alt="PepsiGraphic">
			 </span> <span>
			 <img src="<?php echo base_url();?>/images/Barcode.png" style="height:160px;margin-left:15px;" alt="Barcode">
			</span>
							<h5 style="margin-left:240px;margin-top:10px;color:#7a1526; font-weight:510;"> GUEST BARCODES<h5>
		<hr style="width:450px;margin-left:100px;background-color:#7a1526">
		
			</div>
			          <?php $this->load->model('data_model');
						 $id =$this->uri->segment(3);  
                        $user=$this->data_model->get_alldetails($id); 
					 for ($i = 1; $i <=$user; $i++){?>
					 <span style="margin-left:50px;">	
			  <img src="<?php echo base_url();?>/images/Barcode.png" style="margin-top:15px;height:160px;width:250px;" alt="Barcode">
		</span> &nbsp; <?php if($i==2 || $i==4 )
		{?> <br><?php  
		} }?>
				<hr style="width:450px;margin-left:100px;background-color:#7a1526">
			  <img src="<?php echo base_url();?>/images/EmailBody1.jpg" style="margin-left:15px;height:200px;width:600px;" alt="EmailBody1">
			  <img src="<?php echo base_url();?>/images/EmailBody2.jpg" style="margin-left:20px;height:200px;width:600px;" alt="EmailBody2">
			  <img src="<?php echo base_url();?>/images/EmailBody3.jpg" style="margin-left:20px;height:200px;width:600px;" alt="EmailBody2">
			  <img src="<?php echo base_url();?>/images/EmailBody4.jpg" style="margin-left:20px;height:200px;width:600px;" alt="EmailBody2">

			</div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->