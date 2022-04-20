<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tasks extends Model
{
    protected $table='tasks';
    use HasFactory;
    protected $fillable=['name','tool','task_id'];

        public function user(): BelongsTo
        {
            return $this->belongsTo(User::class);
        }


}
