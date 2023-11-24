<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model {
    public function get_data($tugas){
        return $this->db->get($tugas);
    }

    public function insert_data($data,$table){
        $this->db->insert($table,$data);
    }

    public function update_data($data,$table){
        $this->db->where('No',$data['No']);
        $this->db->update($table,$data);
    }

    public function delete($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
}