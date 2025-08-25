<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListAgentStatesResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
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
    public $breakCode;

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
     * @var bool
     */
    public $outboundScenario;

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
        'breakCode' => 'BreakCode',
        'dn' => 'Dn',
        'instanceId' => 'InstanceId',
        'loginName' => 'LoginName',
        'outboundScenario' => 'OutboundScenario',
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

        if (null !== $this->breakCode) {
            $res['BreakCode'] = $this->breakCode;
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

        if (null !== $this->outboundScenario) {
            $res['OutboundScenario'] = $this->outboundScenario;
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

        if (isset($map['BreakCode'])) {
            $model->breakCode = $map['BreakCode'];
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

        if (isset($map['OutboundScenario'])) {
            $model->outboundScenario = $map['OutboundScenario'];
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
