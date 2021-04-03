<?php 

class Kelas extends CI_Controller{

    public function index()
    {
        $data['kelas'] = $this->kelas_model->tampil_data()->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/kelas',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function input()
    {
        $data = array(
            'id_kelas'     => set_value('id_kelas'),
            'kode_kelas'     => set_value('kode_kelas'),
            'nama_kelas'     => set_value('nama_kelas'),
        );
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/kelas_form',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function input_aksi()
    {
        $this->_rules();

        if($this->form_validation->run() == FALSE) {
            $this->input();
        } else {
            $data = array(
                'kode_kelas' => $this->input->post('kode_kelas', TRUE),
                'nama_kelas' => $this->input->post('nama_kelas', TRUE)
            );
            $this->kelas_model->input_data($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data Kelas Berhasil Ditambahkan!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
            redirect('administrator/kelas');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode_kelas', 'kode_kelas', 'required',[
            'required' => 'Kode Kelas Wajib Diisi!'
        ]);
        $this->form_validation->set_rules('nama_kelas', 'nama_kelas', 'required',[
            'required' => 'Nama Kelas Wajib Diisi!'
        ]);
    }

    public function update($id)
    {
        $where = array('id_kelas' => $id);
        $data['kelas'] = $this->kelas_model->edit_data($where,'kelas')->result();
        $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/kelas_update',$data);
        $this->load->view('templates_administrator/footer');
    }

    public function update_aksi()
    {
        $id = $this->input->post('id_kelas');
        $kode_kelas = $this->input->post('kode_kelas');
        $nama_kelas = $this->input->post('nama_kelas');

        $data = array(
            'kode_kelas' => $kode_kelas,
            'nama_kelas' => $nama_kelas
        );

        $where = array(
            'id_kelas' => $id
        );
        
        $this->kelas_model->update_data($where,$data,'kelas');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Kelas Berhasil Update!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
        redirect('administrator/kelas');
    }

    public function delete($id)
    {
        $where = array('id_kelas' => $id);
        $this->kelas_model->hapus_data($where,'kelas');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data Kelas Berhasil Dihapus!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>');
        redirect('administrator/kelas');
    }

}