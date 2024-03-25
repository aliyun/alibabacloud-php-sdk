<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterVpcAttachmentZonesRequest;

use AlibabaCloud\Tea\Model;

class removeZoneMappings extends Model
{
    /**
     * @description The ID of the vSwitch that you want to remove from the VPC connection.
     *
     * You can remove at most 10 vSwitches from a VPC in each call.
     * @example vsw-wz9f5izl6wshndmta****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the zone where the vSwitch that you want to remove from the VPC connection is deployed.
     *
     * @example cn-hangzhou-i
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
     * @return removeZoneMappings
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
