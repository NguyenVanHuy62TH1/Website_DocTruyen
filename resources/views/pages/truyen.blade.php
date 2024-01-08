@extends('../layout')
{{-- @section('slide')
    @include('pages.slide')
@endsection --}}
@section('content') 
<div class="container">


      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
          <li class="breadcrumb-item"><a href="{{url('danh-muc/'.$truyen->danhmuctruyen->slug_danhmuc)}}">{{$truyen->danhmuctruyen->tendanhmuc}}</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{$truyen->tentruyen}}</li>
        </ol>
      </nav>

      <div class="row mt-3">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{asset('public/uploads/truyen/'.$truyen->hinhanh)}}" class="card-img-top" alt="...">
                </div>
                <div class="col-md-9">
                    <style type="text/css">
                        .infortruyen{
                            list-style: none;
                        }
                    </style>
                    <ul class="infortruyen" >
                        <li>Tên truyện: {{$truyen->tentruyen}}</li>
                        <li>Tác giả: {{$truyen->tacgia}}</li>
                        <li>Danh mục truyện: <a style="text-decoration: none;" href="{{url('danh-muc/'.$truyen->danhmuctruyen->slug_danhmuc)}}">{{$truyen->danhmuctruyen->tendanhmuc}}</a></li>
                        <li>Thể loại truyện: <a style="text-decoration: none;" href="{{url('the-loai/'.$truyen->theloai->slug_theloai)}}">{{$truyen->theloai->tentheloai}}</a></li>
                        <li>Số chương: 200</li>
                        <li>Lượt xem: 1200</li>
                        <li><a class="text-decoration: none;" href="#">Xem mục lục</a></li>
                        @if($chapter_dau)
                          <li><a href="{{url('xem-chapter/'.$chapter_dau->slug_chapter)}}" class="btn btn-primary">Đọc online</a></li>
                        @else
                        <li><a class="btn btn-danger">Chương đang được cập nhật...</a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="cold-md-12 mt-3">
                <p>{!! $truyen->tomtat !!}</p>
            </div>
            <hr>
            <h4>Mục lục</h4>
            <ul class="mucluctruyen" >
              @php
              $mucluc = count($chapter);
              @endphp
              @if($mucluc>0)
                @foreach($chapter as $key => $chap)
                <li><a href="{{url('xem-chapter/'.$chap->slug_chapter)}}">{{$chap->tieude}}</a></li>
                @endforeach
              @else
                <li>Mục lục đang được cập nhật...</li>
              @endif

            </ul>
            <h4>Sách cùng danh mục</h4>
            <div class="row">
              @foreach($cungdanhmuc as $key => $value)
              <div class="col-md-3 mb-2">
                  <div class="card m-1" style="width: 100%;">
                      <a href="#"></a>
                  <img src="{{asset('public/uploads/truyen/'.$value->hinhanh)}}" class="card-img-top">
                      <div class="card-body">
                      <h5 class="card-title">{{$value->tentruyen}}</h5>
                      <p class="card-text">{{$value->tomtat}}</p>
                      <div class="d-grid gap-2 d-md-block">
                          <a href="{{url('xem-truyen/'.$value->slug_truyen)}}" class="btn btn-primary m-1" type="button">Đọc ngay</a>
                          <a href="#" class="btn btn-primary m-1" type="button"><i class="fa-solid fa-eye"></i> 14231</a><br>
                      </div>
                      <small class="text-muted">9 mins ago</small>
                      </div>
                      </a>
                  </div>
              </div>
              @endforeach
            </div>
        </div>


        <div class="col-md-3">
            <h3>Truyện được xem nhiều</h3>
        
        <div class="row mt-2">
          <div class="col-md-5">
            <img class="img img-responsive" width="100%" class="card-img-top" src="{{asset('public/uploads/truyen/truyen-ngan-lao-hac-nam-cao85.jpg')}}">
          </div>
          <div class="col-md-7">
            <p>Cô gái đến từ hôm kia</p>
            <p><i class="fas fa-eye"></i>67293</p>
          </div>
        </div>
      </div>
      </div>
    
</div> 
@endsection