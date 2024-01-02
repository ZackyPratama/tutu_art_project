<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Product
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

class Product extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Admin_model');
  }

  public function index()
  {
    // $data['judul'] = "Gallery Administration";
    $data['gallery'] = $this->Admin_model->get();
    $this->load->view("templates/home/header");
    $this->load->view("user/product", $data);
    $this->load->view("templates/home/footer");
  }

}


/* End of file Product.php */
/* Location: ./application/controllers/Product.php */