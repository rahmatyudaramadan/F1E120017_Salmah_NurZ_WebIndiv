<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
protected $guarded = ['id', 'nama','created_at','upadated_at'];
public function kategori()
{
return $this->hasOne('App\kategori', 'id', 'id_kategori');
}
}
