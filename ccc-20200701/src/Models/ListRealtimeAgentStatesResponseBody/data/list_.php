<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListRealtimeAgentStatesResponseBody\data;

use AlibabaCloud\Tea\Model;

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
    public $counterParty;

    /**
     * @var string
     */
    public $extension;

    /**
     * @var string
     */
    public $instanceId;

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
    protected $_name = [
        'agentId'            => 'AgentId',
        'agentName'          => 'AgentName',
        'counterParty'       => 'CounterParty',
        'extension'          => 'Extension',
        'instanceId'         => 'InstanceId',
        'skillGroupIdList'   => 'SkillGroupIdList',
        'skillGroupNameList' => 'SkillGroupNameList',
        'state'              => 'State',
        'stateCode'          => 'StateCode',
        'stateTime'          => 'StateTime',
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
        if (null !== $this->counterParty) {
            $res['CounterParty'] = $this->counterParty;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['CounterParty'])) {
            $model->counterParty = $map['CounterParty'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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

        return $model;
    }
}
