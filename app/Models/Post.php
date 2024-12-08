<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class Post extends Model{
    public function run(){
        $faker = Faker::create();
    }
}
