<?php

namespace App\Controllers\Penyuluh;

use App\Controllers\BaseController;
use App\Models\PenyuluhTHLAPBDModel;

class PenyuluhTHLAPBD extends BaseController
{


    public function penyuluhthlAPBD()
    {

        $get_param = $this->request->getGet();

        $kode_kab = $get_param['kode_kab'];
        $penyuluh_model = new PenyuluhTHLAPBDModel();
        $swadaya_data = $penyuluh_model->getPenyuluhSwadayaTotal($kode_kab);

        $data = [
            'jml_data' => $swadaya_data['jum'],
            'nama_kabupaten' => $swadaya_data['nama_kab'],
            'tabel_data' => $swadaya_data['table_data'],
            'title' => 'Penyuluh THL APBD',
            'name' => 'THL APBD'
        ];

        return view('kab/penyuluh/penyuluhthlAPBD', $data);
    }
}