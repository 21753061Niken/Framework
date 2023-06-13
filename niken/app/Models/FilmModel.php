<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
    protected $table            = 'film';
    protected $primarykey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowFields      = [];

  public function getFilm() 
  {
    $data =[
        [
            "nama_film" => "Sewu Dino",
            "genre"     => "",
            "duration"  => " 1 jam 43 menit"
        ],
        [
            "nama_film" => "Dedemit",
            "genre"     => "",
            "duration"  => " 1 jam 50 menit"
        ],
        [
            "nama_film" => "Angel",
            "genre"     => "",
            "duration"  => " 1 jam 20 menit"
        ],
        [
            "nama_film" => "Love Again",
            "genre"     => "",
            "duration"  => " 1 jam 30 menit"
        ],
        [
            "nama_film" => "The Mother",
            "id_genre"     => "",
            "duration"  => " 1 jam 43 menit"
        ],
        ];
        return $data;
  }
    public function getAllData()
    {
        return $this -> findAll();
    }

    public function getDataByID($id){
        return $this -> find($id);
    }
    public function getDataBy($data){
        return $this -> where("genre", $data) -> findAll();
    }

    public function getOrderBy(){
        return $this -> orderBy("nama_film", "desc") -> findAll();
    }
    public function getLimit(){
        return $this -> limit(5) -> get() -> getResultArray();
    }

}