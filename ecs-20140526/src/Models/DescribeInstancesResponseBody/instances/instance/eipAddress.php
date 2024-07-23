<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Tea\Model;

class eipAddress extends Model
{
    /**
     * @description The ID of the EIP.
     *
     * @example eip-2ze88m67qx5z****
     *
     * @var string
     */
    public $allocationId;

    /**
     * @description The maximum public bandwidth of the EIP. Unit: Mbit/s.
     *
     * @example 5
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The metering method of the EIP. Valid values:
     *
     *   PayByBandwidth
     *   PayByTraffic
     *
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The EIP.
     *
     * @example 42.112.\*\*.**
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description Indicates whether the EIP can be disassociated.
     *
     * @example true
     *
     * @var bool
     */
    public $isSupportUnassociate;
    protected $_name = [
        'allocationId'         => 'AllocationId',
        'bandwidth'            => 'Bandwidth',
        'internetChargeType'   => 'InternetChargeType',
        'ipAddress'            => 'IpAddress',
        'isSupportUnassociate' => 'IsSupportUnassociate',
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
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->isSupportUnassociate) {
            $res['IsSupportUnassociate'] = $this->isSupportUnassociate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eipAddress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['IsSupportUnassociate'])) {
            $model->isSupportUnassociate = $map['IsSupportUnassociate'];
        }

        return $model;
    }
}
