<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentStatesResponseBody\data\list_;

use AlibabaCloud\Dara\Model;

class realTimeAgentState extends Model
{
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
    public $dn;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $loginName;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $stateDuration;
    protected $_name = [
        'agentId' => 'AgentId',
        'agentName' => 'AgentName',
        'dn' => 'Dn',
        'instanceId' => 'InstanceId',
        'loginName' => 'LoginName',
        'state' => 'State',
        'stateDuration' => 'StateDuration',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->dn) {
            $res['Dn'] = $this->dn;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->stateDuration) {
            $res['StateDuration'] = $this->stateDuration;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['Dn'])) {
            $model->dn = $map['Dn'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['StateDuration'])) {
            $model->stateDuration = $map['StateDuration'];
        }

        return $model;
    }
}
