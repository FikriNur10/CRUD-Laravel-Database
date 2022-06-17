<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    public $incrementing = false; // to disable auto-incrementing (kalo gak ada ini tipe varcharnya gak muncul)
    protected $table = "product";
    protected $guarded = [];
    // protected $fillable = [
    //     'code_product',
    //     'name_product',
    //     'category_product',
    //     'price_product',
    //     'photo_product'];
    protected $primaryKey = 'code_product'; // to change primary key
    use HasFactory;
}
