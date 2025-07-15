<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGlobalAccelerationInstancesResponseBody\globalAccelerationInstances\globalAccelerationInstance\publicIpAddresses;

use AlibabaCloud\Tea\Model;

class publicIpAddress extends Model
{
    /**
     * @description The ID of the public IP address of the GA instance.
     *
     * @example eip-bp19yqraac4w3y0jd****
     *
     * @var string
     */
    public $allocationId;

    /**
     * @description The public IP address of the GA instance.
     *
     * @example 12.xx.xx.78
     *
     * @var string
     */
    public $ipAddress;
    protected $_name = [
        'allocationId' => 'AllocationId',
        'ipAddress' => 'IpAddress',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
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
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }

        return $model;
    }
}
