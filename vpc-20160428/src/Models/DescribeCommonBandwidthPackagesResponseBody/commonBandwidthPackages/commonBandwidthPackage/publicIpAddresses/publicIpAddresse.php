<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCommonBandwidthPackagesResponseBody\commonBandwidthPackages\commonBandwidthPackage\publicIpAddresses;

use AlibabaCloud\Tea\Model;

class publicIpAddresse extends Model
{
    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $allocationId;

    /**
     * @var string
     */
    public $bandwidthPackageIpRelationStatus;
    protected $_name = [
        'ipAddress'                        => 'IpAddress',
        'allocationId'                     => 'AllocationId',
        'bandwidthPackageIpRelationStatus' => 'BandwidthPackageIpRelationStatus',
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
        if (null !== $this->bandwidthPackageIpRelationStatus) {
            $res['BandwidthPackageIpRelationStatus'] = $this->bandwidthPackageIpRelationStatus;
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
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['BandwidthPackageIpRelationStatus'])) {
            $model->bandwidthPackageIpRelationStatus = $map['BandwidthPackageIpRelationStatus'];
        }

        return $model;
    }
}
