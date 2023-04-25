<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListRealtimeAgentStatesResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example agent1@ccc-test
     *
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @example Outbound
     *
     * @var string
     */
    public $callType;

    /**
     * @example agent@ccc-test
     *
     * @var string
     */
    public $counterParty;

    /**
     * @example 16
     *
     * @var int
     */
    public $duration;

    /**
     * @example 80317391
     *
     * @var string
     */
    public $extension;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1382114****
     *
     * @var string
     */
    public $mobile;

    /**
     * @example false
     *
     * @var bool
     */
    public $outboundScenario;

    /**
     * @var string[]
     */
    public $skillGroupIdList;

    /**
     * @var string[]
     */
    public $skillGroupNameList;

    /**
     * @example ACW
     *
     * @var string
     */
    public $state;

    /**
     * @example Monitored
     *
     * @var string
     */
    public $stateCode;

    /**
     * @example 8
     *
     * @var int
     */
    public $stateTime;

    /**
     * @example ON_SITE
     *
     * @var string
     */
    public $workMode;
    protected $_name = [
        'agentId'            => 'AgentId',
        'agentName'          => 'AgentName',
        'callType'           => 'CallType',
        'counterParty'       => 'CounterParty',
        'duration'           => 'Duration',
        'extension'          => 'Extension',
        'instanceId'         => 'InstanceId',
        'mobile'             => 'Mobile',
        'outboundScenario'   => 'OutboundScenario',
        'skillGroupIdList'   => 'SkillGroupIdList',
        'skillGroupNameList' => 'SkillGroupNameList',
        'state'              => 'State',
        'stateCode'          => 'StateCode',
        'stateTime'          => 'StateTime',
        'workMode'           => 'WorkMode',
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
        if (null !== $this->callType) {
            $res['CallType'] = $this->callType;
        }
        if (null !== $this->counterParty) {
            $res['CounterParty'] = $this->counterParty;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->outboundScenario) {
            $res['OutboundScenario'] = $this->outboundScenario;
        }
        if (null !== $this->skillGroupIdList) {
            $res['SkillGroupIdList'] = $this->skillGroupIdList;
        }
        if (null !== $this->skillGroupNameList) {
            $res['SkillGroupNameList'] = $this->skillGroupNameList;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->stateCode) {
            $res['StateCode'] = $this->stateCode;
        }
        if (null !== $this->stateTime) {
            $res['StateTime'] = $this->stateTime;
        }
        if (null !== $this->workMode) {
            $res['WorkMode'] = $this->workMode;
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
        if (isset($map['CallType'])) {
            $model->callType = $map['CallType'];
        }
        if (isset($map['CounterParty'])) {
            $model->counterParty = $map['CounterParty'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['OutboundScenario'])) {
            $model->outboundScenario = $map['OutboundScenario'];
        }
        if (isset($map['SkillGroupIdList'])) {
            if (!empty($map['SkillGroupIdList'])) {
                $model->skillGroupIdList = $map['SkillGroupIdList'];
            }
        }
        if (isset($map['SkillGroupNameList'])) {
            if (!empty($map['SkillGroupNameList'])) {
                $model->skillGroupNameList = $map['SkillGroupNameList'];
            }
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['StateCode'])) {
            $model->stateCode = $map['StateCode'];
        }
        if (isset($map['StateTime'])) {
            $model->stateTime = $map['StateTime'];
        }
        if (isset($map['WorkMode'])) {
            $model->workMode = $map['WorkMode'];
        }

        return $model;
    }
}
