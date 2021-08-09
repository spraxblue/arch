<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends BackendController {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->mod_home->filedata();
		$this->load->view('home');
	}
}
