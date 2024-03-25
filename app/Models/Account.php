<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Account extends Model
{
    use HasFactory;

    protected $table = "accounts";

    public function contacts(): HasMany {
        return $this->hasMany(Contact::class);
    }

    public function chats(): HasMany {
        return $this->hasMany(Chat::class);
    }

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'password',
        'phone_number',
        'photo',
    ];
}
