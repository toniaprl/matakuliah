<?php
class Tonia01 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar web programming";
        //$this->load->view('view_tonia01');
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_tonia01');

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_tonia01->jumlah($n1, $n2);
        
        $this->load->view('view_tonia01', $data);
    }
}    