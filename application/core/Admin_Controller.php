<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin_Controller extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_mahasiswa', 'mahasiswa');
	}


    /**
     * Memanggil file template admin
     */
    public $vars = [
		'header' 	=> 'cpanel/header',
		'sidebar' 	=> 'cpanel/sidebar',
		'content'	=> '',
		'title'		=> ''
	];

}

/* End of file Admin_Controller.php */
