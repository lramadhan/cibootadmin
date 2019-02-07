<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
    $data = ["judul" => "Dashboard", "konten" => "dashboard/index"];
    $this->load->view('wrapper/index', $data);
    
    
    }

}

/* End of file Dashboard.php */
