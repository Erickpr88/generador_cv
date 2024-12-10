<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInformation extends Model
{
    protected $table = "contact_information";
    use HasFactory;
    protected $fillable = [
        "phone_number"
    ];
}
