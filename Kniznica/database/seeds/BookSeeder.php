<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('books')->insert([
            'nazov'=>"Harry Potter",
            'autor'=>"J.K. Rowling",
            'datum_vydania'=>"1997-06-26",
            'pocet_stran'=>324,
        ]);
    }
}
