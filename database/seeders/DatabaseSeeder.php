<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('teams')->insert([
            'name'          =>  'Peggy Alford',
            'position'       =>  'Founder, Chairman and Chief Executive Officer',
            'image'         =>  'assets/img/team/team-1.jpg',
            'bio'          =>  ' Proin tempus facilisis sem, sit amet congue ligula cursus sit amet. Quisque et auctor massa. Suspendisse at sapien sit amet ante tristique pharetra. Nunc id aliquam urna. Integer sit amet ligula at massa cursus mattis eu eget nibh. Donec id nunc in tellus finibus porttitor vel vel mauris. Sed tempus libero in dui dictum, id condimentum nulla pellentesque. Morbi ante nisl, blandit ut est imperdiet, congue tincidunt metus.'
        ]);

        DB::table('teams')->insert([
            'name'          =>  'Marc L. Andreessen',
            'position'       =>  'Chief Operating Officer',
            'image'         =>  'assets/img/team/team-2.jpg',
            'bio'          =>  ' Vivamus hendrerit massa sit amet cursus rhoncus. Donec malesuada massa in purus mollis, vitae blandit velit semper. Etiam euismod pellentesque lorem, sit amet maximus dui vehicula vitae. Duis non scelerisque mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam commodo nibh nulla, non facilisis nisl viverra et. Vestibulum ultricies gravida purus, et sodales ante viverra mattis. Ut bibendum sem leo, non placerat mi laoreet ut. Integer dolor urna, rhoncus eget risus nec, efficitur condimentum tellus. In fringilla vitae lorem ut scelerisque. Fusce at pulvinar ligula. Nulla non arcu justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam luctus, diam quis scelerisque efficitur, nunc odio faucibus mauris, in dictum tellus nulla ut mauris. Aliquam ultricies sed nisi non aliquet. Maecenas in odio in augue eleifend lobortis id sit amet elit.'
        ]);

        DB::table('teams')->insert([
            'name'          =>  'Andrew W. Houston',
            'position'       =>  'President, Global Affairs',
            'image'         =>  'assets/img/team/team-3.jpg',
            'bio'          =>  'Pellentesque sollicitudin nunc porta nibh mollis posuere. In laoreet magna quis libero dignissim, sit amet fermentum dui gravida. Sed laoreet consectetur mi eget posuere. Fusce dictum rutrum pharetra. Sed dictum ligula in venenatis aliquet. Sed dignissim egestas turpis, ut sodales orci suscipit non. Ut id leo at quam suscipit facilisis. Sed non ipsum vel ex maximus eleifend. Donec suscipit velit non leo commodo, vitae vulputate mauris faucibus. In et congue massa.'
        ]);

        DB::table('teams')->insert([
            'name'          =>  'Mitch Saguni',
            'position'       =>  'Chief Technology Officer',
            'image'         =>  'assets/img/team/team-4.jpg',
            'bio'          =>  ' Vivamus hendrerit massa sit amet cursus rhoncus. Donec malesuada massa in purus mollis, vitae blandit velit semper. Etiam euismod pellentesque lorem, sit amet maximus dui vehicula vitae. Duis non scelerisque mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam commodo nibh nulla, non facilisis nisl viverra et. Vestibulum ultricies gravida purus, et sodales ante viverra mattis. Ut bibendum sem leo, non placerat mi laoreet ut. Integer dolor urna, rhoncus eget risus nec, efficitur condimentum tellus. In fringilla vitae lorem ut scelerisque. Fusce at pulvinar ligula. Nulla non arcu justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam luctus, diam quis scelerisque efficitur, nunc odio faucibus mauris, in dictum tellus nulla ut mauris. Aliquam ultricies sed nisi non aliquet. Maecenas in odio in augue eleifend lobortis id sit amet elit.'
        ]);
    }
}
