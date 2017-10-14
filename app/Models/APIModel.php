<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class APIModel
{
    
    public static function home($row)
    {
        return DB::table('books')->latest('updatetime')->take($row)->get();
    }
    
    public static function book($bhash)
    {
        return DB::table('books')->where('bhash', $bhash)->first();
    }

    public static function chapter($chash)
    {
        return DB::table('chapters')->where('chash', $chash)->first();
    }

    public static function search($name, $skip, $take)
    {
        return DB::table('books')->where('name', 'like', '%' . $name . '%')->latest('updatetime')->skip($skip)->take($take)->get();
    }

    public static function tag($row)
    {
        return DB::table('books')->where('tag', $tag)->latest('updatetime')->take($row)->get();
    }

}
