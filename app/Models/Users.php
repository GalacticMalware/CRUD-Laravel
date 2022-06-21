<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    
    protected $table = "users";

    protected $fillable = [
        "NAME", "LAST_NAME", "LAST_NAME2"
    ];

    protected $hidden = [];
}
