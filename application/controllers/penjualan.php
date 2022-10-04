<?php   

class Penjualan extends CI_Controller {

    public function index () 
    {
        $data['penjualan'] = $this->m_penjualan->tampil_data()->
        result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('penjualan', $data);
		$this->load->view('templates/footer');

    }

    public function tambah_aksi(){
        $nama            = $this->input->post('nama_barang');
        $stok             = $this->input->post('stok');
        $jumlah_terjual      = $this->input->post('jumlah_terjual');
        $tgl_transaksi         = $this->input->post('tgl_transaksi');
        $jenis          = $this->input->post('jenis_barang');
        

        $data = array(
            'nama_barang'           => $nama,
            'stok'            => $stok,
            'jumlah_terjual'      => $jumlah_terjual,
            'tgl_transaksi'        => $tgl_transaksi,
            'jenis_barang'         => $jenis
            
            
        );

        $this->m_penjualan->input_data($data, 'tb_penjualan');
        redirect('penjualan/index');
    }

    public function hapus ($id)
    {
        $where = array ('id' => $id);
        $this->m_penjualan->hapus_data($where, 'tb_penjualan');
        redirect ('penjualan/index');
    }

    public function edit($id)
    {
        $where = array ('id' => $id);
        $data['penjualan'] = $this->m_penjualan->edit_data($where, 'tb_penjualan')->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('edit', $data);
		$this->load->view('templates/footer');
    }
    
    public function update(){
        $id = $this->input->post('id');
        $nama      = $this->input->post('nama_barang');
        $stok             = $this->input->post('stok');
        $jumlah_terjual      = $this->input->post('jumlah_terjual');
        $tgl_transaksi         = $this->input->post('tgl_transaksi');
        $jenis          = $this->input->post('jenis_barang');
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
            'nama_barang'           => $nama,
            'stok'            => $stok,
            'jumlah_terjual'      => $jumlah_terjual,
            'tgl_transaksi'        => $tgl_transaksi,
            'jenis_barang'         => $jenis
        );

        $where = array(
            'id' => $id
        );

        $this->m_penjualan->update_data($where, $data, 'tb_penjualan');
        redirect('penjualan/index');
    }

    public function detail($id){
        $this->load->model('m_penjualan');
        $detail = $this->m_penjualan->detail_data($id);
        $data['detail'] = $detail;
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail', $data);
		$this->load->view('templates/footer');
    }

    public function print()
    {
        $data['penjualan'] = $this->m_penjualan->tampil_data('tb_penjualan')->result();
        $this->load->view('print_penjualan', $data);
    }

    public function pdf()
    {
      $this->load->library('dompdf_gen');
      $data['penjualan'] = $this->m_penjualan->tampil_data('tb_penjualan')->result();
      $this->load->view('laporan_pdf', $data);

      $paper_size = 'A4';
      $orientation = 'landscape';
      $html = $this->output->get_output();
      $this->dompdf->set_paper($paper_size, $orientation);

      $this->dompdf->load_html($html);
      $this->dompdf->render();
      $this->dompdf->stream('laporan_penjualan.pdf', array('Attachment' =>0));

    }
}
?>
