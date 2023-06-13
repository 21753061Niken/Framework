<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    public function getBarang(){
        $data =
        [
            [
                "nama_barang" => "PC",
                "merek" => "lenovo",
                "harga" => "Rp. 14.000.000"
            ],
            [
                "nama_barang" => "Mouse Wireless",
                "merek" => "Hp",
                "harga" => "Rp. 350.000"
            ],
            [
                "nama_barang" => "Keyboard",
                "merek" => "logitech",
                "harga" => "Rp. 140.000"
            ],
            [
                "nama_barang" => "Headphone",
                "merek" => "sony",
                "harga" => "Rp. 1.999.000"
            ],
            ];

            return$data;
    }
}
