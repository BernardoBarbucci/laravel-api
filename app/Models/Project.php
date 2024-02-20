<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // fillable
    protected $fillable = [
        'title',
        'description',
        'length',
        'duration',
        'image',
        'color'
    ];

    // primary key per destroy
    protected $primaryKey = 'id';

    // relazione many-to-many con il modello technology
    public function technologies()
    {
        return $this->belongsToMany(Technology::class);
    }
}
