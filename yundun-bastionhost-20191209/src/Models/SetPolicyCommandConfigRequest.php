<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyCommandConfigRequest\commandConfig;
use AlibabaCloud\Tea\Model;

class SetPolicyCommandConfigRequest extends Model
{
    /**
     * @var commandConfig
     */
    public $commandConfig;

    /**
     * @example bastionhost-cn-78v1ghxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 45
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
        'commandConfig' => 'CommandConfig',
        'instanceId'    => 'InstanceId',
        'policyId'      => 'PolicyId',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandConfig) {
            $res['CommandConfig'] = null !== $this->commandConfig ? $this->commandConfig->toMap() : null;
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
     * @return SetPolicyCommandConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandConfig'])) {
            $model->commandConfig = commandConfig::fromMap($map['CommandConfig']);
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
