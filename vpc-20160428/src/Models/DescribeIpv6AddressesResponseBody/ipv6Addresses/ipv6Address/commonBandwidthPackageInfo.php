<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6AddressesResponseBody\ipv6Addresses\ipv6Address;

use AlibabaCloud\Dara\Model;

class commonBandwidthPackageInfo extends Model
{
    /**
     * @var int
     */
    public $bandwidthPackageBandwidth;

    /**
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @var int
     */
    public $commonBandwidthPackageIpBandwidth;
    protected $_name = [
        'bandwidthPackageBandwidth' => 'BandwidthPackageBandwidth',
        'bandwidthPackageId' => 'BandwidthPackageId',
        'commonBandwidthPackageIpBandwidth' => 'CommonBandwidthPackageIpBandwidth',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidthPackageBandwidth) {
            $res['BandwidthPackageBandwidth'] = $this->bandwidthPackageBandwidth;
        }

        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }

        if (null !== $this->commonBandwidthPackageIpBandwidth) {
            $res['CommonBandwidthPackageIpBandwidth'] = $this->commonBandwidthPackageIpBandwidth;
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
        if (isset($map['BandwidthPackageBandwidth'])) {
            $model->bandwidthPackageBandwidth = $map['BandwidthPackageBandwidth'];
        }

        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }

        if (isset($map['CommonBandwidthPackageIpBandwidth'])) {
            $model->commonBandwidthPackageIpBandwidth = $map['CommonBandwidthPackageIpBandwidth'];
        }

        return $model;
    }
}
