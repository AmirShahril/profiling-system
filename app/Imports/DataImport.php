<?php

namespace App\Imports;

use App\Models\UserData;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class DataImport implements ToCollection
{
    private $columnIndex;

    public function __construct(int $columnIndex)
    {
        $this->columnIndex = $columnIndex;
    }

    public function collection(Collection $rows)
    {
        $skipFirstRow = true;

        foreach ($rows as $row) {
            if ($skipFirstRow) {
                $skipFirstRow = false;
                continue;
            }
            
            if (isset($row[$this->columnIndex])) {
                UserData::create([
                    'no_tentera' => $row[1],
                    'pangkat' => $row[2],	
                    'nama' => $row[3],	
                    'kompeni' => $row[4],	
                    'tarikh_lahir' => Date::excelToDateTimeObject($row[5]),	
                    'no_ic_awam' => $row[6],	       
                    'umur' => $row[7],	       
                    'negeri_kelahiran' => $row[8],	
                    'status_perkahwinan' => $row[9],	
                    'jumlah_anak' => $row[10],	
                    'agama' => $row[11],	
                    'bangsa' => $row[12],	
                    'keputusan_SPM' => $row[13],	
                    'kelayakan_akademik_tertinggi' => $row[14],	
                    'bidang_pengajian' => $row[15],	
                    'pusat_pengajian' => $row[16],	
                    'CGPA' => $row[17],	
                    'sukan' => $row[18],	
                    'muzik' => $row[19],	
                    'pekerjaan_sebelum_masuk_tentera' => $row[20],	
                    'bahasa' => $row[21],	
                    'tinggi' => $row[22],	
                    'berat' => $row[23],	
                    'BMI' => $row[24],	
                    'kemahiran_membaca_alquran' => $row[25],	
                    'strength_and_weakness' => $row[26],	
                    'pemilihan_KOR_pilihan_pertama' => $row[27],	
                    'pemilihan_KOR_pilihan_kedua' => $row[28],	
                    'pemilihan_KOR_pilihan_ketiga' => $row[29],	
                    'berminat_menyertai_pasukan_khas' => $row[30],
                ]);

                Markah::create([
                    'tinggi' => $row[22],
                ]);
            }
        }
    }
}
