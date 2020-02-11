<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model {

    private $_table = 'mahasiswa';

    public function entry_data($data){
        return $this->db->insert($this->_table, $data);
    }

    public function update_data($data, $id_mahasiswa){
        $this->db->where('id_mahasiswa', $id_mahasiswa);
        $this->db->update($this->_table, $data);
    }

    public function get_mahasiswa(){
        return $this->db->get($this->_table)->result_array();
    }

    public function get_by_id(){
        $id = $this->uri->segment(3);
        return $this->db->get_where($this->_table, ['id_mahasiswa' => $id])->row_array();
    }

    public function del_by_id(){
        $id = $this->uri->segment(3);
        return $this->db->delete($this->_table, ['id_mahasiswa' => $id]);
    }

}

/* End of file M_mahasiswa.php */
