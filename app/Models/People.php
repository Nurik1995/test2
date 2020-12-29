<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = "people";
    protected $primaryKey = 'p_id';
    protected $guarded = [];

    public $timestamps = null;
    protected $fillable = [
        'p_id',
        'p_name',
    ];
}
