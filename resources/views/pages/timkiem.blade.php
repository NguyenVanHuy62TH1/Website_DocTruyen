@extends('../layout')
@section('content')  

          {{-- Truyện mới câp nhật --}}
        <div class="container mt-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{url('/')}}">Trang chủ</a></li>
                  <li class="breadcrumb-item"><a href="#">Tìm kiếm</a></li>
                </ol>
            </nav>
            <h3>Bạn đang tìm kiếm với từ khóa là: {{$tukhoa}}</h3>
            <div class="row mt-1">
                @php
                    $count = count($truyen);
                @endphp
                @if ($count ===0 )
                    <div class="col-md-12">
                        <div class="card box-shadow">
                            <div class="card-body">
                                <p class="fw-bolder">Không tìm thấy truyện...</p>
                                <div class="col-md-3">
                                    <div class="card" aria-hidden="true">
                                        <img xml="http://www.w3.org/2000/svg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title placeholder-glow">
                                            <span class="placeholder col-6"></span>
                                        </h5>
                                        <p class="card-text placeholder-glow">
                                            <span class="placeholder col-7"></span>
                                            <span class="placeholder col-4"></span>
                                            <span class="placeholder col-4"></span>
                                            <span class="placeholder col-6"></span>
                                            <span class="placeholder col-8"></span>
                                        </p>
                                        <a class="btn btn-primary disabled placeholder col-6" aria-disabled="true"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @else  
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
            @endif
            </div>
        </div>
@endsection