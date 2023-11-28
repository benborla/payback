<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    public function getArchivedAttribute(): bool
    {
        return $this->archived || $this->envelope->archived;
    }

    public function envelope()
    {
        return $this->belongsTo(Envelope::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}