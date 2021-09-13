<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetRealtimeInstanceStatesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
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
    public $totalAgents;

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
     * @var int
     */
    public $interactiveCalls;

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
        'totalAgents'        => 'TotalAgents',
        'waitingCalls'       => 'WaitingCalls',
        'breakingAgents'     => 'BreakingAgents',
        'talkingAgents'      => 'TalkingAgents',
        'interactiveCalls'   => 'InteractiveCalls',
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
        if (null !== $this->totalAgents) {
            $res['TotalAgents'] = $this->totalAgents;
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
        if (null !== $this->interactiveCalls) {
            $res['InteractiveCalls'] = $this->interactiveCalls;
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
     * @return data
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
        if (isset($map['TotalAgents'])) {
            $model->totalAgents = $map['TotalAgents'];
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
        if (isset($map['InteractiveCalls'])) {
            $model->interactiveCalls = $map['InteractiveCalls'];
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
