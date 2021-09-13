<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListRealtimeAgentStatesResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $extension;

    /**
     * @var string
     */
    public $stateCode;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $agentId;

    /**
     * @var int
     */
    public $stateTime;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $counterParty;

    /**
     * @var string[]
     */
    public $skillGroupIdList;
    protected $_name = [
        'extension'        => 'Extension',
        'stateCode'        => 'StateCode',
        'state'            => 'State',
        'agentId'          => 'AgentId',
        'stateTime'        => 'StateTime',
        'agentName'        => 'AgentName',
        'instanceId'       => 'InstanceId',
        'counterParty'     => 'CounterParty',
        'skillGroupIdList' => 'SkillGroupIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->stateCode) {
            $res['StateCode'] = $this->stateCode;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->stateTime) {
            $res['StateTime'] = $this->stateTime;
        }
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->counterParty) {
            $res['CounterParty'] = $this->counterParty;
        }
        if (null !== $this->skillGroupIdList) {
            $res['SkillGroupIdList'] = $this->skillGroupIdList;
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
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['StateCode'])) {
            $model->stateCode = $map['StateCode'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['StateTime'])) {
            $model->stateTime = $map['StateTime'];
        }
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CounterParty'])) {
            $model->counterParty = $map['CounterParty'];
        }
        if (isset($map['SkillGroupIdList'])) {
            if (!empty($map['SkillGroupIdList'])) {
                $model->skillGroupIdList = $map['SkillGroupIdList'];
            }
        }

        return $model;
    }
}
