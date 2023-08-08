<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\UpdateTransitRouterVpcAttachmentZonesRequest;

use AlibabaCloud\Tea\Model;

class addZoneMappings extends Model
{
    /**
     * @description The ID of the vSwitch that you want to add to the VPC connection.
     *
     * You can specify at most 10 vSwitches in each call.
     *
     *   If the VPC connection belongs to the current Alibaba Cloud account, you can call the [DescribeVSwitches](~~35748~~) operation to query the IDs of the vSwitches and zones of the VPC.
     *   If the VPC connection belongs to another Alibaba Cloud account, you can call the [ListGrantVSwitchesToCen](~~427599~~) operation to query the IDs of the vSwitches and zones of the VPC.
     *
     * @example vsw-wz988dda8ldm4uvmx****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the zone where the vSwitch that you want to add to the VPC connection is deployed.
     *
     * You can specify at most 10 vSwitches in each call.
     * @example cn-hangzhou-h
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
     * @return addZoneMappings
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
