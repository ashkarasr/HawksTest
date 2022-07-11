<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {


	public function insert_user($data)
	{

		$result=$this->db->insert('users',$data);
		if($result)
			{ $result =$this->db->insert_id();
				return $result;
			}
			else
			{
				return false;
			}
		}


		public function CheckUser($email)
		{
			$this->db->select("*");
			$this->db->from('users');
			$this->db->where('email',$email);
			$query = $this->db->get();

			if ($query->num_rows()>0) 
			{
				return $query;
			}
			else
			{
				return false;
			}
		}


		public function insert_blog($data)
		{

			$result=$this->db->insert('blogs',$data);
			if($result)
				{ $result =$this->db->insert_id();
					return $result;
				}
				else
				{
					return false;
				}
			}

		public function getblogs($userid)
		{
			$this->db->select("*");
			$this->db->from('blogs');
			$this->db->where('user_id',$userid);
			$query = $this->db->get();
        // print_r($this->db->last_query());
		// $row  = $query->row();
			return $query;
		}

		public function getedit($a)
		{
			$this->db->select("*");
			$this->db->from('blogs');
			$this->db->where('id',$a);
			$query = $this->db->get();
			return $query;
		}

		public function get_delete($id){
			$this->db->where('id', $id);
			$this->db->delete('blogs');
		}

		public function update_blog($id,$data){

			$this->db->where('id',$id );
			$result = $this->db->update('blogs', $data);	
			return $result;
		}


		public function getusers($a)
		{
			$this->db->select("*");
			$this->db->from('users');
			$this->db->where('id',$a);
			$query = $this->db->get();
			return $query;
		}	



























	

}
