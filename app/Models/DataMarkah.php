<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMarkah extends Model
{
    use HasFactory;

    protected $table = 'data_markah';

    protected $fillable = [
        'user_data_id',
        'UJIAN_PENDORONG_SENJATA_MARKAH',
        'UJIAN_PENDORONG_SENJATA_GRED',
        'UJIAN_PENDORONG_PERTOLONGAN_CEMAS_MARKAH',
        'UJIAN_PENDORONG_PERTOLONGAN_CEMAS_GRED',
        'UJIAN_PENDORONG_IMP_MARKAH',
        'UJIAN_PENDORONG_IMP_GRED',
        'UJIAN_PENDORONG_BACA_PETA_MARKAH',
        'UJIAN_PENDORONG_BACA_PETA_GRED',
        'UJIAN_PENDORONG_SEMBOYAN_MARKAH',
        'UJIAN_PENDORONG_SEMBOYAN_GRED',
        'PLATUN',
        'SEKSYEN',
        'JANTINA',
        'MEMIMPIN_DAN_MENGAWAL_UJIAN_MUTLAK_1T',
        'MEMBENTUK_KARAKTER_PEMIMPIN_UJIAN_TERMINAL',
        'UJIAN_PAWAI_1',
        'UJIAN_PAWAI_2',
        'MEMAHAMI_SEJARAH_TENTERA',
        'UJIAN_JASMANI_1',
        'UJIAN_JASMANI_2',
        'UJIAN_JASMANI_3',
        'MELAKSANA_KEMAHIRAN_ASAS_KETENTERAAN_UJIAN_MUTLAK_2T',
        'MENGAPLIKASI_TAKTIK_ASAS_UJIAN_TERMINAL_2T1',
        'MENGAPLIKASI_PENGURUSAN_KETENTERAAN_UJIAN_TERMINAL_2T2',
        'MENGAPLIKASI_TAKTIK_ASAS_UJIAN_PENDORONG',
        'MENGAPLIKASI_PENGURUSAN_KETENTERAAN_UJIAN_PENDORONG',
        'TEWT_CW_DEF',
        'TEWT_CW_OFF',
        'LATIHAN_AKHIR_CW',
        'LATIHAN_AKHIR_CIW',
        'UJIAN_PENGENDALIAN_SENJATA',
        'UJIAN_AMALI_BACA_PETA_DAN_PANDU_ARAH_1',
        'UJIAN_PANDU_ARAH_2',
        'UJIAN_AMALI_SEMBOYAN',
        'UJIAN_AMALI_IMP',
        'SIKAP_KEPIMPINAN',
        'BIL_LAPOR_SAKIT_JUN',
        'BIL_ATTEND_C',
        'BIL_ATTEND_B', 
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_data_id');
    }
}
