<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = "employees";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'first_name',
        'last_name',
        'date_birth',
        'phone_number',
        'email',
        'province',
        'city',
        'address',
        'zip_code',
        'ktp',
        'position',
        'bank'
    ];
}
