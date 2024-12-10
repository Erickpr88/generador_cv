<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    use HasFactory;
    protected $table = "personal_information";

    protected $fillable = [
        "first_name",
        "last_name",
        "profile_title",
        "about_me",
    ];
}
