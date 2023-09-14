<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesan extends Model
{
    use HasFactory;

    protected $table = 'pesans';
    protected $fillable = ['mobil_id','tanggal_mulai','tanggal_selesai',
    'jumlahhari','totalharga','status'];

    public function mobil(){
    	return $this->belongsTo(mobil::class,'mobil_id','id');
	}
}
