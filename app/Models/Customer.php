<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table= 'customers';
    /**
     * The attributes that are mass assignable.
     *
     * @var array string
     */

    protected $fillable = [
        'first_name',
        'last_name'
    ];
}
