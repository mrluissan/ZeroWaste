<?php

use Illuminate\Database\Seeder;
use App\Inventory;
use App\FoodType;
use App\Food;

class InventoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $food = function () {
            return factory(App\Food::class, 50)
                ->create()
                ->each(function ($food) {
                    $food->types()->attach(
                        FoodType::inRandomOrder()->limit(rand(1, 3))->get()
                    );
                });
        };

        factory(Inventory::class, 10)
            ->create()
            ->each(function ($inventory) use ($food) {
                factory(App\Food::class, 50)->create(['inventory_id' => $inventory->id]);
            });
    }
}
