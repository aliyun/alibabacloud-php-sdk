<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene\loadConfig;

use AlibabaCloud\Tea\Model;

class vpcLoadConfig extends Model
{
    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @example sg-jkasgfieiajidsjakjscb
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example vsw-skjfhlahsljkhsfalkjdoiw
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description VPC ID。
     *
     * @example vpc-akjhsdajgjsfggahjkga
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'regionId'        => 'RegionId',
        'securityGroupId' => 'SecurityGroupId',
        'vSwitchId'       => 'VSwitchId',
        'vpcId'           => 'VpcId',
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
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
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
     * @return vpcLoadConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
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
