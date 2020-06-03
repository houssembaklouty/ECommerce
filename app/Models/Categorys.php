<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Categorys
 * @package App\Models
 * @version May 9, 2020, 3:39 am UTC
 *
 * @property string $name
 * @property string $description
 */
class Categorys extends Model
{

    public $table = 'categorys';
    



    public $fillable = [
        'name',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
