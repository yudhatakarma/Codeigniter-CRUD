<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends Admin_Controller {

    public function index()
    {
        $this->vars['mahasiswa'] = $this->mahasiswa->get_mahasiswa();
        $this->vars['title'] = 'Mahasiswa';
        $this->vars['content']= 'mahasiswa/read_mahasiswa';
        $this->load->view('cpanel/index', $this->vars);
    }

    public function created(){
        $this->form_validation->set_rules('nama_mhs', 'Nama Mahasiswa', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->vars['title'] = 'Tambah Mahasiswa';
            $this->vars['content']= 'mahasiswa/create_mahasiswa';
            $this->load->view('cpanel/index', $this->vars);
        } else {
            $this->_save_mahasiswa();
        }
        
    }

    private function _save_mahasiswa(){
        if(isset($_POST['submit'])){
            $nama           = $this->input->post('nama_mhs', TRUE);
            $npm            = $this->input->post('npm', TRUE);
            $temp_lahir     = $this->input->post('tmp_lahir', TRUE);
            $tgl_lahir      = $this->input->post('tgl_lahir', TRUE);
            $jenis_kelamin  = $this->input->post('jenis_kelamin', TRUE);
            $agama          = $this->input->post('agama', TRUE);
            $no_hp          = $this->input->post('no_hp', TRUE);
            $prodi          = $this->input->post('prodi', TRUE);

            $data = [
                'nama_mhs'      => $nama,
                'npm'           => $npm,
                'prodi'         => $prodi,
                'tmp_lahir'     => $temp_lahir,
                'tgl_lahir'     => $tgl_lahir,
                'jenis_kelamin' => $jenis_kelamin,
                'agama'         => $agama,
                'no_hp'         => $no_hp,
                'date_created'  => date('Y-m-d')
            ];
        }

        $flashdata = $this->mahasiswa->entry_data($data);
        if($flashdata){
            $this->session->set_flashdata('success','Ditambahkan');
        }else{
            $this->session->set_flashdata('failed','Ditambahkan');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }


    public function updated(){
        $this->form_validation->set_rules('nama_mhs', 'Nama Mahasiswa', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->vars['mhs']      = $this->mahasiswa->get_by_id();
            $this->vars['title'] = 'Perbarui Mahasiswa';
            $this->vars['content']= 'mahasiswa/update_mahasiswa';
            $this->load->view('cpanel/index', $this->vars);
        } else {
            $this->_save_update_mahasiswa();
        }
    }

    private function _save_update_mahasiswa(){
        if(isset($_POST['submit'])){
            $id_mhs         = $this->input->post('id_mhs', TRUE);
            $nama           = $this->input->post('nama_mhs', TRUE);
            $npm            = $this->input->post('npm', TRUE);
            $temp_lahir     = $this->input->post('tmp_lahir', TRUE);
            $tgl_lahir      = $this->input->post('tgl_lahir', TRUE);
            $jenis_kelamin  = $this->input->post('jenis_kelamin', TRUE);
            $agama          = $this->input->post('agama', TRUE);
            $no_hp          = $this->input->post('no_hp', TRUE);
            $prodi          = $this->input->post('prodi', TRUE);

            $data = [
                'id_mahasiswa'  => $id_mhs,
                'nama_mhs'      => $nama,
                'npm'           => $npm,
                'prodi'         => $prodi,
                'tmp_lahir'     => $temp_lahir,
                'tgl_lahir'     => $tgl_lahir,
                'jenis_kelamin' => $jenis_kelamin,
                'agama'         => $agama,
                'no_hp'         => $no_hp,
                'date_created'  => date('Y-m-d')
            ];
        }

        $flashdata = $this->mahasiswa->update_data($data, $id_mhs);
        if($flashdata){
            $this->session->set_flashdata('success','Diperbarui');
        }else{
            $this->session->set_flashdata('failed','Diperbarui');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function deleted()
    {
        $flashdata = $this->mahasiswa->del_by_id();
        if($flashdata){
            $this->session->set_flashdata('success','Dihapus');
        }else{
            $this->session->set_flashdata('failed','Dihapus');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

}

/* End of file Mahasiswa.php */
