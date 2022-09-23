<?php
class latihan2 extends CI_Controller
{
    public function index()
    {
        echo "Selamat datang di kelas programmer CI";
        //$this->load->view('viuwlat');
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('model_latihan2');

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->model_latihan2->jumlah($n1, $n2);

        $this->load->view('viuwlat', $data);
    }
}
