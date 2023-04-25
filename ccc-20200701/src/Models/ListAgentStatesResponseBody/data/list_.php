<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListAgentStatesResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example agent@ccc-test
     *
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @example Warm-up
     *
     * @var string
     */
    public $breakCode;

    /**
     * @example 8030****
     *
     * @var string
     */
    public $dn;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example agent
     *
     * @var string
     */
    public $loginName;

    /**
     * @example false
     *
     * @var bool
     */
    public $outboundScenario;

    /**
     * @example Ready
     *
     * @var string
     */
    public $state;

    /**
     * @example 10
     *
     * @var string
     */
    public $stateDuration;
    protected $_name = [
        'agentId'          => 'AgentId',
        'agentName'        => 'AgentName',
        'breakCode'        => 'BreakCode',
        'dn'               => 'Dn',
        'instanceId'       => 'InstanceId',
        'loginName'        => 'LoginName',
        'outboundScenario' => 'OutboundScenario',
        'state'            => 'State',
        'stateDuration'    => 'StateDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return list_
     */
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
