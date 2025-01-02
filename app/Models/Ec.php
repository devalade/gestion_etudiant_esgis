<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EC extends Model
{
    protected $table = 'ecs';
    protected $fillable = ['code', 'nom', 'coefficient', 'ue_id'];

    public function ue()
    {
        return $this->belongsTo(UE::class, 'ue_id');
    }
}

