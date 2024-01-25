<?php

namespace App\Method;

use Asciisd\Zoho\Zohoable;
use Asciisd\Zoho\ZohoManager;
use com\zoho\crm\api\util\Model;

// use Illuminate\Database\Eloquent\Model;

class Invoice extends Zohoable implements Model
{
    // this is your Zoho module API Name
    protected $zoho_module_name = 'Payments';

    public function searchCriteria()
    {
        // you should return string of criteria that you want to find current record in crm with.
        //EX:
        return ZohoManager::make('Payments')
            ->where('PaymentID', $this->payment_id)
            ->andWhere('Order_ID', $this->order_id)
            ->getCriteria();
    }

    public function zohoMandatoryFields()
    {
        // you should return array of mandatory fields to create module from this model
        // EX:
        return ['Base_Currency' => $this->currency];
    }

    public function getZohoModule(): string
    {
        return 'Invoices'; // Replace with the actual Zoho module name
    }

}
