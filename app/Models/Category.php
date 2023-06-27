<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // protected $fillable = ['name', 'image', 'description'];

    // public function menus()
    // {
    //     return $this->belongsToMany(Menu::class);
        //return $this->belongsToMany(Menu::class, 'category_menu');
        protected $fillable = ['name', 'image', 'description'];

        public function menus()
        {
            return $this->belongsToMany(Menu::class, 'category_menu');
        }

    }

    // public function blogs(){
    //     return $this->hasMany(Blog::class);
    // }
// }

