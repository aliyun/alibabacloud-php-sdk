<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthPackagesResponseBody\bandwidthPackages;

use AlibabaCloud\Tea\Model;

class publicIpAddresses extends Model
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
     * @return publicIpAddresses
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
