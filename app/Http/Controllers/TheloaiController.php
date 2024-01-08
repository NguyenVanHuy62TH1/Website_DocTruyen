<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theloai;


class TheloaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admincp.theloai.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admincp.theloai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request -> validate([
            'tentheloai' => 'required|max:255',
            'slug_theloai' => 'required|max:255',
            'mota' =>   'required|max:255',
            'kichhoat' =>'required',
        ],
        [
            'tentheloai.required' => 'Phải có tên thể loại .',
            'mota.required' =>   'Hãy điền mô tả.',
        ]
        );
        $theloai = Theloai::find($id);

        $theloai -> tentheloai = $data['tentheloai'];
        $theloai -> slug_theloai = $data['slug_theloai'];
        $theloai-> mota = $data['mota'];
        $theloai -> kichhoat = $data['kichhoat'];
        $theloai -> save();
        return redirect() -> back()-> with('status', 'Cập nhật thể loại truyện thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
