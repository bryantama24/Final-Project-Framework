<?php

namespace App\Controllers;

use App\Models\PeminjamanModel;

class Peminjaman extends BaseController
{
    protected $peminjaman;
    function __construct()
    {
        $this->peminjaman = new PeminjamanModel();
    }
    public function index()
    {
        $data['pageTitle'] = 'Daftar Peminjaman';
        $data['peminjaman'] = $this->peminjaman->findAll();
        return view('dashboard/peminjaman', $data);
    }
    public function create()
    {
        $data['pageTitle'] = 'Input Data Peminjam';

        return view('dashboard/peminjaman_create', $data);
    }
    public function store()
    {

        if (!$this->validate([
            'n_mhsiswa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jurusan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'buku' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            't_pinjam' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            't_kembali' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',

                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }


        $this->peminjaman->insert([
            'n_mhsiswa' => $this->request->getVar('n_mhsiswa'),
            'alamat' => $this->request->getVar('alamat'),
            'jurusan' => $this->request->getVar('jurusan'),
            'buku' => $this->request->getVar('buku'),
            't_pinjam' => $this->request->getVar('t_pinjam'),
            't_kembali' => $this->request->getVar('t_kembali'),

        ]);
        session()->setFlashdata('message', 'Tambah Data Peminjam Berhasil');
        return redirect()->to('/peminjaman');
    }
    function edit($n_mhsiswa)
    {
        $dataPeminjaman = $this->peminjaman->find($n_mhsiswa);
        if (empty($dataPeminjaman)) {
            throw new
                \CodeIgniter\Exceptions\PageNotFoundException('Data PeminjamTidak ditemukan !');
        }
        $data['pageTitle'] = 'Edit Data Pinjam';
        $data['peminjaman'] = $dataPeminjaman;
        return view('dashboard/peminjaman_edit', $data);
    }
    public function update($n_mhsiswa)
    {
        if (!$this->validate([
            'n_mhsiswa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jurusan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'buku' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }
        $this->peminjaman->update($n_mhsiswa, [
            'n_mhsiswa' => $this->request->getVar('n_mhsiswa'),
            'alamat' => $this->request->getVar('alamat'),
            'jurusan' => $this->request->getVar('jurusan'),
            'buku' => $this->request->getVar('buku'),

        ]);
        session()->setFlashdata('message', 'Update Data Pinjam Berhasil');
        return redirect()->to('/peminjaman');
    }
    function delete($n_mhsiswa)
    {
        $dataPeminjaman = $this->peminjaman->find($n_mhsiswa);
        if (empty($dataPeminjaman)) {
            throw new
                \CodeIgniter\Exceptions\PageNotFoundException('Data Peminjam Tidak ditemukan !');
        }
        $this->peminjaman->delete($n_mhsiswa);
        session()->setFlashdata('message', 'Kembalikan Buku Berhasil');
        return redirect()->to('/peminjaman');
    }
}
