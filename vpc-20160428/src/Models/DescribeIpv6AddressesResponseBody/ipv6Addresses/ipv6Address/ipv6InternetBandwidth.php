<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6AddressesResponseBody\ipv6Addresses\ipv6Address;

use AlibabaCloud\Tea\Model;

class ipv6InternetBandwidth extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var string
     */
    public $ipv6InternetBandwidthId;

    /**
     * @var string
     */
    public $instanceChargeType;
    protected $_name = [
        'bandwidth'               => 'Bandwidth',
        'internetChargeType'      => 'InternetChargeType',
        'businessStatus'          => 'BusinessStatus',
        'ipv6InternetBandwidthId' => 'Ipv6InternetBandwidthId',
        'instanceChargeType'      => 'InstanceChargeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->ipv6InternetBandwidthId) {
            $res['Ipv6InternetBandwidthId'] = $this->ipv6InternetBandwidthId;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6InternetBandwidth
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['Ipv6InternetBandwidthId'])) {
            $model->ipv6InternetBandwidthId = $map['Ipv6InternetBandwidthId'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }

        return $model;
    }
}
