<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Username;

class UsernameModel extends Model{
    protected $table = 'login';
    protected $primaryKey = 'id';
    protected $returnType = Username::class;
    protected $allowedFields=['username','password','rol'];

    public function obtenerUsuario($data){
        $username = $this->db->table('login');
        $username->where($data);
        return $username->get()->getResultArray();
    }

    public function buscarUsuario(string $column, string $value){
        return $this->where($column,$value)->first();
    }
}