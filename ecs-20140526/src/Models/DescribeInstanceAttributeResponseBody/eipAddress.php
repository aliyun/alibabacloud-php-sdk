<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class eipAddress extends Model
{
    /**
     * @description The ID of the EIP.
     *
     * @example eip-wz9uilio26dfscamm****
     *
     * @var string
     */
    public $allocationId;

    /**
     * @description The maximum public bandwidth of the EIP. Unit: Mbit/s.
     *
     * @example 8
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The billing method for network usage. Valid values:
     *
     *   PayByBandwidth
     *   PayByTraffic
     *
     * >  When the **pay-by-traffic** billing method is used for network usage, the maximum inbound and outbound bandwidths are used as the upper limits of bandwidths instead of guaranteed performance specifications. In scenarios in which demands exceed resource supplies, the maximum bandwidths may not be reached. If you want guaranteed bandwidths for your instance, use the **pay-by-bandwidth** billing method for network usage.
     * @example PayByTraffic
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The ID of the elastic IP address (EIP).
     *
     * @example 30.21.\*\*.**
     *
     * @var string
     */
    public $ipAddress;
    protected $_name = [
        'allocationId'       => 'AllocationId',
        'bandwidth'          => 'Bandwidth',
        'internetChargeType' => 'InternetChargeType',
        'ipAddress'          => 'IpAddress',
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

        return $model;
    }
}
