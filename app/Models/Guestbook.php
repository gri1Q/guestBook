<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guestbook extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'feedback'];

        public function getTitleAttribute($value)
    {
        return ucfirst($value);
    }
    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => mb_strtoupper($value),
//            set: fn (string $value) => strtolower($value),
        );
    }
    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => date('H:i:s d.m.Y',strtotime($value)),
        );
    }

}
