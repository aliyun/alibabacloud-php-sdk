<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateLoadBalancerRequest;

use AlibabaCloud\Tea\Model;

class zoneMappings extends Model
{
    /**
     * @description The ID of the EIP to be associated with the Internet-facing ALB instance.
     *
     * @example eip-bp1aedxso6u80u0qf****
     *
     * @var string
     */
    public $allocationId;

    /**
     * @description The type of EIP. Valid values:
     *
     *   **Common**: an EIP.
     *   **Anycast**: an Anycast EIP.
     *
     * >  For more information about the regions in which ALB supports Anycast EIPs, see [Limits](https://help.aliyun.com/document_detail/460727.html).
     * @example Common
     *
     * @var string
     */
    public $eipType;

    /**
     * @description The private IPv4 address.
     *
     * @example 192.168.10.1
     *
     * @var string
     */
    public $intranetAddress;

    /**
     * @description The vSwitch in the zone. You can specify only one vSwitch (subnet) in each zone. You can specify at most 10 zones. If the region supports two or more zones, specify at least two zones.
     *
     * This parameter is required.
     * @example vsw-sersdf****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The zone ID of the cluster. You can specify at most 10 zones. If the region supports two or more zones, specify at least two zones. You can call the [DescribeZones](https://help.aliyun.com/document_detail/36064.html) operation to query the most recent zone list.
     *
     * This parameter is required.
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'allocationId'    => 'AllocationId',
        'eipType'         => 'EipType',
        'intranetAddress' => 'IntranetAddress',
        'vSwitchId'       => 'VSwitchId',
        'zoneId'          => 'ZoneId',
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
        if (null !== $this->eipType) {
            $res['EipType'] = $this->eipType;
        }
        if (null !== $this->intranetAddress) {
            $res['IntranetAddress'] = $this->intranetAddress;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zoneMappings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['EipType'])) {
            $model->eipType = $map['EipType'];
        }
        if (isset($map['IntranetAddress'])) {
            $model->intranetAddress = $map['IntranetAddress'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
