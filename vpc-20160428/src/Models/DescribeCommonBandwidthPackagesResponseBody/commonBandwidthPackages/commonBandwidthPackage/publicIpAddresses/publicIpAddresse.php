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
    public $commonBandwidthPackageIpBandwidth;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $ipInstanceId;

    /**
     * @var string
     */
    public $ipType;
    protected $_name = [
        'allocationId' => 'AllocationId',
        'bandwidthPackageIpRelationStatus' => 'BandwidthPackageIpRelationStatus',
        'commonBandwidthPackageIpBandwidth' => 'CommonBandwidthPackageIpBandwidth',
        'ipAddress' => 'IpAddress',
        'ipInstanceId' => 'IpInstanceId',
        'ipType' => 'IpType',
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

        if (null !== $this->commonBandwidthPackageIpBandwidth) {
            $res['CommonBandwidthPackageIpBandwidth'] = $this->commonBandwidthPackageIpBandwidth;
        }

        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }

        if (null !== $this->ipInstanceId) {
            $res['IpInstanceId'] = $this->ipInstanceId;
        }

        if (null !== $this->ipType) {
            $res['IpType'] = $this->ipType;
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

        if (isset($map['CommonBandwidthPackageIpBandwidth'])) {
            $model->commonBandwidthPackageIpBandwidth = $map['CommonBandwidthPackageIpBandwidth'];
        }

        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }

        if (isset($map['IpInstanceId'])) {
            $model->ipInstanceId = $map['IpInstanceId'];
        }

        if (isset($map['IpType'])) {
            $model->ipType = $map['IpType'];
        }

        return $model;
    }
}
