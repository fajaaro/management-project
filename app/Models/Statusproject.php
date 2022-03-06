<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statusproject extends Model
{
    use HasFactory;
    protected $table = 'm_status_project';
    protected $primaryKey = 'id_status_project';
    protected $fillable = [
        'status_project',
    ];
}
