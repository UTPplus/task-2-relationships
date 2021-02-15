<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = ['country_name'];

    /**
     * Get the company associated with the Country
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function company()
    {
        return $this->hasOne(Company::class, 'country_id', 'id');
    }

    public function users()
    {
        return $this->hasManyThrough(User::class, Company::class);
    }

    

    

} 
