<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\commonSetting;

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
     * @description Security group ID. This security group is where the dial-up client is located. The security group limits the inbound and outbound rules of the dial-up client in the VPC. You need to set the inbound rules of the security group where your VPC is located to allow the security group where the dial-up client is located to access. Otherwise, the dial-up client cannot smoothly access the resources in your VPC.
     *
     * @example sg-xxxxxxx
     *
     * @var string
     */
    public $secureGroupId;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-bp1i0xezblf1yrz4xxxxx
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description VPC ID.
     *
     * @example vpc-2zexy5nae9q2otaxxxx
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
