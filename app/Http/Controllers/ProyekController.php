<?php

namespace App\Http\Controllers;

use App\Models\Proyek;
use App\Models\Statusproject;
use App\Models\client;
use Illuminate\Http\Request;
use Auth;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'Data';
        $data['client'] = client::all();
        $data['status_project'] = Statusproject::all();
        $data['q'] = $request->q;
        $data['proyek'] = Proyek::where('nama_project', 'like', '%' . $request->q . '%')
                            ->join('m_klien', 'm_klien.id_m_klien', '=', 'm_project.id_m_klien')
                            ->join('m_status_project', 'm_status_project.id_status_project', '=', 'm_project.id_status_project')
                            ->get();
        return view('proyek.proyek', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data['title'] = 'Tambah';
        //$data['client'] = client::all();
        // $data['status_project'] = Statusproject::all();
        // $data['proyek'] = Proyek::where('status_project', 'like', '%' . $request->q . '%')
        //                      ->join('m_status_project', 'm_status_project.id_status_project', '=', 'm_project.id_status_project')
        //                      ->get();
        // $data['q'] = $request->q;
        return view('proyek.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_m_klien' => 'required',
            'id_status_project' => 'required',
            'nama_project' => 'required',
            'deskripsi_project' => 'required',
            'waktumulai' => 'required',
            'waktuberakhir' => 'required',
            //'nama_klien' => 'required',
            //'status_project' => 'required',
        ]);

//        dd($request->all());

        $proyek = new Proyek();
        //$proyek['id_m_klien'] = $request->get('client');
        //$proyek['id_status_project'] = $request->get('status_project');
        $proyek->id_m_klien = $request->id_m_klien;
        $proyek->id_status_project = $request->id_status_project;
        $proyek->nama_project = $request->nama_project;
        $proyek->deskripsi_project = $request->deskripsi_project;
        $proyek->waktumulai = $request->waktumulai;
        $proyek->waktuberakhir = $request->waktuberakhir;
        //$proyek->nama_klien = $request->nama_klien;
        //$proyek->status_project = $request->status_project;
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $name = rand(1000, 9999) . $image->getClientOriginalName();
        //     $image->move('images/post', $name);
        //     $post->image = $name;
        // }
        //$proyek->status_project = $request->status_project;
        $proyek->save();
        return redirect('proyek')->with('success', 'Tambah Proyek Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Proyek $proyek)
    {
        $data['title'] = 'Detail';
        $data['nama_project'] = ['nama_project'];
        $data['waktumulai'] = ['waktumulai'];
        $data['waktuberakhir'] = ['waktuberakhir'];
        $data['nama_klien'] = ['Klien1', 'Klien2', 'Klien3'];
        $data['status_project'] = ['Masuk', 'Berjalan', 'Pending', 'Selesai'];
        $data['deskripsi_project'] = ['deskripsi_project'];
        $data['proyek'] = $proyek;
        return view('proyek.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyek $proyek)
    {
        // $data['title'] = 'Ubah';
        // $data['row'] = $proyek;
        // $data['categories'] = ['Klien1', 'Klien2', 'Klien3'];
        // $data['proyek'] = Proyek::where('status_project', 'like', '%' .$request->q . '%')
        //                     ->join('m_status_project', 'm_status_project.id_status_project', '=', 'm_project.id_status_project')
        //                     ->get();
        // return view('proyek.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyek $proyek)
    {
        $request->validate([
            'id_m_klien' => 'required',
            'id_status_project' => 'required',
            'nama_project' => 'required',
            'deskripsi_project' => 'required',
            'waktumulai' => 'required',
            'waktuberakhir' => 'required',
            //'nama_klien' => 'required',
            //'status_project' => 'required',
        ]);


        $proyek->nama_project = $request->nama_project;
        $proyek->waktumulai = $request->waktumulai;
        $proyek->waktuberakhir = $request->waktuberakhir;
        $proyek->deskripsi_project = $request->deskripsi_project;
        $proyek->id_m_klien = $request->id_m_klien;
        $proyek->id_status_project = $request->id_status_project;
        // if ($request->hasFile('image')) {
        //     $post->delete_image();
        //     $image = $request->file('image');
        //     $name = rand(1000, 9999) . $image->getClientOriginalName();
        //     $image->move('images/post', $name);
        //     $post->image = $name;
        // }
        $proyek->save();
        return redirect('proyek')->with('success', 'Ubah Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyek $proyek)
    {
        // $proyek->delete_image();
        $proyek->delete();
        return redirect('proyek')->with('success', 'Hapus Berhasil');
    }
}
