<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'kelas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_kelas'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';


    public function saveKelas($data){
        $this->insert($data);
    }

    public function getKelas($id = null){
        if($id != null){

            return $this->find($id);
        }
        return $this->findAll();    
    }

    public function updateKelas($data, $id){
        return $this->update($id, $data);
    }

    public function deleteKelas($id){
        return $this->delete($id);
    }

}
