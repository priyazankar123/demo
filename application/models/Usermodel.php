<?php
defined('BASEPATH');
class Usermodel extends CI_Model
{
	
	    public function __Construct()
	    {
		parent::__construct();
		
	    }
	    public function get_userid()
	    {
	        $this->db->select_max('id');
            $result= $this->db->get('user')->row_array();
            echo $result['id'];
	    }
	    public function get_useremail($user_id)
		{
			$this->db->where('id',$user_id);
			$query=$this->db->get('user');
			return $query->row()->email;
		}
		
	    public function get_userdetails($user_id)
		{
			$this->db->where('id',$user_id);
			$query=$this->db->get('user');
			return $query->result_array();
		}
		public function get_guestdetails($user_id)
		{
			$this->db->where('id',$user_id);
			$query=$this->db->get('user');
			return $query->result_array();
		}
		public function get_guestmaildetails($guset_id)
		{
			$this->db->where('guest_id',$guset_id);
			$query=$this->db->get('guest');
			return $query->result_array();
		}
		public function get_guests($user_id)
		{
			$this->db->where('user_id',$user_id);
			$query=$this->db->get('guest');
			return $query->result_array();
		}
		public function get_usersid($email)
		{
			$query = $this->db->query("Select id from user where email='$email'
                                       ");      
            $result = $query->row()->id;
			return $result;
		}
	
	    function is_exist($email)
	    {
		    $query = $this->db->query("Select email from user where email='$email'");      
            $result = $query->result_array();
            if($query->num_rows()>0){
				return "true";
			}else{
				return "false";
			}
	    }
		function get_alldetails($id)
	    {
		    $query = $this->db->query("SELECT count(g.guest_id) as num from user as u INNER JOIN guest as g ON g.user_id=u.id where g.user_id='$id'");
		
		    $number       = $query->row()->num;
		
	        return $number;
	    }
		
}	