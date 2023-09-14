<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    use HasFactory;

    protected $table = 'mobils';
    protected $fillable = ['merk','model','platno','tarif','status'];

    public function pesan(){
    	return $this->hasmany('App\pesan');
	}
}
