<?php

namespace App\Models;

use Asciisd\Zoho\Models\Zohoable;
use Asciisd\Zoho\ZohoManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Zohoable
{
    use HasFactory;

    protected $zoho_module_name = 'Payments';

    public function searchCriteria()
    {
        // you should return string of criteria that you want to find current record in crm with.
        //EX:
        return ZohoManager::make('Payments')
            ->where('payment_id', $this->payment_id)
            ->andWhere('order_id', $this->order_id)
            ->getCriteria();
    }

    public function zohoMandatoryFields()
    {
        // you should return array of mandatory fields to create module from this model
        // EX:
        return ['Base_Currency' => $this->currency];
    }
}
