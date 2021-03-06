<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

   function __construct()
   {
       
          parent::__construct();
    
          $this->load->helper(array('form', 'url','html'));
		  $this->load->model("usermodel");
          $this->load->library('upload');
		  $this->load->library('session');
		  $this->load->library('email');
		 
    }
	public function index()
	{
		$this->load->view('sign_up');
		
	}
/*--------------------------Function for Inserting Data------------------------------------------------------*/	
	
	public function insert_data()
    {
		$firstName=$this->input->post('firstName');
		$data=$this->input->post();
		//print_r($data);die();
		$lastName=$this->input->post('lastName');
		$email=$this->input->post('email');
		$zipCode=$this->input->post('zipCode');
		$noOfGuests=$this->input->post('noOfGuests');
		$offers=$this->input->post('offers');
		$seasonTicketWaitlist=$this->input->post('seasonTicketWaitlist');
		$womensClub=$this->input->post('womensClub');
		$saluteMilitaryAppreciationClub=$this->input->post('saluteMilitaryAppreciationClub');
		$number = count($this->input->post('guestfirstName'));
		$guestfirstName=$this->input->post('guestfirstName');
	    $guestlastName=$this->input->post('guestlastName');
	    $guestemail=$this->input->post('guestemail');


         $is_record_exist = $this->usermodel->is_exist($email);
	     if ($is_record_exist == 'false')
        {	 
          $data=array('firstName'=>$firstName,
			        'lastName'=>$lastName,
					'email'=>$email,
					'zipCode'=>$zipCode,
					'noOfGuests'=>$noOfGuests,
					'seasonTicketWaitlist'=>$seasonTicketWaitlist,
					'womensClub'=>$womensClub,
					'offers'=>$offers,
					'saluteMilitaryAppreciationClub'=>$saluteMilitaryAppreciationClub,
				
				   );
				   
	
          $this->db->insert('user',$data);
		  $user_id = $this->db->insert_id();
		  $newdata = array(
                   'user_id'  => $user_id,
                   
               );
		  $this->session->set_userdata($newdata);
		
          if($number>=1 && $guestfirstName!=NULL && $guestlastName!=NULL && $guestemail!=NULL)
            {			
             for($i=0; $i<$number; $i++)
		     {  
			   
                $insertarr[] = array(
                'guestfirstName' => $guestfirstName[$i],
                'guestlastName' => $guestlastName[$i],
			    'guestemail' => $guestemail[$i],
			    'user_id' => $user_id,
              );
			  
             }
			 $this->db->insert_batch('guest', $insertarr);
			 $guest_id = $this->db->insert_id();
		     $newdata1 = array(
                   'guest_id'  => $guest_id,
                   
               );
		     $this->session->set_userdata($newdata1);
/***********************************Code For Email********************************************/
			 
			 $config['protocol']    = 'smtp';
             $config['smtp_host']    = 'ssl://smtp.gmail.com';
             $config['smtp_port']    = '465';
             $config['smtp_timeout'] = '7';
             $config['smtp_user']    = 'shivsonawane24@gmail.com';
             $config['smtp_pass']    = '8484946387';
			 $config['charset']    = 'iso-8859-1';
			 $config['send_multipart']    = 'true';
             $config['newline']    = "\r\n";
             $config['mailtype'] = 'html'; // or html
             $config['validation'] = TRUE; // bool whether to validate email or not      

             $this->email->initialize($config);
		
		     $this->email->from('shivsonawane24@gmail.com', 'noreply');
		     $to_email = $this->input->post('email'); 
             $this->email->to($to_email); 
			 $this->email->subject(' User Email Test');
             $data['view_user']= $this->usermodel->get_userdetails($user_id);
		     $mesg = $this->load->view('useremail',$data,true);
		
             $this->email->message($mesg);
			 $emailresult = $this->email->send();
			
/*****************************************End of Usermail*************************************/
             $config['protocol']    = 'smtp';
             $config['smtp_host']    = 'ssl://smtp.gmail.com';
             $config['smtp_port']    = '465';
             $config['smtp_timeout'] = '7';
             $config['smtp_user']    = 'shivsonawane24@gmail.com';
             $config['smtp_pass']    = '8484946387';
			 $config['send_multipart']    = 'true';
			 $config['charset']    = 'iso-8859-1';
             $config['newline']    = "\r\n";
             $config['mailtype'] = 'html'; // or html
             $config['validation'] = TRUE; // bool whether to validate email or not      

             $this->email->initialize($config);
		
		     $this->email->from('shivsonawane24@gmail.com', 'noreply');
		     $to_email = $this->input->post('guestemail'); 
             $this->email->to($to_email); 
			 $this->email->subject('Guest Email Test');
             $data['view_guest']= $this->usermodel->get_guestmaildetails($guest_id);
		     $mesg = $this->load->view('guestemail',$data,true);
		
             $this->email->message($mesg);
			 $emailresult = $this->email->send();
/************************************End of Guest Mail********************************************/

			 redirect("welcome/view_data");
			}
		else
			{
		     $config['protocol']    = 'smtp';
             $config['smtp_host']    = 'ssl://smtp.gmail.com';
             $config['smtp_port']    = '465';
             $config['smtp_timeout'] = '7';
             $config['smtp_user']    = 'shivsonawane24@gmail.com';
             $config['smtp_pass']    = '8484946387';
			 $config['send_multipart']    = 'true';
             $config['charset']    = 'iso-8859-1';
             $config['newline']    = "\r\n";
             $config['mailtype'] = 'html'; // or html
             $config['validation'] = TRUE; // bool whether to validate email or not      

             $this->email->initialize($config);			  
		     $this->email->from('shivsonawane24@gmail.com', 'noreply');
		     $to_email = $this->input->post('email'); 
             $this->email->to($to_email); 

             $this->email->subject('User Email Test');
             $data['view_user']= $this->usermodel->get_userdetails($user_id);
		     $mesg = $this->load->view('useremail',$data,true);
             $this->email->message($mesg);

             $emailresult = $this->email->send();
		     
   			 redirect("welcome/view_data");}
	      }
      else{
		     $user_id=$this->usermodel->get_usersid($email);
		     if($number>=1 && $guestfirstName!=NULL && $guestlastName!=NULL && $guestemail!=NULL)
            {    
       			for($i=0; $i<$number; $i++)
		     {  
              $insertarr[] = array(
              'guestfirstName' => $guestfirstName[$i],
              'guestlastName' => $guestlastName[$i],
			  'guestemail' => $guestemail[$i],
			  'user_id' => $user_id,
              );
             }
             $this->db->insert_batch('guest', $insertarr);
		     $guest_id = $this->db->insert_id();
		     $newdata1 = array(
                   'guest_id'  => $guest_id,
                   
               );
		     $this->session->set_userdata($newdata1);
			 
             $config['protocol']    = 'smtp';
             $config['smtp_host']    = 'ssl://smtp.gmail.com';
             $config['smtp_port']    = '465';
             $config['smtp_timeout'] = '7';
             $config['smtp_user']    = 'shivsonawane24@gmail.com';
             $config['smtp_pass']    = '8484946387';
			 $config['send_multipart']    = 'true';
             $config['charset']    = 'iso-8859-1';
             $config['newline']    = "\r\n";
             $config['mailtype'] = 'html'; // or html
             $config['validation'] = TRUE; // bool whether to validate email or not      

             $this->email->initialize($config);			  
		     $this->email->from('shivsonawane24@gmail.com', 'Priya');
		     $to_email = $this->input->post('email'); 
             $this->email->to($to_email); 

             $this->email->subject('User Email Test');
             $data['view_user']= $this->usermodel->get_userdetails($user_id);
		     $mesg = $this->load->view('useremail',$data,true);
             $this->email->message($mesg);

             $emailresult = $this->email->send();
			 
/*******************************************************************	end of user mail********************/
             $config['protocol']    = 'smtp';
             $config['smtp_host']    = 'ssl://smtp.gmail.com';
             $config['smtp_port']    = '465';
             $config['smtp_timeout'] = '7';
             $config['smtp_user']    = 'shivsonawane24@gmail.com';
             $config['smtp_pass']    = '8484946387';
			 $config['send_multipart']    = 'true';
             $config['charset']    = 'iso-8859-1';
             $config['newline']    = "\r\n";
             $config['mailtype'] = 'html'; // or html
             $config['validation'] = TRUE; // bool whether to validate email or not      

             $this->email->initialize($config);			  
		     $this->email->from('shivsonawane24@gmail.com', 'noreply');
		     $to_email = $this->input->post('guestemail'); 
             $this->email->to($to_email); 

             $this->email->subject('Guest Email Test');
             $data['view_guest']= $this->usermodel->get_guestmaildetails($guest_id);
		     $mesg = $this->load->view('guestemail',$data,true);
             $this->email->message($mesg);

             $emailresult = $this->email->send();
		     
		     
             $user_id = $user_id;
		     $newdata = array(
                   'user_id'  => $user_id,
               );

             $this->session->set_userdata($newdata);			 
		
		     redirect("welcome/view_data");
			}else{
				 redirect("welcome/view_data");
				
			}
		}	 
    }
/*------------------------End Of insert_data Function-------------------------------------------------------------------------------------*/	
    public function view_data()
	{
		$user_id = $this->session->userdata('user_id');
		$data['get_userdetails']= $this->usermodel->get_userdetails($user_id);
		$data['get_guests']= $this->usermodel->get_guests($user_id);
		$this->load->view('registration_view',$data);
	}	 
	
/******************************************************************************************/

	public function save_guestofsameuser()
	{
		$user_id = $this->session->userdata('user_id');
		$email= $this->usermodel->get_useremail($user_id);
		
		$number = count($this->input->post('guestfirstName')); 
	    $guestfirstName=$this->input->post('guestfirstName');
	    $guestlastName=$this->input->post('guestlastName');
	    $guestemail=$this->input->post('guestemail');
        if($number>=1 && $guestfirstName!=NULL && $guestlastName!=NULL && $guestemail!=NULL)
        { 
		 for($i=0; $i<$number; $i++)
		{  
              $insertarr[] = array(
              'guestfirstName' => $guestfirstName[$i],
              'guestlastName' => $guestlastName[$i],
			  'guestemail' => $guestemail[$i],
			  'user_id' => $user_id,
              );
        }
              $this->db->insert_batch('guest', $insertarr);
			  $guest_id = $this->db->insert_id();
		      $newdata1 = array(
                   'guest_id'  => $guest_id,
                   
               );
		      $this->session->set_userdata($newdata1);
			 
			  
			  $config['protocol']    = 'smtp';
              $config['smtp_host']    = 'ssl://smtp.gmail.com';
              $config['smtp_port']    = '465';
              $config['smtp_timeout'] = '7';
              $config['smtp_user']    = 'shivsonawane24@gmail.com';
              $config['smtp_pass']    = '8484946387';
			  $config['send_multipart']    = 'true';
              $config['charset']    = 'iso-8859-1';
              $config['newline']    = "\r\n";
              $config['mailtype'] = 'html'; // or html
              $config['validation'] = TRUE; // bool whether to validate email or not      

              $this->email->initialize($config);			  
		      $this->email->from('shivsonawane24@gmail.com', 'noreply');
              $to_email = $guestemail; 
              $this->email->to($to_email);
			  $this->email->subject('Guest Email Test');
              $data['view_guest']= $this->usermodel->get_guestmaildetails($guest_id);
		      $mesg = $this->load->view('guestemail',$data,true);
              $this->email->message($mesg);
			  $emailresult = $this->email->send();
/************---------------------------------mail to guests ------------------------------------------*/
              $config['protocol']    = 'smtp';
              $config['smtp_host']    = 'ssl://smtp.gmail.com';
              $config['smtp_port']    = '465';
              $config['smtp_timeout'] = '7';
              $config['smtp_user']    = 'shivsonawane24@gmail.com';
              $config['smtp_pass']    = '8484946387';
			  $config['send_multipart']    = 'true';
              $config['charset']    = 'iso-8859-1';
              $config['newline']    = "\r\n";
              $config['mailtype'] = 'html'; // or html
              $config['validation'] = TRUE; // bool whether to validate email or not      

              $this->email->initialize($config);			  
		      $this->email->from('shivsonawane24@gmail.com', 'noreply');
              $to_email = $email; 
              $this->email->to($to_email);
			  $this->email->subject('User Email Test');
              $data['view_user']= $this->usermodel->get_userdetails($user_id);
		      $mesg = $this->load->view('useremail',$data,true);
              $this->email->message($mesg);
			  $emailresult = $this->email->send();
			   redirect("welcome/view_data");
		}else{
		      redirect("welcome/");
		}
		
	}	 

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */