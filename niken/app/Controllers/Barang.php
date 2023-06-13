<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step 1
use App\Models\BarangModel;

class Barang extends BaseController
{
    //step 2
    protected $barang;
    
    //step 3 membuat fungsi construct
    public function __construct()
    {
        //step 4
        $this->barang = new BarangModel();
    }
    public function index()
    {
        $data['data_barang'] = $this -> barang -> getBarang();
        return view('barang/index', $data);
    }
}
