<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homecontroller extends CI_Controller {

	public function index()
	{
		// $data['news'] = $this->Mainmodel->show_news();
		// $this->load->view('Homeview',$data);
		
		$this->load->view('LoginView');
	}

	function register_page()
	{
		$this->load->view('RegisterView');
	}

	function login()
	{
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		$num = $this->Mainmodel->check_user($email,$pass);
		if ($num == 1)
		{
			//echo "berhasil";
			$user = $this->Mainmodel->get_user($email);
			$sess = array('email' => $email,'name' => $user->name,'id_user'=> $user->id_user, 'login' => TRUE);
			$this->session->set_userdata($sess);
			echo "<script type='text/javascript'>
                          alert('Login Success !');</script>";
        	redirect(base_url('Homecontroller/home_page'),'refresh');
		}
		else
		{
			//echo "gagal";
			echo "<script type='text/javascript'>
                          alert('Login Failed, please enter valid email and password !');</script>";
        	redirect(base_url('Homecontroller'),'refresh');

		}
	}

	function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('login');
		$this->session->unset_userdata('id_user');
		redirect(base_url());
	}

	function register()
	{
		$a =  $this->input->post('password');
		$this->form_validation->set_rules('email','Email','is_unique[user.email]',array('is_unique'=>'*Email is already exists !'));
		$this->form_validation->set_rules('pass','Password','required',array('required' => '*Password field is required !'));
		$this->form_validation->set_rules('confirmpassword','Confirm Password','matches[pass]',array('matches'=>'*Confirm Password field does not match !'));


		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'), 
			'password' => md5($this->input->post('pass')));

		if($this->form_validation->run() == FALSE)
		{
			echo "<script type='text/javascript'>
                          alert('Register failed, please check again !');</script>";
            /*echo form_error('email');
            echo form_error('confirm');*/
            $this->load->view('RegisterView',$data);
	
		}
		else
		{
			$this->Mainmodel->register($data);
			echo "<script type='text/javascript'>
                          alert('Register Success, login now !');</script>";
            redirect(base_url(),'refresh');

        	
		}
	}

	function home_page()
	{
		if ($this->session->userdata('login') == TRUE)
		{
			$this->load->view('HeaderView');
			$this->load->view('LeftSidebarView');
			$this->load->view('Homeview');
		}
		else
		{
			echo "<script type='text/javascript'>
                          alert('Please, login first !');</script>";
        	redirect(base_url(),'refresh');
		}
		
	}

	function NewsView()
	{
		$data['news'] = $this->Mainmodel->show_news();
		$this->load->view('HeaderView');
		$this->load->view('LeftSidebarView');
		$this->load->view('NewsView',$data);
	}

	function CategoryView()
	{
		$data['category'] = $this->Mainmodel->get_category();
		$this->load->view('HeaderView');
		$this->load->view('LeftSidebarView');
		$this->load->view('CategoryView',$data);	
	}

	function do_upload()
	{

		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png';
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image'))
        {
            $error = array('error' => $this->upload->display_errors());

            echo $this->upload->display_errors();
            echo "gagal";
        }
        else
        {
               $data = array('upload_data' => $this->upload->data());

                        echo $this->upload->data('file_path');
                }

	}

	function add_news_page()
	{
		$data['cat'] = $this->Mainmodel->get_category();
		$this->load->view('HeaderView');
		$this->load->view('LeftSidebarView');
		$this->load->view('Addview',$data);
	}

	function add_news()
	{
		
		


		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'jpg|png';
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image'))
        {
        	$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'id_category' => $this->input->post('category'));

        	$data['cat'] = $this->Mainmodel->get_category();
        	$data['error'] = $this->upload->display_errors();    
        	echo "<script type='text/javascript'>
                          alert('Add News Failed !');</script>";
			$this->load->view('HeaderView');
			$this->load->view('LeftSidebarView');
			$this->load->view('Addview',$data);   
            /*echo $this->upload->display_errors();
            echo "gagal";*/
        }
        else
        {
        	$data = array('upload_data' => $this->upload->data());
            $file_name =  $this->upload->data('file_name');
        	$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'id_category' => $this->input->post('category'),
			'image' => $file_name,
			'id_user' => $this->session->userdata('id_user') );

        	
        	$this->Mainmodel->add_news($data);
			echo "<script type='text/javascript'>
                          alert('Add News Success !');</script>";
        	redirect(base_url('Homecontroller/add_news_page'),'refresh');
	    }
	}

	function delete_news($id_news)
	{
		$this->Mainmodel->delete_news($id_news);
		echo "<script type='text/javascript'>
                          alert('DELETE Success !');</script>";
        redirect(base_url('Homecontroller/NewsView'),'refresh');
	}

	function edit_news_page($id_news)
	{
		$data['cat'] = $this->Mainmodel->get_category();
		$data['news'] = $this->Mainmodel->get_where_show($id_news);
		$data['id_news'] = $id_news;
		$this->load->view('Editview',$data);
	}

	function edit_news($id_news)
	{
		$data = array(
			'title' =>  $this->input->post('title'), 
			'content' =>$this->input->post('content') , 
			'id_category' => $this->input->post('category'), );

		$this->Mainmodel->edit_news($id_news, $data);
		echo "<script type='text/javascript'>
                          alert('EDIT Success !');</script>";
        redirect(base_url('Homecontroller'),'refresh');
	}

	function add_category_page()
	{
		$data['category'] = $this->Mainmodel->get_category();
		$this->load->view('HeaderView');
		$this->load->view('LeftSidebarView');
		$this->load->view('Addcategoryview',$data);
	}

	function add_category()
	{
		$data = array('name_category' => $this->input->post('name_category'));
		$this->Mainmodel->add_category($data);
		echo "<script type='text/javascript'>
                          alert('ADD Category Success !');</script>";
        redirect(base_url('Homecontroller/add_category_page'),'refresh');

	}

	function delete_cat($id_category)
	{
		$this->Mainmodel->delete_cat($id_category);
		echo "<script type='text/javascript'>
                          alert('DELETE Success !');</script>";
        redirect(base_url('Homecontroller/CategoryView'),'refresh');
	}
}
