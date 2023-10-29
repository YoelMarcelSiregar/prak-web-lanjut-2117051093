<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\KelasModel;
use App\Controllers\BaseController;

class KelasController extends BaseController
{
    public $kelasModel;
    public $userModel;

    public function __construct()
    {
        $this->kelasModel = new KelasModel();
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data =[
            'title' => 'List Kelas',
            'kelass' => $this->kelasModel->getKelas()
        ];

        return view('list_kelas', $data);
    }

    public function create(){
        
        $data = [
            'validation' => \Config\Services::validation(),
            'title' => 'Create_Kelas'
        ];

        return view('create_kelas', $data);
    }

    public function store()
    {

        // Validasi input
        if(!$this->validate([

            'nama_kelas' => [
                'rules' => 'required|is_unique[kelas.nama_kelas]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah terdaftar.'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/kelas/create')->withInput()->with('validation', $validation);

        }

        $this->kelasModel->saveKelas([
            'nama_kelas' => $this->request->getVar('nama_kelas'),
        ]);

        return redirect()->to(base_url('/kelas'));

    }

    public function edit($id){
        $kelas = $this->kelasModel->getKelas($id);

        $data = [
            'title' => 'Edit Kelas',
            'kelas' => $kelas,
        ];

        return view('edit_kelas', $data);
    }

    public function update($id){
        
        $data = [
            'nama_kelas' => $this->request->getVar('nama_kelas'),
        ];

        $result = $this->kelasModel->updateKelas($data, $id);

        if(!$result){
            return redirect()->back()->withInput()->with('error', 'Gagal Menyimpan Data');
        }

        return redirect()->to(base_url('/kelas'));
    }

    public function destroy($id){
        $result = $this->kelasModel->deleteKelas($id);
        if(!$result){
            return redirect()->back()->with('error', 'Gagal Menghapus Data');
        }

        return redirect()->to(base_url('/kelas'))->with('success', 'Berhasil Menghapus Data');
    }
}
