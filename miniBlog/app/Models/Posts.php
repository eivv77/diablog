<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $id)
 * @method static orderBy(string $string, string $string1)
 */
class Posts extends Model
{
    use HasFactory;

    protected  $table = 'posts';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
