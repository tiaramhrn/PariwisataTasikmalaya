<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->template->load('index', 'contact');
	}
	
	public function pesan()
	{
        if ($this->form_validation->run()!=true){$this->template->load('index', 'datacontact',);}
        else
        {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'message' => $this->input->post('message')];

            $this->template->load->view('index', 'datacontact');
        }
	}
}
