<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListRealtimeAgentStatesResponseBody\data;

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
    public $callType;

    /**
     * @var string
     */
    public $counterParty;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $extension;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $mobile;

    /**
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
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $stateCode;

    /**
     * @var int
     */
    public $stateTime;

    /**
     * @var string
     */
    public $workMode;
    protected $_name = [
        'agentId' => 'AgentId',
        'agentName' => 'AgentName',
        'breakCode' => 'BreakCode',
        'callType' => 'CallType',
        'counterParty' => 'CounterParty',
        'duration' => 'Duration',
        'extension' => 'Extension',
        'instanceId' => 'InstanceId',
        'mobile' => 'Mobile',
        'outboundScenario' => 'OutboundScenario',
        'skillGroupIdList' => 'SkillGroupIdList',
        'skillGroupNameList' => 'SkillGroupNameList',
        'state' => 'State',
        'stateCode' => 'StateCode',
        'stateTime' => 'StateTime',
        'workMode' => 'WorkMode',
    ];

    public function validate()
    {
        if (\is_array($this->skillGroupIdList)) {
            Model::validateArray($this->skillGroupIdList);
        }
        if (\is_array($this->skillGroupNameList)) {
            Model::validateArray($this->skillGroupNameList);
        }
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
            if (\is_array($this->skillGroupIdList)) {
                $res['SkillGroupIdList'] = [];
                $n1 = 0;
                foreach ($this->skillGroupIdList as $item1) {
                    $res['SkillGroupIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->skillGroupNameList) {
            if (\is_array($this->skillGroupNameList)) {
                $res['SkillGroupNameList'] = [];
                $n1 = 0;
                foreach ($this->skillGroupNameList as $item1) {
                    $res['SkillGroupNameList'][$n1++] = $item1;
                }
            }
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
                $model->skillGroupIdList = [];
                $n1 = 0;
                foreach ($map['SkillGroupIdList'] as $item1) {
                    $model->skillGroupIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SkillGroupNameList'])) {
            if (!empty($map['SkillGroupNameList'])) {
                $model->skillGroupNameList = [];
                $n1 = 0;
                foreach ($map['SkillGroupNameList'] as $item1) {
                    $model->skillGroupNameList[$n1++] = $item1;
                }
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
