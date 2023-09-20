@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body mx-auto ">
                    <div class="row ">
                        @foreach ($kas as $item)
                        <div class="col-md-4 mt-2">
                            <div class="card" style="width: 18rem;">
                                <img src="https://accurate.id/wp-content/uploads/2022/11/accurate.id-Apa-itu-Financial-Accounting-Ini-Pentingnya-Untuk-Perusahaan-Anda.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title" style="font-size: 25px;font-weight:800">{{$item->nama}}</h5>
                                  <p class="card-text">
                                    <span class="badge bg-success" style="font-size: 17px"> 
                                    {{"Rp " . number_format($item->saldoawal, 0, ",", ".")  }}    
                                    </span>    
                                </p>
                                  <a href="kaskecil/{{$item->id}}" class="btn btn-primary">Cek Detail</a>
                                </div>
                              </div>
                        </div>
                        @endforeach
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
