<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name_customer', 'phone_customer', 'address_customer', 'email_customer', 'city_customer'
    ];
    protected $primaryKey = 'id_customer';
    protected $table = 'customer';
}
