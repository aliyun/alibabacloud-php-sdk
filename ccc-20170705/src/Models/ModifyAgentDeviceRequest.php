<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class ModifyAgentDeviceRequest extends Model
{
    /**
     * @var int
     */
    public $isLogin;

    /**
     * @var int
     */
    public $agentDeviceId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'isLogin'       => 'IsLogin',
        'agentDeviceId' => 'AgentDeviceId',
        'instanceId'    => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isLogin) {
            $res['IsLogin'] = $this->isLogin;
        }
        if (null !== $this->agentDeviceId) {
            $res['AgentDeviceId'] = $this->agentDeviceId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAgentDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsLogin'])) {
            $model->isLogin = $map['IsLogin'];
        }
        if (isset($map['AgentDeviceId'])) {
            $model->agentDeviceId = $map['AgentDeviceId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
