<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('categories_model');
		$this->load->model('product_model');
		$this->load->model('cart_model');
	}
	public function index()
	{
		$data['cart'] = $this->cart_model->findAll();
		$data['categories'] = $this->categories_model->findAll();
		$this->load->view('layout/head');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/menu');
		$this->load->view('cart/content');
		$this->load->view('layout/footer');
	}
	public function addToCart()
    {
        $product_id = $this->input->post('product_id');
        $quantity = $this->input->post('quantity');
        $data = array(
            "product_id" => $product_id,
            "quantity" => intval($quantity)
        );
        // print_r($data);
        // exit();
        $id = $this->cart_model->insert($data);
        if(!empty($id)){
            $this->session->set_flashdata('success-msg', 'Product Added');
            redirect('cart');
        }else{
            echo "error";
        }
    }
	public function clear()
	{
		$this->cart_model->clearCart();
		$data['cart'] = $this->cart_model->findAll();
		$data['categories'] = $this->categories_model->findAll();
		$this->load->view('layout/head');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/menu');
		$this->load->view('cart/content');
		$this->load->view('layout/footer');
	}
	public function clearsome($product_id)
	{
		$this->cart_model->clearsomeCart($product_id);
		$data['cart'] = $this->cart_model->findAll();
		$data['categories'] = $this->categories_model->findAll();
		$this->load->view('layout/head');
		$this->load->view('layout/header', $data);
		$this->load->view('layout/menu');
		$this->load->view('cart/content');
		$this->load->view('layout/footer');
	}
}
