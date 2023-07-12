<?php

namespace App\Imports;

use App\Models\DataMarkah;
use App\Models\UserData;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class DataMarkahImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        $skipFirstRow = true;
        
        foreach ($rows as $row) {
            if ($skipFirstRow) {
                $skipFirstRow = false;
                continue;
            }
            $userDataId = UserData::where('no_tentera', $row[1])->value('id');
            
            if ($userDataId) {
                DataMarkah::create([
                    'user_data_id' => $userDataId,
                    'UJIAN_PENDORONG_SENJATA_MARKAH' => $row[5] ?? null,
                    'UJIAN_PENDORONG_SENJATA_GRED' => $row[6] ?? null,
                    'UJIAN_PENDORONG_PERTOLONGAN_CEMAS_MARKAH' => $row[7] ?? null,
                    'UJIAN_PENDORONG_PERTOLONGAN_CEMAS_GRED' => $row[8] ?? null,
                    'UJIAN_PENDORONG_IMP_MARKAH' => $row[9] ?? null,
                    'UJIAN_PENDORONG_IMP_GRED' => $row[10] ?? null,
                    'UJIAN_PENDORONG_BACA_PETA_MARKAH' => $row[11] ?? null,
                    'UJIAN_PENDORONG_BACA_PETA_GRED' => $row[12] ?? null,
                    'UJIAN_PENDORONG_SEMBOYAN_MARKAH' => $row[13] ?? null,
                    'UJIAN_PENDORONG_SEMBOYAN_GRED' => $row[14] ?? null,
                    'PLATUN' => $row[15] ?? null,
                    'SEKSYEN' => $row[16] ?? null,
                    'JANTINA' => $row[17] ?? null,
                    'MEMIMPIN_DAN_MENGAWAL_UJIAN_MUTLAK_1T' => $row[18] ?? null,
                    'MEMBENTUK_KARAKTER_PEMIMPIN_UJIAN_TERMINAL' => $row[19] ?? null,
                    'UJIAN_PAWAI_1' => $row[20] ?? null, 
                    'UJIAN_PAWAI_2' => $row[21] ?? null,
                    'MEMAHAMI_SEJARAH_TENTERA' => $row[22] ?? null,
                    'UJIAN_JASMANI_1' => $row[23] ?? null,
                    'UJIAN_JASMANI_2' => $row[24] ?? null,
                    'UJIAN_JASMANI_3' => $row[25] ?? null,
                    'MELAKSANA_KEMAHIRAN_ASAS_KETENTERAAN_UJIAN_MUTLAK_2T' => $row[26] ?? null,
                    'MENGAPLIKASI_TAKTIK_ASAS_UJIAN_TERMINAL_2T1' => $row[27] ?? null,
                    'MENGAPLIKASI_PENGURUSAN_KETENTERAAN_UJIAN_TERMINAL_2T2' => $row[28] ?? null,
                    'MENGAPLIKASI_TAKTIK_ASAS_UJIAN_PENDORONG' => $row[29] ?? null,
                    'MENGAPLIKASI_PENGURUSAN_KETENTERAAN_UJIAN_PENDORONG' => $row[30] ?? null,
                    'TEWT_CW_DEF' => $row[31] ?? null,
                    'TEWT_CW_OFF' => $row[32] ?? null,
                    'LATIHAN_AKHIR_CW' => $row[33] ?? null,
                    'LATIHAN_AKHIR_CIW' => $row[34] ?? null,
                    'UJIAN_PENGENDALIAN_SENJATA' => $row[35] ?? null,
                    'UJIAN_AMALI_BACA_PETA_DAN_PANDU_ARAH_1' => $row[36] ?? null,
                    'UJIAN_PANDU_ARAH_2' => $row[37] ?? null,
                    'UJIAN_AMALI_SEMBOYAN' => $row[38] ?? null,
                    'UJIAN_AMALI_IMP' => $row[39] ?? null,
                    'SIKAP_KEPIMPINAN' => $row[40] ?? null,
                    'BIL_LAPOR_SAKIT_JUN' => $row[41] ?? null,
                    'BIL_ATTEND_C' => $row[42] ?? null,
                    'BIL_ATTEND_B' => $row[43] ?? null, 
                ]);
            }
        }
    }
}
