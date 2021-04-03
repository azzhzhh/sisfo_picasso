<?php

class Kelas_model extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('kelas');
    }

    public function input_data($data)
    {
        $this->db->insert('kelas', $data);
    }

    
}