<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListSkillGroupStatesResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $averageWaitingTime;

    /**
     * @var int
     */
    public $breakingAgents;

    /**
     * @var int
     */
    public $inboundTalkingAgents;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $loggedInAgents;

    /**
     * @var int
     */
    public $longestCall;

    /**
     * @var int
     */
    public $outboundScenarioReadyAgents;

    /**
     * @var int
     */
    public $outboundTalkingAgents;

    /**
     * @var int
     */
    public $readyAgents;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var string
     */
    public $skillGroupName;

    /**
     * @var int
     */
    public $talkingAgents;

    /**
     * @var int
     */
    public $waitingCalls;

    /**
     * @var int
     */
    public $waitingCallsLevel10;

    /**
     * @var int
     */
    public $waitingCallsLevel20;

    /**
     * @var int
     */
    public $waitingCallsLevel30;

    /**
     * @var int
     */
    public $workingAgents;
    protected $_name = [
        'averageWaitingTime'          => 'AverageWaitingTime',
        'breakingAgents'              => 'BreakingAgents',
        'inboundTalkingAgents'        => 'InboundTalkingAgents',
        'instanceId'                  => 'InstanceId',
        'loggedInAgents'              => 'LoggedInAgents',
        'longestCall'                 => 'LongestCall',
        'outboundScenarioReadyAgents' => 'OutboundScenarioReadyAgents',
        'outboundTalkingAgents'       => 'OutboundTalkingAgents',
        'readyAgents'                 => 'ReadyAgents',
        'skillGroupId'                => 'SkillGroupId',
        'skillGroupName'              => 'SkillGroupName',
        'talkingAgents'               => 'TalkingAgents',
        'waitingCalls'                => 'WaitingCalls',
        'waitingCallsLevel10'         => 'WaitingCallsLevel10',
        'waitingCallsLevel20'         => 'WaitingCallsLevel20',
        'waitingCallsLevel30'         => 'WaitingCallsLevel30',
        'workingAgents'               => 'WorkingAgents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->averageWaitingTime) {
            $res['AverageWaitingTime'] = $this->averageWaitingTime;
        }
        if (null !== $this->breakingAgents) {
            $res['BreakingAgents'] = $this->breakingAgents;
        }
        if (null !== $this->inboundTalkingAgents) {
            $res['InboundTalkingAgents'] = $this->inboundTalkingAgents;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->loggedInAgents) {
            $res['LoggedInAgents'] = $this->loggedInAgents;
        }
        if (null !== $this->longestCall) {
            $res['LongestCall'] = $this->longestCall;
        }
        if (null !== $this->outboundScenarioReadyAgents) {
            $res['OutboundScenarioReadyAgents'] = $this->outboundScenarioReadyAgents;
        }
        if (null !== $this->outboundTalkingAgents) {
            $res['OutboundTalkingAgents'] = $this->outboundTalkingAgents;
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
        if (null !== $this->waitingCallsLevel10) {
            $res['WaitingCallsLevel10'] = $this->waitingCallsLevel10;
        }
        if (null !== $this->waitingCallsLevel20) {
            $res['WaitingCallsLevel20'] = $this->waitingCallsLevel20;
        }
        if (null !== $this->waitingCallsLevel30) {
            $res['WaitingCallsLevel30'] = $this->waitingCallsLevel30;
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
        if (isset($map['AverageWaitingTime'])) {
            $model->averageWaitingTime = $map['AverageWaitingTime'];
        }
        if (isset($map['BreakingAgents'])) {
            $model->breakingAgents = $map['BreakingAgents'];
        }
        if (isset($map['InboundTalkingAgents'])) {
            $model->inboundTalkingAgents = $map['InboundTalkingAgents'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LoggedInAgents'])) {
            $model->loggedInAgents = $map['LoggedInAgents'];
        }
        if (isset($map['LongestCall'])) {
            $model->longestCall = $map['LongestCall'];
        }
        if (isset($map['OutboundScenarioReadyAgents'])) {
            $model->outboundScenarioReadyAgents = $map['OutboundScenarioReadyAgents'];
        }
        if (isset($map['OutboundTalkingAgents'])) {
            $model->outboundTalkingAgents = $map['OutboundTalkingAgents'];
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
        if (isset($map['WaitingCallsLevel10'])) {
            $model->waitingCallsLevel10 = $map['WaitingCallsLevel10'];
        }
        if (isset($map['WaitingCallsLevel20'])) {
            $model->waitingCallsLevel20 = $map['WaitingCallsLevel20'];
        }
        if (isset($map['WaitingCallsLevel30'])) {
            $model->waitingCallsLevel30 = $map['WaitingCallsLevel30'];
        }
        if (isset($map['WorkingAgents'])) {
            $model->workingAgents = $map['WorkingAgents'];
        }

        return $model;
    }
}
