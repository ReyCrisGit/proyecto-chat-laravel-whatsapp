<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    use HasFactory;

    protected $table = "contacts";

    public function account(): BelongsTo {
        return $this->belongsTo(Account::class);
    }

    public function chat(): BelongsTo {
        return $this->belongsTo(Chat::class);
    }

    protected $fillable = [
        'name',
        'last_name',
        'phone_number',
        'photo',
        'account_id',
    ];
}
