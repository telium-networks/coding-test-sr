<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Loja;
use Faker\Generator as Faker;

$factory->define(Loja::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'senha' => bcrypt($faker->name . '@123#'),
        'base_dados_nome' => strtolower( preg_replace('/^(.).*?([^ ]+)$/', '$1$2_', $faker->name) . Carbon\Carbon::now()->timestamp),
        'ativo' => 1,
        'remember_token' => Str::random(10),
    ];
});
