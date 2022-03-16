<?php
namespace App\Repositories\Impl;

use App\Models\Customer;
use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\CustomerRepository;

class CustomerRepositoryImpl extends EloquentRepository  implements CustomerRepository
{
    /**
     * get Model
     * @return string
     */
    public function getModel()
    {
        $model = Customer::class;
        return $model;
    }
    
}