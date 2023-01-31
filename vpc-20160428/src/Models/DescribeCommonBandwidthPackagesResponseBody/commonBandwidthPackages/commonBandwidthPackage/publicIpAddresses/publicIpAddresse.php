<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCommonBandwidthPackagesResponseBody\commonBandwidthPackages\commonBandwidthPackage\publicIpAddresses;

use AlibabaCloud\Tea\Model;

class publicIpAddresse extends Model
{
    /**
     * @example eip-bp13e9i2qst4g6jzi****
     *
     * @var string
     */
    public $allocationId;

    /**
     * @example BINDED
     *
     * @var string
     */
    public $bandwidthPackageIpRelationStatus;

    /**
     * @example 47.95.XX.XX
     *
     * @var string
     */
    public $ipAddress;
    protected $_name = [
        'allocationId'                     => 'AllocationId',
        'bandwidthPackageIpRelationStatus' => 'BandwidthPackageIpRelationStatus',
        'ipAddress'                        => 'IpAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }
        if (null !== $this->bandwidthPackageIpRelationStatus) {
            $res['BandwidthPackageIpRelationStatus'] = $this->bandwidthPackageIpRelationStatus;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publicIpAddresse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['BandwidthPackageIpRelationStatus'])) {
            $model->bandwidthPackageIpRelationStatus = $map['BandwidthPackageIpRelationStatus'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }

        return $model;
    }
}
