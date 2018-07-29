<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{


	    if($_POST)
        {
            $us = $this->input->post('username');
            $pass = $this->input->post('password');


            if($us == "masteraamie" && $pass=="123456")
            {
                echo "<script>alert('Login Success')</script>";
            }
        }


		$this->load->view('login');
	}





}
