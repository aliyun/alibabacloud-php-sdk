<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanAvailableConfigResponseBody\instances;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanAvailableConfigResponseBody\instances\instance\addrPools;

class instance extends Model
{
    /**
     * @var addrPools
     */
    public $addrPools;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'addrPools' => 'AddrPools',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
    ];

    public function validate()
    {
        if (null !== $this->addrPools) {
            $this->addrPools->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addrPools) {
            $res['AddrPools'] = null !== $this->addrPools ? $this->addrPools->toArray($noStream) : $this->addrPools;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
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
        if (isset($map['AddrPools'])) {
            $model->addrPools = addrPools::fromMap($map['AddrPools']);
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        return $model;
    }
}
