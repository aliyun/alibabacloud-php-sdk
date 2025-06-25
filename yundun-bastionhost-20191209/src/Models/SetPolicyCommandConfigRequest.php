<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyCommandConfigRequest\commandConfig;

class SetPolicyCommandConfigRequest extends Model
{
    /**
     * @var commandConfig
     */
    public $commandConfig;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'commandConfig' => 'CommandConfig',
        'instanceId' => 'InstanceId',
        'policyId' => 'PolicyId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (null !== $this->commandConfig) {
            $this->commandConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commandConfig) {
            $res['CommandConfig'] = null !== $this->commandConfig ? $this->commandConfig->toArray($noStream) : $this->commandConfig;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
