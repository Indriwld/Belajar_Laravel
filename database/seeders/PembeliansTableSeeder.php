<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PembeliansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            ['nama_barang' => 'baju',
                'nama_suplier' => 'indri',
                'jumlah' => 2,
                'tanggal' => '2021-11-01',
            ],
            ['nama_barang' => 'Kemeja',
                'nama_suplier' => 'mee',
                'jumlah' => 5,
                'tanggal' => '2021-11-01',
            ],
            ['nama_barang' => 'Sweater',
                'nama_suplier' => 'alya',
                'jumlah' => 3,
                'tanggal' => '2021-11-01',
            ],
            ['nama_barang' => 'tas',
                'nama_suplier' => 'lia',
                'jumlah' => 1,
                'tanggal' => '2021-11-01',
            ],
            ['nama_barang' => 'karung',
                'nama_suplier' => 'astri',
                'jumlah' => 4,
                'tanggal' => '2021-11-01',
            ],
        ];

        DB::table('pembelians')->insert($pembelian);

    }
}
