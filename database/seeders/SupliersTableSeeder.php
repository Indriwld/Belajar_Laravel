<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SupliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier = [
            ['nama' => 'baju',
                'alamat' => 'cilebak',
                'kode_pos' => 22,
                'kota' => 'bandung',
            ],

        ];

        DB::table('supliers')->insert($suplier);

    }
}
