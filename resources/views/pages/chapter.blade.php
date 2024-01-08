@extends('../layout')
@section('content') 
{{-- @include('pages.truyen') --}}

<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
      <li class="breadcrumb-item"><a href="{{url('the-loai/'.$truyen_breadcrumb->theloai->slug_theloai)}}">{{$truyen_breadcrumb->theloai->tentheloai}}</a></li>
      <li class="breadcrumb-item"><a href="{{url('danh-muc/'.$truyen_breadcrumb->danhmuctruyen->slug_danhmuc)}}">{{$truyen_breadcrumb->danhmuctruyen->tendanhmuc}}</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{$truyen_breadcrumb->tentruyen}}</li>
    </ol>
  </nav>

    <div class="row">
      <div class="col-md-12">
        <h4><p class="fw-bolder">{{$chapter->truyen->tentruyen}}</p></h4>
        <p>Chương hiện tại: {{$chapter->tieude}}</p>
        <div class="col-md-5">

          <style type="text/css">
            .isDisabled{
              color: : currentColor;
              pointer-events: none;
              opacity: 0.5;
              text-decoration: none;
            }
          </style>
          <div class="from-group">
            <label for="exampaleInputEmail">Chọn chương</label>
            <select name="kichhoat" class="custom-select">
              @foreach($all_chapter as $key => $chap)
              <option value="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</option>
              @endforeach
            </select>
            <div class="row" >
              <div class="col-md-3" >
                <div class="d-grid gap-2 mt-2" class="display:flex">
                  <a class="btn btn-success btn-sm flex-fill {{$chapter->id == $min_id->id ? 'isDisabled' : ''}} " href="{{url('xem-chapter/'.$previous_chapter)}}"><==  Tập trước </a>
                  <a class="btn btn-success btn-sm flex-fill  {{$chapter->id == $max_id->id ? 'isDisabled' : ''}}  " href="{{url('xem-chapter/'.$next_chapter)}}">Tập sau  ==></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="noidungchuong mt-5">
          <p>{{$chapter->noidung}}</p>
        </div>
      </div>
    </div>

</div>
@endsection