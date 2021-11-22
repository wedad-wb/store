<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['name','category_id','price','quantity','description','image'];
    /**
     * @var mixed
     */
    private $image;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orders()
    {
       return $this->belongsToMany(User::class,'orders');

    }

}
