<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGlobalAccelerationInstancesResponseBody\globalAccelerationInstances\globalAccelerationInstance\publicIpAddresses;

use AlibabaCloud\Tea\Model;

class publicIpAddress extends Model
{
    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $allocationId;
    protected $_name = [
        'ipAddress'    => 'IpAddress',
        'allocationId' => 'AllocationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publicIpAddress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }

        return $model;
    }
}
