<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListRealtimeSkillGroupStatesResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $workingAgents;

    /**
     * @var int
     */
    public $longestWaitingTime;

    /**
     * @var int
     */
    public $loggedInAgents;

    /**
     * @var int
     */
    public $waitingCalls;

    /**
     * @var int
     */
    public $breakingAgents;

    /**
     * @var int
     */
    public $talkingAgents;

    /**
     * @var string
     */
    public $skillGroupName;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var int
     */
    public $readyAgents;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'workingAgents'      => 'WorkingAgents',
        'longestWaitingTime' => 'LongestWaitingTime',
        'loggedInAgents'     => 'LoggedInAgents',
        'waitingCalls'       => 'WaitingCalls',
        'breakingAgents'     => 'BreakingAgents',
        'talkingAgents'      => 'TalkingAgents',
        'skillGroupName'     => 'SkillGroupName',
        'skillGroupId'       => 'SkillGroupId',
        'readyAgents'        => 'ReadyAgents',
        'instanceId'         => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workingAgents) {
            $res['WorkingAgents'] = $this->workingAgents;
        }
        if (null !== $this->longestWaitingTime) {
            $res['LongestWaitingTime'] = $this->longestWaitingTime;
        }
        if (null !== $this->loggedInAgents) {
            $res['LoggedInAgents'] = $this->loggedInAgents;
        }
        if (null !== $this->waitingCalls) {
            $res['WaitingCalls'] = $this->waitingCalls;
        }
        if (null !== $this->breakingAgents) {
            $res['BreakingAgents'] = $this->breakingAgents;
        }
        if (null !== $this->talkingAgents) {
            $res['TalkingAgents'] = $this->talkingAgents;
        }
        if (null !== $this->skillGroupName) {
            $res['SkillGroupName'] = $this->skillGroupName;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->readyAgents) {
            $res['ReadyAgents'] = $this->readyAgents;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['WorkingAgents'])) {
            $model->workingAgents = $map['WorkingAgents'];
        }
        if (isset($map['LongestWaitingTime'])) {
            $model->longestWaitingTime = $map['LongestWaitingTime'];
        }
        if (isset($map['LoggedInAgents'])) {
            $model->loggedInAgents = $map['LoggedInAgents'];
        }
        if (isset($map['WaitingCalls'])) {
            $model->waitingCalls = $map['WaitingCalls'];
        }
        if (isset($map['BreakingAgents'])) {
            $model->breakingAgents = $map['BreakingAgents'];
        }
        if (isset($map['TalkingAgents'])) {
            $model->talkingAgents = $map['TalkingAgents'];
        }
        if (isset($map['SkillGroupName'])) {
            $model->skillGroupName = $map['SkillGroupName'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['ReadyAgents'])) {
            $model->readyAgents = $map['ReadyAgents'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
