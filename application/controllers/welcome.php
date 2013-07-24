<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		//$this->load->view('welcome_message');
		$data["header"]="include/header";
		$data["title"]="Dragon Castle";
		$data["main_content"]="main/main.php";
		$data["footer"]="include/footer";
		$this->load->view("template",$data);
	}
	public function show_decors_controller()
        {
            $data["header"]="include/header";
            $data["title"]="Dragon Castle";
            $data["main_content"]="welcome_message.php";
            $data["footer"]="include/footer";
            $this->load->view("template",$data);
        }
}