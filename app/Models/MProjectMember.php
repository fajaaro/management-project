<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MProjectMember extends Model
{
    use HasFactory;

    protected $table = 'm_project_members';
    protected $primaryKey = 'id';
}
