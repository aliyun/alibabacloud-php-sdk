<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateLoadBalancerAddressTypeConfigRequest;

use AlibabaCloud\Tea\Model;

class zoneMappings extends Model
{
    /**
     * @description The ID of the elastic IP address (EIP). You can specify a maximum of 10 zones.
     *
     * >  This parameter is required if you want to change the network type from internal-facing to Internet-facing.
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
     * @description The vSwitch in the zone. You can specify only one vSwitch (subnet) in each zone of an ALB instance. You can specify a maximum of 10 zones. If the selected region supports two or more zones, select at least two zones to ensure the high availability of your service.
     *
     * @example vsw-bp10ttov87felojcn****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The zone ID of the ALB instance. You can specify a maximum of 10 zones. If the selected region supports two or more zones, select at least two zones to ensure the high availability of your service.
     *
     * You can call the [DescribeZones](https://help.aliyun.com/document_detail/189196.html) operation to query the information about the zone.
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'allocationId' => 'AllocationId',
        'eipType'      => 'EipType',
        'vSwitchId'    => 'VSwitchId',
        'zoneId'       => 'ZoneId',
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
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
