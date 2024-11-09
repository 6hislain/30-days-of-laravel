<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return  [
            [
                "id" => 1,
                "title" => 'Teacher',
                "salary" => '40,000'
            ],
            [
                "id" => 2,
                "title" => 'Preacher',
                "salary" => '60,000'
            ],
        ];
    }

    public static function find(int $id): array|null
    {
        return Arr::first(static::all(), fn($job) => $job['id'] == $id);
    }
}
