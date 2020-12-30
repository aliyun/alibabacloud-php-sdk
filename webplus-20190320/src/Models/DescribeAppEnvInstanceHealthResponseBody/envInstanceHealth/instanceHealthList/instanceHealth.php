<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeAppEnvInstanceHealthResponseBody\envInstanceHealth\instanceHealthList;

use AlibabaCloud\Tea\Model;

class instanceHealth extends Model
{
    /**
     * @var string
     */
    public $appStatus;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $disconnectedTime;

    /**
     * @var string
     */
    public $agentStatus;
    protected $_name = [
        'appStatus'        => 'AppStatus',
        'instanceId'       => 'InstanceId',
        'disconnectedTime' => 'DisconnectedTime',
        'agentStatus'      => 'AgentStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appStatus) {
            $res['AppStatus'] = $this->appStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->disconnectedTime) {
            $res['DisconnectedTime'] = $this->disconnectedTime;
        }
        if (null !== $this->agentStatus) {
            $res['AgentStatus'] = $this->agentStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceHealth
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppStatus'])) {
            $model->appStatus = $map['AppStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DisconnectedTime'])) {
            $model->disconnectedTime = $map['DisconnectedTime'];
        }
        if (isset($map['AgentStatus'])) {
            $model->agentStatus = $map['AgentStatus'];
        }

        return $model;
    }
}
