<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateLoadBalancerAddressTypeConfigRequest;

use AlibabaCloud\Tea\Model;

class zoneMappings extends Model
{
    /**
     * @description The ID of an EIP instance. You can specify up to 10 zone IDs.
     *
     * > This parameter is required if you want to change the network type from internal-facing to Internet-facing.
     * @example eip-bp1aedxso6u80u0qf****
     *
     * @var string
     */
    public $allocationId;

    /**
     * @description The ID of the vSwitch in the zone. You can specify only one vSwitch (subnet) in each zone of an ALB instance. You can specify up to 10 vSwitch IDs.
     *
     * @example vsw-bp10ttov87felojcn****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the zone where the ALB instance is deployed. You can specify up to 10 zone IDs.
     *
     * You can call the [DescribeZones](~~189196~~) operation to query the most recent zone list.
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'allocationId' => 'AllocationId',
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
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
