@extends('layouts.app')
@section('content')
@include('layouts.nav')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm truyện</div>

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

                    <form method="POST" action="{{route('truyen.store')}}"  enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group" style="margin-bottom: 10px;">
                          <label for="exampleInputEmail1" style="margin-bottom: 2px;" >Tên truyện</label>
                          <input type="text" class="form-control" value="{{old('tentruyen')}}" name="tentruyen" onkeyup="ChangeToSlug();" id="slug" aria-describedby="emailHelp" placeholder="Tên truyện...">
                        </div>
                        <div class="form-group" style="margin-bottom: 10px;">
                            <label for="exampleInputEmail1" style="margin-bottom: 2px;" >Tác giả</label>
                            <input type="text" class="form-control" value="{{old('tacgia')}}" name="tacgia" id="slug" aria-describedby="emailHelp" placeholder="Tác giả...">
                          </div>
                        
                        <div class="form-group" style="margin-bottom: 10px;">
                            <label for="exampleInputEmail1" style="margin-bottom: 2px;" >Slug truyện</label>
                            <input type="text" class="form-control" value="{{old('slug_truyen')}}" name="slug_truyen" id="convert_slug" aria-describedby="emailHelp" placeholder="Slug truyện...">
                        </div>

                        <div class="form-group" style="margin-bottom: 10px;">
                            <label for="exampleInputEmail1" style="margin-bottom: 2px;" >Tóm tắt truyện</label>
                            <textarea name="tomtat" class="form-control" rows="5" style="resize : none" ></textarea>
                        </div>

                        <div class="form-group" style="margin-bottom: 10px;">
                            <label for="exampleInputEmail1" style="margin-bottom: 2px;" >Thể loại truyện</label><br>
                            <select  name="theloai" class="custom-select">
                                @foreach($danhmuc as $key => $the)
                                <option value="{{$the->id}}">{{$the->tentheloai}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group" style="margin-bottom: 10px;">
                            <label for="exampleInputEmail1" style="margin-bottom: 2px;" >Danh mục truyện</label><br>
                            <select  name="danhmuc" class="custom-select">
                                @foreach($danhmuc as $key => $muc)
                                <option value="{{$muc->id}}">{{$muc->tendanhmuc}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group" style="margin-bottom: 10px;">
                            <label for="exampleInputEmail1" style="margin-bottom: 2px;" >Thể loại truyện</label><br>
                            <select  name="theloai" class="custom-select">
                                @foreach($theloai as $key => $the)
                                <option value="{{$the->id}}">{{$the->tentheloai}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group" style="margin-bottom: 10px;">
                            <label for="exampleInputEmail1" style="margin-bottom: 2px;" >Hình ảnh truyện</label><br>
                            <input type="file" class="form-control-file" name="hinhanh" id="convert_slug" aria-describedby="emailHelp" placeholder="Slug truyện...">
                        </div>

                        <div class="form-group" style="margin-bottom: 10px;">
                        <label for="exampleInputEmail1" style="margin-bottom: 2px;" >Kích hoạt</label><br>
                        <select  name="kichhoat" class="custom-select">
                            <option value="0">Kích hoạt</option>
                            <option value="1">Hủy</option>
                        </select>
                        </div>
                        <button type="submit" name="themtruyen" class="btn btn-primary">Thêm</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
