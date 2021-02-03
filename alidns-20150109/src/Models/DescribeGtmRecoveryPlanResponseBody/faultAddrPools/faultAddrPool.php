<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanResponseBody\faultAddrPools;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanResponseBody\faultAddrPools\faultAddrPool\addrs;
use AlibabaCloud\Tea\Model;

class faultAddrPool extends Model
{
    /**
     * @var addrs
     */
    public $addrs;

    /**
     * @var string
     */
    public $addrPoolId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $addrPoolName;
    protected $_name = [
        'addrs'        => 'Addrs',
        'addrPoolId'   => 'AddrPoolId',
        'instanceId'   => 'InstanceId',
        'addrPoolName' => 'AddrPoolName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addrs) {
            $res['Addrs'] = null !== $this->addrs ? $this->addrs->toMap() : null;
        }
        if (null !== $this->addrPoolId) {
            $res['AddrPoolId'] = $this->addrPoolId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->addrPoolName) {
            $res['AddrPoolName'] = $this->addrPoolName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faultAddrPool
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Addrs'])) {
            $model->addrs = addrs::fromMap($map['Addrs']);
        }
        if (isset($map['AddrPoolId'])) {
            $model->addrPoolId = $map['AddrPoolId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AddrPoolName'])) {
            $model->addrPoolName = $map['AddrPoolName'];
        }

        return $model;
    }
}
