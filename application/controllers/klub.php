<?php   

class Klub extends CI_Controller {

    public function index () 
    {
        $data['klub'] = $this->m_klub->tampil_data()->
        result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('klub', $data);
		$this->load->view('templates/footer');

    }

    public function tambah_aksi(){
        $nama_klub                   = $this->input->post('nama_klub');
        $kota                        = $this->input->post('kota');
        $main                        = $this->input->post('main');
        $menang                      = $this->input->post('menang');
        $seri                        = $this->input->post('seri');
        $kalah                       = $this->input->post('kalah');
        $poin                        = $this->input->post('poin');

       
        

        $data = array(
            'nama_klub'              => $nama_klub,
            'kota'                   => $kota,
            'main'                   => $main,
            'menang'                 => $menang,
            'seri'                   => $seri,
            'kalah'                  => $kalah,
            'poin'                   => $poin
            
            
        );

        $this->m_klub->input_data($data, 'tb_klub');
        redirect('klub/index');
    }

    public function hapus ($id)
    {
        $where = array ('id' => $id);
        $this->m_klub->hapus_data($where, 'tb_klub');
        redirect ('klub/index');
    }

    public function edit($id)
    {
        $where = array ('id' => $id);
        $data['klub'] = $this->m_klub->edit_data($where, 'tb_klub')->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit', $data);
		$this->load->view('templates/footer');
    }
    
    public function update(){
        $id                          = $this->input->post('id');
        $nama_klub                   = $this->input->post('nama_klub');
        $kota                        = $this->input->post('kota');
        $main                        = $this->input->post('main');
        $menang                      = $this->input->post('menang');
        $seri                        = $this->input->post('seri');
        $kalah                       = $this->input->post('kalah');
        $poin                        = $this->input->post('poin');
        // $foto    = $_FILES['foto'];
        // if ($foto=''){}else{
        //     $config['upload_path']      = 'assets/foto';
        //     $config['allowed_types']    = 'jpg|png|gif';

        //      $this->load->library('upload');
        //     $this->upload->initialize($config);
            
        //     if(!$this->upload->do_upload('foto')){
        //         echo "Upload Gagal"; die();
        //     }else{
        //         $foto=$this->upload->data('file_name');
        //     }
        // }
        
        $data = array(
            'nama_klub'             => $nama_klub,
            'kota'                  => $kota,
            'main'                   => $main,
            'menang'                 => $menang,
            'seri'                   => $seri,
            'kalah'                  => $kalah,
            'poin'                   => $poin
    
        );

        $where = array(
            'id' => $id
        );

        $this->m_klub->update_data($where, $data, 'tb_klub');
        redirect('klub/index');
    }

    public function detail($id){
        $this->load->model('m_klub');
        $detail = $this->m_klub->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail', $data);
		$this->load->view('templates/footer');
    }

    // public function print()
    // {
    //     $data['customer'] = $this->m_customer->tampil_data('tb_customer')->result();
    //     $this->load->view('print_customer', $data);
    // }

    // public function pdf()
    // {
    //   $this->load->library('dompdf_gen');
    //   $data['customer'] = $this->m_customer->tampil_data('tb_customer')->result();
    //   $this->load->view('laporan_pdf', $data);

    //   $paper_size = 'A4';
    //   $orientation = 'landscape';
    //   $html = $this->output->get_output();
    //   $this->dompdf->set_paper($paper_size, $orientation);

    //   $this->dompdf->load_html($html);
    //   $this->dompdf->render();
    //   $this->dompdf->stream('laporan_customer.pdf', array('Attachment' =>0));

    // }
}
?>
