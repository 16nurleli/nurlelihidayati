<?php
class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }

    // function menu(){
    //     $this->load->view('v_menu');
    // }
    function index(){
        // $data['customer']=$this->m_data->tampil_data()->result();
        // $this->load->view('v_customer',$data);
        $this->load->view('v_menu');
    }
    function customer(){
         $data['customer']=$this->m_data->tampil_data()->result();
        $this->load->view('v_customer',$data);
        // $this->load->view('v_customer');
    }
    function tambah_c(){
        $this->load->view('v_customer_tambah');
    }
    function tambah_aksi_c(){
        $nama=$this->input->post('nama');
        $tempat_lahir=$this->input->post('tempat_lahir');
        $tanggal_lahir=$this->input->post('tanggal_lahir');
        $alamat=$this->input->post('alamat');
        $status=$this->input->post('status');
        $no_rekening=$this->input->post('no_rekening');
        $cabang_pembuka=$this->input->post('cabang_pembuka');

        $data=array(
            'nama'=>$nama,
            'tempat_lahir'=>$tempat_lahir,
            'tanggal_lahir'=>$tanggal_lahir,
            'alamat'=>$alamat,
            'status'=>$status,
            'no_rekening'=>$no_rekening,
            'cabang_pembuka'=>$cabang_pembuka

        );
        $this->m_data->input_data($data,'customer');
        redirect('dashboard/customer');
    }
    function update_c(){
        $id=$this->input->post('id_customer');
        $nama=$this->input->post('nama');
        $tempat_lahir=$this->input->post('tempat_lahir');
        $tanggal_lahir=$this->input->post('tanggal_lahir');
        $alamat=$this->input->post('alamat');
        $status=$this->input->post('status');
        $no_rekening=$this->input->post('no_rekening');
        $cabang_pembuka=$this->input->post('cabang_pembuka');

        $data=array(
            'nama'=>$nama,
            'tempat_lahir'=>$tempat_lahir,
            'tanggal_lahir'=>$tanggal_lahir,
            'alamat'=>$alamat,
            'status'=>$status,
            'no_rekening'=>$no_rekening,
            'cabang_pembuka'=>$cabang_pembuka

        );
        $where=array('id_customer'=>$id);
        $this->m_data->update_data($where,$data,'customer');
        redirect('dashboard/customer');
    }

    function edit_c($id){
        $where=array('id_customer'=>$id);
        $data['customer']=$this->m_data->edit_data($where,'customer')->result();
        $this->load->view('v_customer_edit',$data);
    }

    
   function hapus_c($id){
       $where =array('id_customer'=>$id);
       $this->m_data->hapus_data($where,'customer');
        // redirect('dashboard/customer');
        redirect(base_url().'dashboard/customer');
   }
   function transaksi(){
    $data['transaksi']=$this->m_data->tampil_data_t()->result();
   $this->load->view('v_transaksi',$data);
   
}

function tambah_t(){
    $this->load->view('v_transaksi_tambah');
}
function tambah_aksi_t(){
    $no_rekening=$this->input->post('no_rekening');
    $cabang=$this->input->post('cabang');
    $jenis_produk=$this->input->post('jenis_produk');
    $debit=$this->input->post('debit');
    $kredit=$this->input->post('kredit');
    $balance=$this->input->post('balance');
    $tanggal_transaksi=$this->input->post('tanggal_transaksi');

    $data=array(
        'no_rekening'=>$no_rekening,
        'cabang'=>$cabang,
        'jenis_produk'=>$jenis_produk,
        'debit'=>$debit,
        'kredit'=>$kredit,
        'balance'=>$balance,
        'tanggal_transaksi'=>$tanggal_transaksi

    );
    $this->m_data->input_data($data,'transaksi');
    redirect('dashboard/transaksi');
}
function update_t(){
    $id=$this->input->post('id_transaksi');
    $no_rekening=$this->input->post('no_rekening');
    $cabang=$this->input->post('cabang');
    $jenis_produk=$this->input->post('jenis_produk');
    $debit=$this->input->post('debit');
    $kredit=$this->input->post('kredit');
    $balance=$this->input->post('balance');
    $tanggal_transaksi=$this->input->post('tanggal_transaksi');

    $data=array(
        'no_rekening'=>$no_rekening,
        'cabang'=>$cabang,
        'jenis_produk'=>$jenis_produk,
        'debit'=>$debit,
        'kredit'=>$kredit,
        'balance'=>$balance,
        'tanggal_transaski'=>$tanggal_transaksi

    );
    $where=array('id_transaksi'=>$id);
    $this->m_data->update_data($where,$data,'transaksi');
    redirect('dashboard/transaksi');
}

function edit_t($id){
    $where=array('id_transaksi'=>$id);
    $data['transaksi']=$this->m_data->edit_data($where,'transaksi')->result();
    $this->load->view('v_transaksi_edit',$data);
}

   function hapus_t($id){
       $where =array('id_transaksi'=>$id);
       $this->m_data->hapus_data($where,'transaksi');
        // redirect('dashboard/customer');
        redirect(base_url().'dashboard/transaksi');
   }

}