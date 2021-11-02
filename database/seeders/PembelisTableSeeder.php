<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = [
            ['nama_barang' => 'baju',
                'jk' => 'perempuan',
                'alamat' => 'cilebak',
                'kode_pos' => 22,
                'kota' => 'bandung',
                'tgl_lahir' => '2003-11-01',
            ],

        ];

        DB::table('pembelis')->insert($pembeli);

    }
}
