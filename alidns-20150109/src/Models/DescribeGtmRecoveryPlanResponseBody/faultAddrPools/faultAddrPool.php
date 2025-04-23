<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanResponseBody\faultAddrPools;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlanResponseBody\faultAddrPools\faultAddrPool\addrs;

class faultAddrPool extends Model
{
    /**
     * @var string
     */
    public $addrPoolId;

    /**
     * @var string
     */
    public $addrPoolName;

    /**
     * @var addrs
     */
    public $addrs;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'addrPoolId' => 'AddrPoolId',
        'addrPoolName' => 'AddrPoolName',
        'addrs' => 'Addrs',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        if (null !== $this->addrs) {
            $this->addrs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addrPoolId) {
            $res['AddrPoolId'] = $this->addrPoolId;
        }

        if (null !== $this->addrPoolName) {
            $res['AddrPoolName'] = $this->addrPoolName;
        }

        if (null !== $this->addrs) {
            $res['Addrs'] = null !== $this->addrs ? $this->addrs->toArray($noStream) : $this->addrs;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
