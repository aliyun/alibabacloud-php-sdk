<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyAccessTimeRangeConfigRequest\accessTimeRangeConfig;
use AlibabaCloud\Tea\Model;

class SetPolicyAccessTimeRangeConfigRequest extends Model
{
    /**
     * @var accessTimeRangeConfig
     */
    public $accessTimeRangeConfig;

    /**
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 13
     *
     * @var string
     */
    public $policyId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accessTimeRangeConfig' => 'AccessTimeRangeConfig',
        'instanceId'            => 'InstanceId',
        'policyId'              => 'PolicyId',
        'regionId'              => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessTimeRangeConfig) {
            $res['AccessTimeRangeConfig'] = null !== $this->accessTimeRangeConfig ? $this->accessTimeRangeConfig->toMap() : null;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetPolicyAccessTimeRangeConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessTimeRangeConfig'])) {
            $model->accessTimeRangeConfig = accessTimeRangeConfig::fromMap($map['AccessTimeRangeConfig']);
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
