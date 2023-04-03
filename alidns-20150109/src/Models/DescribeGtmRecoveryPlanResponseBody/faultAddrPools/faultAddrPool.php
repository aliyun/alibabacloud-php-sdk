<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanResponseBody\faultAddrPools;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanResponseBody\faultAddrPools\faultAddrPool\addrs;
use AlibabaCloud\Tea\Model;

class faultAddrPool extends Model
{
    /**
     * @description The ID of the address pool.
     *
     * @example hra0oq
     *
     * @var string
     */
    public $addrPoolId;

    /**
     * @description The name of the address pool.
     *
     * @var string
     */
    public $addrPoolName;

    /**
     * @description The list of addresses in the address pool.
     *
     * @var addrs
     */
    public $addrs;

    /**
     * @description The ID of the GTM instance.
     *
     * @example instance-zwy-38
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'addrPoolId'   => 'AddrPoolId',
        'addrPoolName' => 'AddrPoolName',
        'addrs'        => 'Addrs',
        'instanceId'   => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addrPoolId) {
            $res['AddrPoolId'] = $this->addrPoolId;
        }
        if (null !== $this->addrPoolName) {
            $res['AddrPoolName'] = $this->addrPoolName;
        }
        if (null !== $this->addrs) {
            $res['Addrs'] = null !== $this->addrs ? $this->addrs->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['AddrPoolId'])) {
            $model->addrPoolId = $map['AddrPoolId'];
        }
        if (isset($map['AddrPoolName'])) {
            $model->addrPoolName = $map['AddrPoolName'];
        }
        if (isset($map['Addrs'])) {
            $model->addrs = addrs::fromMap($map['Addrs']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
