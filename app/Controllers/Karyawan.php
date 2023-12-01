<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Karyawan_model;

class Karyawan extends Controller
{
    public function index()
    {
        $model = new Karyawan_model;
        $data['title']     = 'Data Karyawan';
        $data['getKaryawan'] = $model->getKaryawan();
        echo view('header_view', $data);
        echo view('karyawan_view', $data);
        echo view('footer_view', $data);
    }

    public function tambah()
    {
        $data['title']     = 'Tambah Data Karyawan';
        echo view('header_view', $data);
        echo view('tambah_view', $data);
        echo view('footer_view', $data);
    }

    public function add()
    {
        $model = new Karyawan_model;
        $data = array(
            'nama' => $this->request->getPost('nama'),
            'nohp' => $this->request->getPost('nohp'),
            'tgllahir'  => $this->request->getPost('tgllahir'),
            'golongan'  => $this->request->getPost('golongan')
        );
        $model->saveKaryawan($data);
        echo '<script>
                alert("Sukses Tambah Data Karyawan");
                window.location="'.base_url('karyawan').'"
            </script>';

    }

    public function edit($id)
    {
        $model = new Karyawan_model;
        $getKaryawan = $model->getKaryawan($id)->getRow();
        if(isset($getKaryawan))
        {
            $data['karyawan'] = $getKaryawan;
            $data['title']  = 'Edit '.$getKaryawan->nama;

            echo view('header_view', $data);
            echo view('edit_view', $data);
            echo view('footer_view', $data);

        }else{

            echo '<script>
                    alert("ID barang '.$id.' Tidak ditemukan");
                    window.location="'.base_url('karyawan').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new Karyawan_model;
        $id = $this->request->getPost('id');
        $data = array(
            'nama' => $this->request->getPost('nama'),
            'nohp' => $this->request->getPost('nohp'),
            'tgllahir' => $this->request->getPost('tgllahir'),
            'golongan' => $this->request->getPost('golongan')
        );
        $model->editKaryawan($data,$id);
        echo '<script>
                alert("Sukses Edit Data Karyawan");
                window.location="'.base_url('karyawan').'"
            </script>';

    }

    public function hapus($id)
    {
        $model = new Karyawan_model;
        $getKaryawan = $model->getKaryawan($id)->getRow();
        if(isset($getKaryawan))
        {
            $model->hapusKaryawan($id);
            echo '<script>
                    alert("Hapus Data Karyawan Sukses");
                    window.location="'.base_url('karyawan').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID karyawan '.$id.' Tidak ditemukan");
                    window.location="'.base_url('karyawan').'"
                </script>';
        }
    }
}