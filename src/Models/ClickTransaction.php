<?php

namespace Abram73\Clickuz\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClickTransaction extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','amount','status'];
}
