<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('data_model');
        // $this->load->helper('form');
        // $this->load->library(array('form_validation','session'));
    }

	public function index()
	{
        // $data['title'] = 'Halaman Utama';
        $data['tugas'] = $this->data_model->get_data('task')->result();
        $this->load->view('header');
        $this->load->view('welcome',$data);
        $this->load->view('footer');
	}

    public function tambah(){
        $this->load->view('header');
        $this->load->view('tambah_tugas');
        $this->load->view('footer');
    }

    public function tambah_tugas(){
        
        $this->load->view('header');
        $this->load->view('tambah_tugas');
        $this->load->view('footer');
    }

    public function tambah_aksi(){
        $this->_rules();
        if($this->form_validation->run()==FALSE){
            $this->tambah();

        }else{
            $data = array(
                'title'=>$this->input->post('title'),
                'description'=>$this->input->post('description'),
                'status'=>$this->input->post('status'),
            );
            $this->data_model->insert_data($data,'task');
            $this->session->set_flashData('pesan','<div class="alert alert-success alert-dismissible fade show" id="valid" role="alert">
            <strong>Successfully Added </strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
          redirect('home');
        }
    }

    public function edit($No){
        // var_dump($No);
        $this->_rules();
        if($this->form_validation->run()==FALSE){
            $this->index();

        }else{
            $data = array(
                'No'=>$No,
                'title'=>$this->input->post('title'),
                'description'=>$this->input->post('description'),
                'status'=>$this->input->post('status'),
            );
            $this->data_model->update_data($data,'task');
            $this->session->set_flashData('pesan','<div class="alert alert-success alert-dismissible fade show" id="valid" role="alert">
            <strong>Successfully Added </strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
          redirect('home');
        }

        // $this->load->view('header');
        // $this->load->view('tambah_tugas');
        // $this->load->view('footer');
    }

    public function _rules(){
        $this->form_validation->set_rules('title','Title','required',array(
            'required'=>'%s Must Be Filled'
        ));
        $this->form_validation->set_rules('description','Description','required',array(
            'required'=>'%s Must Be Filled'
        ));
        $this->form_validation->set_rules('status','Status','required',array(
            'required'=>'%s Must Be Filled'
        ));
    }

    public function delete($No){
        $where = array('No'=>$No);
        $this->data_model->delete($where,'task');
        $this->session->set_flashData('pesan','<div class="alert alert-success alert-dismissible fade show" id="valid" role="alert">
        <strong>Successfully Deleted </strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
      redirect('home');
    }
    
    
    
    

        
}
