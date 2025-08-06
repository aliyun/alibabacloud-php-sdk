<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthPackagesResponseBody\bandwidthPackages\bandwidthPackage\publicIpAddresses;

use AlibabaCloud\Dara\Model;

class publicIpAddresse extends Model
{
    /**
     * @var string
     */
    public $allocationId;

    /**
     * @var string
     */
    public $ipAddress;
    protected $_name = [
        'allocationId' => 'AllocationId',
        'ipAddress' => 'IpAddress',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
