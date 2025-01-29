<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    protected $fillable = [
        'name',
        'image',
        'contact_number',
        'location',
        'island_group',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
}
