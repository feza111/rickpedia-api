<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    /**
     * @var mixed
     */

    public function episode() {
        return $this->belongsTo(Episode::class);
    }
}
