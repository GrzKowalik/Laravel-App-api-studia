<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\People;

class peopleseeder extends Seeder
{
  public function run(): void{People::factory()->count(200)->create();}
}
