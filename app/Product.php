<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';
    protected $primaryKey='id';
    public  $timestamps = false;
    protected $fillable=array('id','nama_barang','deskripsi','harga','stok','berat','gambar','gambar2');

    
}
