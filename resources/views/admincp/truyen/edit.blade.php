@extends('layouts.app')
@section('content')
@include('layouts.nav')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cập nhật truyện</div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{route('truyen.update',[$truyen->id])}}"  enctype="multipart/form-data" >
                        @method('PUT')
                        @csrf
                        <div class="form-group" style="margin-bottom: 10px;">
                          <label for="exampleInputEmail1" style="margin-bottom: 2px;" >Tên truyện</label>
                          <input type="text" class="form-control" value="{{$truyen->tentruyen}}" name="tentruyen" onkeyup="ChangeToSlug();" id="slug" aria-describedby="emailHelp" placeholder="Tên truyện...">
                        </div>

                        <div class="form-group" style="margin-bottom: 10px;">
                            <label for="exampleInputEmail1" style="margin-bottom: 2px;" >Tác giả</label>
                            <input type="text" class="form-control" value="{{$truyen->tacgia}}" name="tacgia" aria-describedby="emailHelp" placeholder="Tên tác giả...">
                          </div>
                        
                        <div class="form-group" style="margin-bottom: 10px;">
                            <label for="exampleInputEmail1" style="margin-bottom: 2px;" >Slug truyện</label>
                            <input type="text" class="form-control" value="{{$truyen->slug_truyen}}" name="slug_truyen" id="convert_slug" aria-describedby="emailHelp" placeholder="Slug truyện...">
                        </div>

                        <div class="form-group" style="margin-bottom: 10px;">
                            <label for="exampleInputEmail1" style="margin-bottom: 2px;" >Tóm tắt truyện</label>
                            <textarea name="tomtat" class="form-control" rows="5" style="resize : none" >{{$truyen->tomtat}}</textarea>
                        </div>

                        <div class="form-group" style="margin-bottom: 10px;">
                            <label for="exampleInputEmail1" style="margin-bottom: 2px;" >Danh mục truyện</label><br>
                            <select  name="danhmuc" class="custom-select">
                                @foreach($danhmuc as $key => $muc)
                                <option {{ $muc->id==$truyen->danhmuc_id ? 'selected' : ' '}} value="{{$muc->id}}">{{$muc->tendanhmuc}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group" style="margin-bottom: 10px;">
                            <label for="exampleInputEmail1" style="margin-bottom: 2px;" >Thể loại</label><br>
                            <select  name="theloai" class="custom-select">
                                @foreach($theloai as $key => $the)
                                <option {{ $the->id==$truyen->theloai_id ? 'selected' : ' '}} value="{{$the->id}}">{{$the->tentheloai}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group" style="margin-bottom: 10px;">
                            <label for="exampleInputEmail1" style="margin-bottom: 2px;" >Hình ảnh truyện</label><br>
                            <input type="file" class="form-control-file" name="hinhanh">
                            <td><img src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" height="100%" width="100%"></td>
                        </div>

                        <div class="form-group" style="margin-bottom: 10px;">
                        <label for="exampleInputEmail1" style="margin-bottom: 2px;" >Kích hoạt</label><br>
                        <select  name="kichhoat" class="custom-select">
                            @if($truyen->kichhoat==0)
                            <option selected value="0">Kích hoạt</option>
                            <option value="1">Hủy</option>
                            @else
                            <option value="0">Kích hoạt</option>
                            <option selected value="1">Hủy</option>
                            @endif
                        </select>
                        </div>
                        <button type="submit" name="themtruyen" class="btn btn-primary">Cập nhật</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
