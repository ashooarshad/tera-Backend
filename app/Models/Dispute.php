<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispute extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'description',
        'host_name',
        'client_name',
        'user_id'
    ];

    protected $table = 'disputes';

}
