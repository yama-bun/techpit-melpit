<?php

use Illuminate\Database\Seeder;
use App\Models\SecondaryCategory;

class SecondaryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SecondaryCategory::class)->create([
            'id' => 1,
            'name' => 'トップス',
            'sort_no' => 1,
            'Primary_category_id' => 1,
        ]);
        factory(SecondaryCategory::class)->create([
            'id' => 2,
            'name' => 'ジャケット/アウター',
            'sort_no' => 2,
            'Primary_category_id' => 1,
        ]);
        factory(SecondaryCategory::class)->create([
            'id' => 3,
            'name' => 'パンツ',
            'sort_no' => 3,
            'Primary_category_id' => 1,
        ]);
        factory(SecondaryCategory::class)->create([
            'id' => 4,
            'name' => 'トップス',
            'sort_no' => 4,
            'Primary_category_id' => 2,
        ]);
        factory(SecondaryCategory::class)->create([
            'id' => 5,
            'name' => 'ジャケット/アウター',
            'sort_no' => 5,
            'Primary_category_id' => 2,
        ]);
        factory(SecondaryCategory::class)->create([
            'id' => 6,
            'name' => '靴',
            'sort_no' => 6,
            'Primary_category_id' => 2,
        ]);
        factory(SecondaryCategory::class)->create([
            'id' => 7,
            'name' => 'ベビー服(男の子用)',
            'sort_no' => 7,
            'Primary_category_id' => 3,
        ]);
        factory(SecondaryCategory::class)->create([
            'id' => 8,
            'name' => 'ベビー服(女の子用)',
            'sort_no' => 8,
            'Primary_category_id' => 3,
        ]);
        factory(SecondaryCategory::class)->create([
            'id' => 9,
            'name' => 'キッズ服(男の子用)',
            'sort_no' => 9,
            'Primary_category_id' => 3,
        ]);
        factory(SecondaryCategory::class)->create([
            'id' => 10,
            'name' => 'キッズ服(女の子用)',
            'sort_no' => 10,
            'Primary_category_id' => 3,
        ]);
        factory(SecondaryCategory::class)->create([
            'id' => 11,
            'name' => 'その他',
            'sort_no' => 11,
            'Primary_category_id' => 4,
        ]);
    }
}
