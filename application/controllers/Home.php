<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __cunstruct()
	{

		parent::__cunstruct();
		$this->load->helper(array('form', 'url'));
		$this->load->Model();
		
	}


	public function index()
	{
		if( $this->session->userdata('username'))
		{
			$userid=$this->session->userdata('userid');
			$data['blogs']=$this->Model->getblogs($userid);
			$this->load->view('user_dash',$data);

		}
		else
		{

			$this->load->view('login');

		}

	}

	public function login()
	{
		$this->load->view('login');
	}

	public function registration()
	{
		$this->load->view('registration');
	}

	public function user_registration()
	{

		$data['name']=$this->input->get_post('FullName');
		$data['email']=$this->input->get_post('email');
		$data['mobile']=$this->input->get_post('MobileNo');
		$data['genter']=$this->input->get_post('genter');
		$data['message']=$this->input->get_post('comment');

		$pass=$this->input->get_post('pass');
		$data['password']= password_hash($pass,PASSWORD_DEFAULT);
		$cpw=$this->input->get_post('repass');

		if($cpw==$pass)
		{
			$result=$this->Model->insert_user($data);
			if($result==true)
			{
				?> <script type="text/javascript">
					alert('Saved successfully........');
				</script>
				<?php 
			}
			else
			{
				?> <script type="text/javascript">
					alert('Insertion failed. please check the inputs!!!');
					</script> <?php
				}
			}
			else
			{
				?><script type="text/javascript">
					alert('Please ensure that Password and Confirm Password are same.');
					</script><?php 
				}


				// redirect('Home');
				$this->load->view('login');
			}

			public function LoginCheck()
			{
				if( $this->session->userdata('username'))
				{

				$userid=$this->session->userdata('userid');
				$data['blogs']=$this->Model->getblogs($userid);
				$this->load->view('user_dash',$data);

				}
				else
				{

					$data=array();
					$email = $this->input->get_post('email');
					$password=$this->input->get_post('password');
					$this->load->model('Model');
					$login['log']=$this->Model->CheckUser($email);

					if($login['log'])
					{

						foreach ($login['log']->result() as $key)
						{

							if(password_verify($password,$key->password))
							{

								$username=$key->name;
								$userid=$key->id;

								$this->session->set_userdata('username', $username);
								$this->session->set_userdata('userid', $userid);
								$userid=$this->session->userdata('userid');

								

								$data['blogs']=$this->Model->getblogs($userid);
								$this->load->view('user_dash',$data);
							}
							else
							{
								?><script type="text/javascript">
									alert('incorrect username or password');
									</script> <?php
									$this->index();
								}
							}

							?><script type="text/javascript">
								alert('login successfully');
								</script> <?php
						}
						else
						{
							?><script type="text/javascript">
								alert('Not data');
								</script> <?php
								$this->index();
							}
						}
					}

					public function logout()
					{
						$this->session->unset_userdata('username');
						$this->index();
					}

					public function insert_blog()
					{     

						$data['title']=$this->input->get_post('blog_title');
						$data['description']=$this->input->get_post('desc');
						$data['user_id']=$this->session->userdata('userid');

						$config['upload_path'] = './images';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$config['max_size']      = '200000';
						$config['min_width']     = '14';
						$config['min_height']    = '7';
						$this->load->library('upload', $config);
						$this->upload->do_upload('file');
						$data12= $this->upload->data();

						$n=$data12['file_name'];
						$data['imagpath']=$n;
						$result=$this->Model->insert_blog($data);


						redirect('index.php/Home/');

					}


					public function update_blog()
					{     
						$id=$this->input->get_post('blog_id');
						$data['title']=$this->input->get_post('blog_title');
						$data['description']=$this->input->get_post('desc');
						$data['user_id']=$this->session->userdata('userid');


						if(empty($_FILES["file"]["name"])){

						}
						else{

						$config['upload_path'] = './images';
						$config['allowed_types'] = 'gif|jpg|png|jpeg';
						$config['max_size']      = '200000';
						$config['min_width']     = '14';
						$config['min_height']    = '7';
						$this->load->library('upload', $config);
						$this->upload->do_upload('file');
						$data12= $this->upload->data();

						$n=$data12['file_name'];
						$data['imagpath']=$n; 

						}

						$result=$this->Model->update_blog($id,$data);

						if ($result) {

							?><script type="text/javascript">
								alert('Updation successfully');
								</script> <?php
								redirect('index.php/Home/');
							}else{

								?><script type="text/javascript">
									alert('Updation Failed');
									</script> <?php
									$this->index();
								}
					}


					public function edit()
					{

						$id=$this->input->get_post('id');

						$data['edit']=$this->Model->getedit($id);

						$this->load->view('user_dash_edit',$data);


					}

					public function delete()
					{

						$id=$this->input->get_post('id');

						$this->Model->get_delete($id);
						redirect('index.php/Home/');
						

					}

					public function profile()
					{
						$userid=$this->session->userdata('userid');

						$data['profile']=$this->Model->getusers($userid);
						$this->load->view('profile',$data);

					}







}
