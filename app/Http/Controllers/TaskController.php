<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $data['title'] = 'Data';
        // $data['q'] = $request->q;
        // $data['task'] = task::where('Nama', 'like', '%' . $request->q . '%')
        //                     //->join('t_akun_user', 't_akun_user.id_akun', '=', 'm_user.id_akun')
        //                     ->get();
        return view('task.task');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    //     $data['title'] = 'Tambah';
    //     return view('task.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function lead(Request $request)
    {
        return view('task.lead');
        // $request->validate([
        //     'Nama' => 'required',
        //     'alamat' => 'required',
        //     'email' => 'required',
        //     'nohp' => 'required',
        //     'username' => 'required',
        //     'password' => 'required',
        // ]);

        // $task = new task();
        // $task->Nama = $request->Nama;
        // $task->alamat = $request->alamat;
        // $task->email = $request->email;
        // $task->nohp = $request->nohp;
        // $task->save();
        // $task->username = $request->username;
        // $task->password = $request->password;

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $name = rand(1000, 9999) . $image->getClientOriginalName();
        //     $image->move('images/post', $name);
        //     $post->image = $name;
        // }
        return redirect()->back()->with('success', 'Tambah Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(task $task)
    {
        $data['title'] = 'Detail';
        $data['Nama'] = ['Nama'];
        $data['alamat'] = ['alamat'];
        $data['email'] = ['email'];
        $data['nohp'] = ['nohp'];
        $data['username'] = ['username'];
        $data['password'] = ['password'];
        $data['task'] = $task;
        return view('task.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(task $task)
    {
        $data['title'] = 'Ubah';
        $data['task'] = $task;
        return view('task.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, task $task)
    {
        $request->validate([
            'Nama' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'gmail' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $task->Nama = $request->Nama;
        $task->no_telp = $request->no_telp;
        $task->gmail = $request->gmail;
        $task->alamat = $request->alamat;
        $task->username = $request->username;
        $task->password = $request->password;
        // if ($request->hasFile('image')) {
        //     $post->delete_image();
        //     $image = $request->file('image');
        //     $name = rand(1000, 9999) . $image->getClientOriginalName();
        //     $image->move('images/post', $name);
        //     $post->image = $name;
        // }
        $task->save();
        return redirect('task')->with('success', 'Ubah Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(task $task)
    {
        // $task->delete_image();
        $task->delete();
        return redirect('task')->with('success', 'Hapus Berhasil');
    }
}