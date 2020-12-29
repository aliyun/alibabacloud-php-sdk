<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanAvailableConfigResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanAvailableConfigResponseBody\instances\addrPools;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var addrPools[]
     */
    public $addrPools;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'addrPools'    => 'AddrPools',
        'instanceName' => 'InstanceName',
        'instanceId'   => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addrPools) {
            $res['AddrPools'] = [];
            if (null !== $this->addrPools && \is_array($this->addrPools)) {
                $n = 0;
                foreach ($this->addrPools as $item) {
                    $res['AddrPools'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddrPools'])) {
            if (!empty($map['AddrPools'])) {
                $model->addrPools = [];
                $n                = 0;
                foreach ($map['AddrPools'] as $item) {
                    $model->addrPools[$n++] = null !== $item ? addrPools::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
