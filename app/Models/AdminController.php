<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdminController extends Model
{
    use HasFactory;

    public function Department()
    {
        return $this->belongsTo(Department::class, 'department');
    }
}
