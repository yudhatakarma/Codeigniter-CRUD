<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

    public function index()
    {
        $this->vars['title'] = 'Dashborad';
        $this->vars['content']= 'cpanel/dashboard';
        $this->load->view('cpanel/index', $this->vars);
    }

}

/* End of file Dashboard.php */
