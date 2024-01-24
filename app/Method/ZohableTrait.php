<?php

namespace App\Method;

use Asciisd\Zoho\ZohoManager;

trait ZohableTrait
{
    public function zohoCreate(array $data)
    {
        $module = ZohoManager::useModule($this->getZohoModule());
        return $module->create($data);
    }

    // Add other Zoho-related methods as needed
}
