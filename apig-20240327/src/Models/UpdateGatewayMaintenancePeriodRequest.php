<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\UpdateGatewayMaintenancePeriodRequest\maintenancePeriod;

class UpdateGatewayMaintenancePeriodRequest extends Model
{
    /**
     * @var maintenancePeriod
     */
    public $maintenancePeriod;
    protected $_name = [
        'maintenancePeriod' => 'maintenancePeriod',
    ];

    public function validate()
    {
        if (null !== $this->maintenancePeriod) {
            $this->maintenancePeriod->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maintenancePeriod) {
            $res['maintenancePeriod'] = null !== $this->maintenancePeriod ? $this->maintenancePeriod->toArray($noStream) : $this->maintenancePeriod;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['maintenancePeriod'])) {
            $model->maintenancePeriod = maintenancePeriod::fromMap($map['maintenancePeriod']);
        }

        return $model;
    }
}
