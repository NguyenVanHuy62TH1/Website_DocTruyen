@extends('../layout')
@section('slide')
    @include('pages.slide')
@endsection
@section('content')  

          {{-- Truyện mới câp nhật --}}
        <div class="container mt-4">
            <h3>Truyện mới cập nhật</h3>
            <div class="row mt-1">
                @foreach($truyen as $key => $value)
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
            <a class="btn btn-success m-1" href="">Xem tất cả</a>
        </div>
@endsection