<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Society extends Authenticatable
{
    use HasApiTokens;

    protected $table = "societies";

    protected $username = "id_card_number";

    protected $fillable = [
        "name",
        "born_date",
        "gender",
        "address",
        "regional_id"
    ];

    protected $hidden = [
        "created_at",
        "updated_at"
    ];
}
