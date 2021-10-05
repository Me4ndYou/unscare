<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaimCovid extends Model
{
    use HasFactory;

    protected $table = 'claim_covid';

    protected $guarded = [];

    public function scopeMhsaktif($query,$id){
        return $query->where('id_user',$id)->get();
    }
}
