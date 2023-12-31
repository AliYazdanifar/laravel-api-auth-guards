<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;
class Blog extends Model
{
    use HasFactory;

    public function admin(){
        return $this->belongsTo(Admin::class);
    }
}
