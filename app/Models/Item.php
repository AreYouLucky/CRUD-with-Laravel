<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'item_id';
    protected $table = 'items';

    protected $fillable = [
        'name',
        'cost',
        'description'

    ];
}
