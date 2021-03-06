<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
class Post extends Model
{
    use HasFactory,SoftDeletes;
    protected  $attributes=[
        'user_id'=>1
    ];

    protected  $fillable=['name','description','user_id','slug'];
}
