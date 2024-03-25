<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chat extends Model
{
    use HasFactory;

    protected $table = "chats";

    public function account(): BelongsTo {
        return $this->belongsTo(Account::class);
    }

    public function contact(): BelongsTo {
        return $this->belongsTo(Contact::class);
    }

    protected $fillable = [
        'account_id',
        'contact_id',
        'message',
        'date',
        'seen',
    ];
}
