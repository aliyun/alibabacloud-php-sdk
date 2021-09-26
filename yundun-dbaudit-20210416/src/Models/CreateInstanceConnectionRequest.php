<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20210416\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceConnectionRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string[]
     */
    public $vswitchIds;

    /**
     * @var string[]
     */
    public $securityGroupIds;
    protected $_name = [
        'instanceId'       => 'InstanceId',
        'regionId'         => 'RegionId',
        'vpcId'            => 'VpcId',
        'bandwidth'        => 'Bandwidth',
        'vswitchIds'       => 'VswitchIds',
        'securityGroupIds' => 'SecurityGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->vswitchIds) {
            $res['VswitchIds'] = $this->vswitchIds;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['VswitchIds'])) {
            if (!empty($map['VswitchIds'])) {
                $model->vswitchIds = $map['VswitchIds'];
            }
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }

        return $model;
    }
}
