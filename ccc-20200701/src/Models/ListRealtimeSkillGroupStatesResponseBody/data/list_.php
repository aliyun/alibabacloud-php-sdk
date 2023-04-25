<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListRealtimeSkillGroupStatesResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $breakingAgents;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 2
     *
     * @var int
     */
    public $loggedInAgents;

    /**
     * @example 0
     *
     * @var int
     */
    public $longestWaitingTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $outboundScenarioReadyAgents;

    /**
     * @example 2
     *
     * @var int
     */
    public $readyAgents;

    /**
     * @example skillgroup@ccc-test
     *
     * @var string
     */
    public $skillGroupId;

    /**
     * @example skillgroup
     *
     * @var string
     */
    public $skillGroupName;

    /**
     * @example 0
     *
     * @var int
     */
    public $talkingAgents;

    /**
     * @example 0
     *
     * @var int
     */
    public $waitingCalls;

    /**
     * @example 0
     *
     * @var int
     */
    public $workingAgents;
    protected $_name = [
        'breakingAgents'              => 'BreakingAgents',
        'instanceId'                  => 'InstanceId',
        'loggedInAgents'              => 'LoggedInAgents',
        'longestWaitingTime'          => 'LongestWaitingTime',
        'outboundScenarioReadyAgents' => 'OutboundScenarioReadyAgents',
        'readyAgents'                 => 'ReadyAgents',
        'skillGroupId'                => 'SkillGroupId',
        'skillGroupName'              => 'SkillGroupName',
        'talkingAgents'               => 'TalkingAgents',
        'waitingCalls'                => 'WaitingCalls',
        'workingAgents'               => 'WorkingAgents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->breakingAgents) {
            $res['BreakingAgents'] = $this->breakingAgents;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->loggedInAgents) {
            $res['LoggedInAgents'] = $this->loggedInAgents;
        }
        if (null !== $this->longestWaitingTime) {
            $res['LongestWaitingTime'] = $this->longestWaitingTime;
        }
        if (null !== $this->outboundScenarioReadyAgents) {
            $res['OutboundScenarioReadyAgents'] = $this->outboundScenarioReadyAgents;
        }
        if (null !== $this->readyAgents) {
            $res['ReadyAgents'] = $this->readyAgents;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->skillGroupName) {
            $res['SkillGroupName'] = $this->skillGroupName;
        }
        if (null !== $this->talkingAgents) {
            $res['TalkingAgents'] = $this->talkingAgents;
        }
        if (null !== $this->waitingCalls) {
            $res['WaitingCalls'] = $this->waitingCalls;
        }
        if (null !== $this->workingAgents) {
            $res['WorkingAgents'] = $this->workingAgents;
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
        if (isset($map['BreakingAgents'])) {
            $model->breakingAgents = $map['BreakingAgents'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LoggedInAgents'])) {
            $model->loggedInAgents = $map['LoggedInAgents'];
        }
        if (isset($map['LongestWaitingTime'])) {
            $model->longestWaitingTime = $map['LongestWaitingTime'];
        }
        if (isset($map['OutboundScenarioReadyAgents'])) {
            $model->outboundScenarioReadyAgents = $map['OutboundScenarioReadyAgents'];
        }
        if (isset($map['ReadyAgents'])) {
            $model->readyAgents = $map['ReadyAgents'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['SkillGroupName'])) {
            $model->skillGroupName = $map['SkillGroupName'];
        }
        if (isset($map['TalkingAgents'])) {
            $model->talkingAgents = $map['TalkingAgents'];
        }
        if (isset($map['WaitingCalls'])) {
            $model->waitingCalls = $map['WaitingCalls'];
        }
        if (isset($map['WorkingAgents'])) {
            $model->workingAgents = $map['WorkingAgents'];
        }

        return $model;
    }
}
