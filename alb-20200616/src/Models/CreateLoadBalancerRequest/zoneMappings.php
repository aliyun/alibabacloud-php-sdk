<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateLoadBalancerRequest;

use AlibabaCloud\Tea\Model;

class zoneMappings extends Model
{
    /**
     * @var string
     */
    public $intranetAddress;

    /**
     * @description The ID of the vSwitch in the zone. You can specify only one vSwitch (subnet) in each zone of an ALB instance. You can specify up to 10 vSwitch IDs.
     *
     * @example vsw-sersdf****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the zone where the ALB instance is deployed. You can specify up to 10 zone IDs.
     *
     * You can call the [DescribeZones](~~36064~~) operation to query the zones of the ALB instance.
     * @example cn-hangzhou-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
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
