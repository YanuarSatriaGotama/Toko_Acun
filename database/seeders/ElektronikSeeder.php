<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ElektronikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $elektronik = [
            [
                'id' => '1',
                'nama_barang' => 'Kipas Miyako',
                'harga' => '20000',
                'jenis' => 'Kipas',
            ],
            [
                'id' => '2',
                'nama_barang' => 'Kulkas Toshiba',
                'harga' => '200000',
                'jenis' => 'Kulkas',
            ],
            [
                'id' => '3',
                'nama_barang' => 'Lampu Philip',
                'harga' => '12000',
                'jenis' => 'Lampu',
            ],
            [
                'id' => '4',
                'nama_barang' => 'Ac Changhong',
                'harga' => '300000',
                'jenis' => 'Ac',
            ],
            [
                'id' => '5',
                'nama_barang' => 'Lampu Shukaku',
                'harga' => '24000',
                'jenis' => 'Lampu',
            ]
            ];
            foreach($elektronik as $el) {
                \App\Models\elektronik::firstOrCreate($el);
            }
    }
}
