<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Home
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Home extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model');
  
  }

  public function index()
  {
    // $data['judul'] = "Tutu Art & Deco";
    // $this->load->view("templates/index");
    $data['gallery'] = $this->Admin_model->get();
    $this->load->view("templates/home/header");
    $this->load->view("user/index", $data);
    $this->load->view("templates/home/footer");
  }

}


/* End of file Home.php */
/* Location: ./application/controllers/Home.php */