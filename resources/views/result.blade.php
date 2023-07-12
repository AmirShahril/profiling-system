
@extends('layouts.app')
<style>
            body 
            {
            background-image: url("{{url('/img/Take Cover.jpg')}}");
            background-position: auto;
            background-repeat: no-repeat;
            background-size: cover;
            }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Ujian Pendorong') }}</div>

                <div class="card-body p-4">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($results->isEmpty())
                        <p>No results found.</p>
                    @else
                        <div>
                            <h1></h1>
                            @foreach ($results as $result)
                                <h3>Nombor Index Peg Kadet: {{ $result->user_data_id }}</h3>

                                <table class="table table-bordered mt-4">
                                    <tr>
                                        <td><strong>UJIAN PENDORONG SENJATA MARKAH: </strong></td>
                                        <td>{{ $result->UJIAN_PENDORONG_SENJATA_MARKAH ?? '-' }}</td>
                                        <td><strong>UJIAN PENDORONG SENJATA GRED: </strong></td>
                                        <td>{{ $result->UJIAN_PENDORONG_SENJATA_GRED ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>UJIAN PENDORONG PERTOLONGAN CEMAS MARKAH: </strong></td>
                                        <td>{{ $result->UJIAN_PENDORONG_PERTOLONGAN_CEMAS_MARKAH ?? '-' }}</td>
                                        <td><strong>UJIAN PENDORONG PERTOLONGAN CEMAS GRED: </strong></td>
                                        <td>{{ $result->UJIAN_PENDORONG_PERTOLONGAN_CEMAS_GRED ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>UJIAN PENDORONG IMP MARKAH: </strong></td>
                                        <td>{{ $result->UJIAN_PENDORONG_IMP_MARKAH ?? '-' }}</td>
                                        <td><strong>UJIAN PENDORONG IMP GRED: </strong></td>
                                        <td>{{ $result->UJIAN_PENDORONG_IMP_GRED ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>UJIAN PENDORONG BACA PETA MARKAH: </strong></td>
                                        <td>{{ $result->UJIAN_PENDORONG_BACA_PETA_MARKAH ?? '-' }}</td>
                                        <td><strong>UJIAN PENDORONG BACA PETA GRED: </strong></td>
                                        <td>{{ $result->UJIAN_PENDORONG_BACA_PETA_GRED ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>UJIAN PENDORONG SEMBOYAN MARKAH: </strong></td>
                                        <td>{{ $result->UJIAN_PENDORONG_SEMBOYAN_MARKAH ?? '-' }}</td>
                                        <td><strong>UJIAN PENDORONG SEMBOYAN GRED: </strong></td>
                                        <td>{{ $result->UJIAN_PENDORONG_SEMBOYAN_GRED ?? '-' }}</td>
                                    </tr>
                                </table>

                                <h4><strong>MARKAH KESELURUHAN<strong></h4>

                                <table class="table table-bordered mt-4">
                                    <tr>
                                        <td><strong>UJIAN MUTLAK 1T MEMIMPIN DAN MENGAWAL: </strong></td>
                                        <td>{{ $result->MEMIMPIN_DAN_MENGAWAL_UJIAN_MUTLAK_1T ?? '-' }}</td>
                                        <td><strong>UJIAN TERMINAL MEMBENTUK KARAKTER PEMIMPIN: </strong></td>
                                        <td>{{ $result->MEMBENTUK_KARAKTER_PEMIMPIN_UJIAN_TERMINAL ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>UJIAN PAWAI 1: </strong></td>
                                        <td>{{ $result->UJIAN_PAWAI_1 ?? '-' }}</td>
                                        <td><strong>UJIAN PAWAI 2: </strong></td>
                                        <td>{{ $result->UJIAN_PAWAI_2 ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>MEMAHAMI SEJARAH TENTERA: </strong></td>
                                        <td>{{ $result->MEMAHAMI_SEJARAH_TENTERA ?? '-' }}</td>
                                        <td><strong>UJIAN JASMANI 1: </strong></td>
                                        <td>{{ $result->UJIAN_JASMANI_1 ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>UJIAN JASMANI 2: </strong></td>
                                        <td>{{ $result->UJIAN_JASMANI_2 ?? '-' }}</td>
                                        <td><strong>UJIAN JASMANI 3: </strong></td>
                                        <td>{{ $result->UJIAN_JASMANI_3 ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>UJIAN MUTLAK 2T MELAKSANA KEMAHIRAN ASAS KETENTERAAN: </strong></td>
                                        <td>{{ $result->MELAKSANA_KEMAHIRAN_ASAS_KETENTERAAN_UJIAN_MUTLAK_2T ?? '-' }}</td>
                                        <td><strong>UJIAN TERMINAL 2T1 MENGAPLIKASI TAKTIK ASAS: </strong></td>
                                        <td>{{ $result->MENGAPLIKASI_TAKTIK_ASAS_UJIAN_TERMINAL_2T1 ?? '-' }}</td>
                                    </tr>
                                    
                                    <tr>
                                        <td><strong>UJIAN TERMINAL 2T2 MENGAPLIKASI PENGURUSAN KETENTERAAN: </strong></td>
                                        <td>{{ $result->MENGAPLIKASI_PENGURUSAN_KETENTERAAN_UJIAN_TERMINAL_2T2 ?? '-' }}</td>
                                        <td><strong>UJIAN PENDORONG MENGAPLIKASI TAKTIK ASAS: </strong></td>
                                        <td>{{ $result->MENGAPLIKASI_TAKTIK_ASAS_UJIAN_PENDORONG ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>UJIAN PENDORONG MENGAPLIKASI PENGURUSAN KETENTERAAN: </strong></td>
                                        <td>{{ $result->MENGAPLIKASI_PENGURUSAN_KETENTERAAN_UJIAN_PENDORONG ?? '-' }}</td>
                                        <td><strong>TEWT CW DEF: </strong></td>
                                        <td>{{ $result->TEWT_CW_DEF ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>TEWT CW OFF: </strong></td>
                                        <td>{{ $result->TEWT_CW_OFF ?? '-' }}</td>
                                        <td><strong>LATIHAN AKHIR CW: </strong></td>
                                        <td>{{ $result->LATIHAN_AKHIR_CW ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>LATIHAN AKHIR CIW: </strong></td>
                                        <td>{{ $result->LATIHAN_AKHIR_CIW ?? '-' }}</td>
                                        <td><strong>UJIAN PENGENDALIAN SENJATA: </strong></td>
                                        <td>{{ $result->UJIAN_PENGENDALIAN_SENJATA ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>UJIAN AMALI BACA PETA DAN PANDU ARAH 1: </strong></td>
                                        <td>{{ $result->UJIAN_AMALI_BACA_PETA_DAN_PANDU_ARAH_1 ?? '-' }}</td>
                                        <td><strong>UJIAN PANDU ARAH 2: </strong></td>
                                        <td>{{ $result->UJIAN_PANDU_ARAH_2 ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>UJIAN AMALI SEMBOYAN: </strong></td>
                                        <td>{{ $result->UJIAN_AMALI_SEMBOYAN ?? '-' }}</td>
                                        <td><strong>UJIAN AMALI IMP: </strong></td>
                                        <td>{{ $result->UJIAN_AMALI_IMP ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>SIKAP KEPIMPINAN: </strong></td>
                                        <td>{{ $result->SIKAP_KEPIMPINAN ?? '-' }}</td>
                                    </tr>

                                </table>
            
                            @endforeach
                        </div>
                    @endif

                    <a href="{{ route('home') }}">Back to Search</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
