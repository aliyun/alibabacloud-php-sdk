<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyScalingConfigurationRequest;

use AlibabaCloud\Tea\Model;

class customPriorities extends Model
{
    /**
     * @example ecs.c6a.4xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
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
