<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $b1 = new Book();
        $b1->nb_page=300;
        $b1->name="Harry Potter";
        $b1->isbn="uhdzagsaind";
        $b1->save();

        $b2 = new Book();
        $b2->nb_page=439;
        $b2->name="L'épouvanteur";
        $b2->isbn="bshhduwd";
        $b2->save();

        $b3 = new Book();
        $b3->nb_page=439;
        $b3->name="L'épouvanteur";
        $b3->isbn="e2sdsca";
        $b3->save();

    }
}
