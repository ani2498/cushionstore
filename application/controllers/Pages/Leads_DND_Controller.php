<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leads_DND_Controller extends CI_Controller {

	public function index()
	{
		$this->load->view('Pages/leads-dnd');
	}
}