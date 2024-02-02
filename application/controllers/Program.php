<?php
class Program extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('MProgram');
        $this->load->library('form_validation');
    }

    public function tampil_data()
    {
        $data['tittle'] = 'Daftar Program';
        $data['list_program'] = $this->MProgram->get_all();
        $this->load->view('program_list', $data);
    }

    public function tambah()
    {
        $data = array(
            'action' => site_url('program/tambah_action'),
            'id' => set_value('id'),
            'judul' => set_value('judul'),
            'detail' => set_value('detail'),
        );
        $data['tittle'] = 'Tambah Program';
        $this->load->view('program_form', $data);
    }

    public function tambah_action()
    {
        $data = array(
            'judul' => $this->input->post('judul', TRUE),
            'detail' => $this->input->post('detail', TRUE),
        );
        $this->MProgram->insert($data);
        $this->session->set_flashdata('message', 'Data Berhasil Ditambahkan');
        redirect(site_url('program/tampil_data'));
    }

    // Update
    public function update($id)
    {
        $row = $this->MProgram->get_by_id($id);
        if ($row) {
            $data = array(
                'action' => site_url('program/update_action'), // Corrected action URL
                'id' => set_value('id', $row->id),
                'judul' => set_value('judul', $row->judul),
                'detail' => set_value('detail', $row->detail),
            );
            $data['tittle'] = 'Edit Program';
            $this->load->view('program_form', $data);
        } else {
            // Handle the case when the specified ID is not found
            show_404();
        }
    }

    public function update_action()
    {
        $data = array(
            'judul' => $this->input->post('judul', TRUE),
            'detail' => $this->input->post('detail', TRUE),
        );

        $this->MProgram->update($this->input->post('id', TRUE), $data); // Use 'id' instead of 'id'
        $this->session->set_flashdata('message', 'Data Berhasil Diubah');
        redirect(site_url('program/tampil_data'));
    }


    // Delete
    public function delete($id)
    {
        $this->MProgram->delete($id);
        $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
        var_dump($this->session->flashdata('message')); // Check the flash message
        redirect(site_url('program/tampil_data'));
    }
}
