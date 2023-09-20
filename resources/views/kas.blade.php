@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card  col-12">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h2> Petty Cash <b> {{$kas->nama}}</b> </h2>
                        </div>
                        <div class="col-6 ">
                            <span class="text-right"> {{"Rp " . number_format($kas->saldoawal, 0, ",", ".")  }} </span>
                        </div>
                    </div>

                </div>

                <div class="card-body ">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Uang Masuk</th>
                                <th scope="col">Pengeluaran</th>
                                <th scope="col">Saldo</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>Mark</td>
                                <td>Otto</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
