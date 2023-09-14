<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\UpdateLoadBalancerZonesRequest;

use AlibabaCloud\Tea\Model;

class zoneMappings extends Model
{
    /**
     * @description The ID of the vSwitch in the zone. By default, you can specify only one vSwitch (subnet) for each zone of an ALB instance. You can specify up to 10 zone IDs.
     *
     * @example vsw-bp1rmcrwg3erh1fh8****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The name of the zone. You can call the [DescribeZones](~~189196~~) operation to query the zones. You can specify up to 10 zone IDs.
     *
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'vSwitchId' => 'VSwitchId',
        'zoneId'    => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
