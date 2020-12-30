<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentStatesResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class realTimeAgentState extends Model
{
    /**
     * @var string
     */
    public $loginName;

    /**
     * @var string
     */
    public $dn;

    /**
     * @var string
     */
    public $stateDuration;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'loginName'     => 'LoginName',
        'dn'            => 'Dn',
        'stateDuration' => 'StateDuration',
        'state'         => 'State',
        'agentId'       => 'AgentId',
        'agentName'     => 'AgentName',
        'instanceId'    => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }
        if (null !== $this->dn) {
            $res['Dn'] = $this->dn;
        }
        if (null !== $this->stateDuration) {
            $res['StateDuration'] = $this->stateDuration;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return realTimeAgentState
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }
        if (isset($map['Dn'])) {
            $model->dn = $map['Dn'];
        }
        if (isset($map['StateDuration'])) {
            $model->stateDuration = $map['StateDuration'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
