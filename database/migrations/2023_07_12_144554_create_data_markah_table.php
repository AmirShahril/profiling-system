<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_markah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_data_id');
            $table->string('UJIAN_PENDORONG_SENJATA_MARKAH');
            $table->string('UJIAN_PENDORONG_SENJATA_GRED');
            $table->string('UJIAN_PENDORONG_PERTOLONGAN_CEMAS_MARKAH');
            $table->string('UJIAN_PENDORONG_PERTOLONGAN_CEMAS_GRED');
            $table->string('UJIAN_PENDORONG_IMP_MARKAH');
            $table->string('UJIAN_PENDORONG_IMP_GRED');
            $table->string('UJIAN_PENDORONG_BACA_PETA_MARKAH');
            $table->string('UJIAN_PENDORONG_BACA_PETA_GRED');
            $table->string('UJIAN_PENDORONG_SEMBOYAN_MARKAH');
            $table->string('UJIAN_PENDORONG_SEMBOYAN_GRED');
            $table->integer('PLATUN');
            $table->integer('SEKSYEN');
            $table->string('JANTINA');
            $table->string('MEMIMPIN_DAN_MENGAWAL_UJIAN_MUTLAK_1T');
            $table->string('MEMBENTUK_KARAKTER_PEMIMPIN_UJIAN_TERMINAL');
            $table->string('UJIAN_PAWAI_1');
            $table->string('UJIAN_PAWAI_2');
            $table->string('MEMAHAMI_SEJARAH_TENTERA');
            $table->string('UJIAN_JASMANI_1');
            $table->string('UJIAN_JASMANI_2');
            $table->string('UJIAN_JASMANI_3');
            $table->string('MELAKSANA_KEMAHIRAN_ASAS_KETENTERAAN_UJIAN_MUTLAK_2T');
            $table->string('MENGAPLIKASI_TAKTIK_ASAS_UJIAN_TERMINAL_2T1');
            $table->string('MENGAPLIKASI_PENGURUSAN_KETENTERAAN_UJIAN_TERMINAL_2T2');
            $table->string('MENGAPLIKASI_TAKTIK_ASAS_UJIAN_PENDORONG');
            $table->string('MENGAPLIKASI_PENGURUSAN_KETENTERAAN_UJIAN_PENDORONG');
            $table->string('TEWT_CW_DEF');
            $table->string('TEWT_CW_OFF');
            $table->string('LATIHAN_AKHIR_CW');
            $table->string('LATIHAN_AKHIR_CIW');
            $table->string('UJIAN_PENGENDALIAN_SENJATA');
            $table->string('UJIAN_AMALI_BACA_PETA_DAN_PANDU_ARAH_1');
            $table->string('UJIAN_PANDU_ARAH_2');
            $table->string('UJIAN_AMALI_SEMBOYAN');
            $table->string('UJIAN_AMALI_IMP');
            $table->string('SIKAP_KEPIMPINAN');
            $table->string('BIL_LAPOR_SAKIT_JUN');
            $table->string('BIL_ATTEND_C');
            $table->string('BIL_ATTEND_B');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_markah');
    }
};
