<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingConfigurationShrinkRequest;

use AlibabaCloud\Tea\Model;

class customPriorities extends Model
{
    /**
     * @description The ECS instance type.
     *
     * >  The ECS instance type must be included in the instance types specified in the scaling configuration.
     * @example ecs.g6.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The vSwitch ID.
     *
     * >  The vSwitch must be included in the vSwitch list of the scaling group.
     * @example vsw-bp14zolna43z266bq****
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'instanceType' => 'InstanceType',
        'vswitchId'    => 'VswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customPriorities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
