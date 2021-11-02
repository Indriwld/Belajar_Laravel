<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PesanansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [
            ['nama_barang' => 'baju',
                'nama_pelanggan' => 'indri',
                'jumlah' => 2,
                'tgl' => '2021-11-01',
            ],
            ['nama_barang' => 'Kemeja',
                'nama_pelanggan' => 'mee',
                'jumlah' => 5,
                'tgl' => '2021-11-01',
            ],
            ['nama_barang' => 'Sweater',
                'nama_pelanggan' => 'alya',
                'jumlah' => 3,
                'tgl' => '2021-11-01',
            ],
            ['nama_barang' => 'tas',
                'nama_pelanggan' => 'lia',
                'jumlah' => 1,
                'tgl' => '2021-11-01',
            ],
            ['nama_barang' => 'karung',
                'nama_pelanggan' => 'astri',
                'jumlah' => 4,
                'tgl' => '2021-11-01',
            ],
        ];

        DB::table('pesanans')->insert($pesanan);

    }
}
