<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanAvailableConfigResponseBody\instances;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanAvailableConfigResponseBody\instances\instance\addrPools;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @description The list of address pools for the GTM instance.
     *
     * @var addrPools
     */
    public $addrPools;

    /**
     * @description The ID of the GTM instance.
     *
     * @example instance-example
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the GTM instance.
     *
     * @example instance-name-example
     *
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'addrPools'    => 'AddrPools',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addrPools) {
            $res['AddrPools'] = null !== $this->addrPools ? $this->addrPools->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
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
