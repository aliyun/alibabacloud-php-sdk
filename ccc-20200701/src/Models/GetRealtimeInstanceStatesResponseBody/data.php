<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetRealtimeInstanceStatesResponseBody;

use AlibabaCloud\SDK\CCC\V20200701\Models\GetRealtimeInstanceStatesResponseBody\data\breakCodeDetailList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var breakCodeDetailList[]
     */
    public $breakCodeDetailList;

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
     * @example 0
     *
     * @var int
     */
    public $interactiveCalls;

    /**
     * @example 0
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
    public $readyAgents;

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
    public $totalAgents;

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
        'breakCodeDetailList' => 'BreakCodeDetailList',
        'breakingAgents'      => 'BreakingAgents',
        'instanceId'          => 'InstanceId',
        'interactiveCalls'    => 'InteractiveCalls',
        'loggedInAgents'      => 'LoggedInAgents',
        'longestWaitingTime'  => 'LongestWaitingTime',
        'readyAgents'         => 'ReadyAgents',
        'talkingAgents'       => 'TalkingAgents',
        'totalAgents'         => 'TotalAgents',
        'waitingCalls'        => 'WaitingCalls',
        'workingAgents'       => 'WorkingAgents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->breakCodeDetailList) {
            $res['BreakCodeDetailList'] = [];
            if (null !== $this->breakCodeDetailList && \is_array($this->breakCodeDetailList)) {
                $n = 0;
                foreach ($this->breakCodeDetailList as $item) {
                    $res['BreakCodeDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->breakingAgents) {
            $res['BreakingAgents'] = $this->breakingAgents;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->interactiveCalls) {
            $res['InteractiveCalls'] = $this->interactiveCalls;
        }
        if (null !== $this->loggedInAgents) {
            $res['LoggedInAgents'] = $this->loggedInAgents;
        }
        if (null !== $this->longestWaitingTime) {
            $res['LongestWaitingTime'] = $this->longestWaitingTime;
        }
        if (null !== $this->readyAgents) {
            $res['ReadyAgents'] = $this->readyAgents;
        }
        if (null !== $this->talkingAgents) {
            $res['TalkingAgents'] = $this->talkingAgents;
        }
        if (null !== $this->totalAgents) {
            $res['TotalAgents'] = $this->totalAgents;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BreakCodeDetailList'])) {
            if (!empty($map['BreakCodeDetailList'])) {
                $model->breakCodeDetailList = [];
                $n                          = 0;
                foreach ($map['BreakCodeDetailList'] as $item) {
                    $model->breakCodeDetailList[$n++] = null !== $item ? breakCodeDetailList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BreakingAgents'])) {
            $model->breakingAgents = $map['BreakingAgents'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InteractiveCalls'])) {
            $model->interactiveCalls = $map['InteractiveCalls'];
        }
        if (isset($map['LoggedInAgents'])) {
            $model->loggedInAgents = $map['LoggedInAgents'];
        }
        if (isset($map['LongestWaitingTime'])) {
            $model->longestWaitingTime = $map['LongestWaitingTime'];
        }
        if (isset($map['ReadyAgents'])) {
            $model->readyAgents = $map['ReadyAgents'];
        }
        if (isset($map['TalkingAgents'])) {
            $model->talkingAgents = $map['TalkingAgents'];
        }
        if (isset($map['TotalAgents'])) {
            $model->totalAgents = $map['TotalAgents'];
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
