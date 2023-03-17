<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\SoftDeletes;

class DogModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'dogs';

    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];
}
