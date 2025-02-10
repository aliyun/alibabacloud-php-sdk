<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCommonBandwidthPackagesResponseBody\commonBandwidthPackages\commonBandwidthPackage\publicIpAddresses;

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
    public $bandwidthPackageIpRelationStatus;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (isset($map['BandwidthPackageIpRelationStatus'])) {
            $model->bandwidthPackageIpRelationStatus = $map['BandwidthPackageIpRelationStatus'];
        }

        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }

        return $model;
    }
}
