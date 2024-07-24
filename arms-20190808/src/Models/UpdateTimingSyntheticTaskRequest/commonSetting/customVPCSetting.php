<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest\commonSetting;

use AlibabaCloud\Tea\Model;

class customVPCSetting extends Model
{
    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the security group to which the client belongs. The security group specifies the inbound and outbound rules of the client for the VPC. You need to allow the security group to which the client belongs to access the security group to which the VPC belongs. Otherwise, the client cannot access resources in the VPC.
     *
     * @example sg-xxxxxxxx
     *
     * @var string
     */
    public $secureGroupId;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-2zevek6r3mpny7wxxxxxv
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description VPC ID.
     *
     * @example vpc-bp15bjtubjytclwxxxxxx
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'regionId'      => 'RegionId',
        'secureGroupId' => 'SecureGroupId',
        'vSwitchId'     => 'VSwitchId',
        'vpcId'         => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->secureGroupId) {
            $res['SecureGroupId'] = $this->secureGroupId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customVPCSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecureGroupId'])) {
            $model->secureGroupId = $map['SecureGroupId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
