<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = ['kategori_id', 'judul', 'isi'];
    public $timestamp = true;

    public function kategori(){
		return $this->belongsTo('App\Kategori', 'kategori_id');
	}
}
