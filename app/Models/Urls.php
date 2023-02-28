<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Urls extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'urlname', 'shorturl'
    ];
    protected $hidden = [
        'remember_token',
    ];

    public static function create()
    {

    }
}
