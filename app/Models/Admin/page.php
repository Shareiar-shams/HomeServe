<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug','content'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
