<?php
namespace App\Controllers;

use App\Models\MahasiswaModel;

class Praktikum extends BaseController {

    public function pretest() {
        return "Pretest Web Programming";
    }

    public function profil() {
        
        $model = new MahasiswaModel();

        if (!$model->find('32602300051')) {
            $model->insert([
                    'nim' => '32602300051',
                    'nama' => 'Sheyra Dewangga',
                    'prodi' => 'Teknik Informatika'
            ]);
        }

        $data['mahasiswa'] = $model->findAll();

        return view('profil_mahasiswa', $data);
    }


}
