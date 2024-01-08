@extends('layouts.app')
@section('content')
@include('layouts.nav')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thêm thể loại</div>

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

                    <form method="POST" action="{{route('theloai.store')}}">
                        @csrf
                        <div class="form-group" style="margin-bottom: 10px;">
                          <label for="exampleInputEmail1" style="margin-bottom: 2px;" >Tên thể loại</label>
                          <input type="text" class="form-control" value="{{old('tentheloai')}}" name="tentheloai" onkeyup="ChangeToSlug();" id="slug" aria-describedby="emailHelp" placeholder="Tên thể loại...">
                        </div>
                        
                        <div class="form-group" style="margin-bottom: 10px;">
                            <label for="exampleInputEmail1" style="margin-bottom: 2px;" >Slug thể loại</label>
                            <input type="text" class="form-control" value="{{old('slug_theloai')}}" name="slug_theloai" id="convert_slug" aria-describedby="emailHelp" placeholder="Slug thể loại...">
                        </div>

                        <div class="form-group" style="margin-bottom: 10px;">
                            <label for="exampleInputEmail1" style="margin-bottom: 2px;" >Mô tả thể loại</label>
                            <input type="text" class="form-control" value="{{old('mota')}}"  name="mota" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mô tả thể loại...">
                        </div>

                        <div class="form-group" style="margin-bottom: 10px;">
                        <label for="exampleInputEmail1" style="margin-bottom: 2px;" >Kích hoạt</label><br>
                        <select  name="kichhoat" class="custom-select">
                            <option value="0">Kích hoạt</option>
                            <option value="1">Hủy</option>
                        </select>
                        </div>
                        <button type="submit" name="themdanhmuc" class="btn btn-primary">Thêm</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
