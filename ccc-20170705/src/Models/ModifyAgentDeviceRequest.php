<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Dara\Model;

class ModifyAgentDeviceRequest extends Model
{
    /**
     * @var int
     */
    public $agentDeviceId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $isLogin;
    protected $_name = [
        'agentDeviceId' => 'AgentDeviceId',
        'instanceId' => 'InstanceId',
        'isLogin' => 'IsLogin',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentDeviceId) {
            $res['AgentDeviceId'] = $this->agentDeviceId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->isLogin) {
            $res['IsLogin'] = $this->isLogin;
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
        if (isset($map['AgentDeviceId'])) {
            $model->agentDeviceId = $map['AgentDeviceId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IsLogin'])) {
            $model->isLogin = $map['IsLogin'];
        }

        return $model;
    }
}
