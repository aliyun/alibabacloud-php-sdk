<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListRealtimeSkillGroupStatesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListRealtimeSkillGroupStatesResponseBody\data\list_\breakCodeDetailList;

class list_ extends Model
{
    /**
     * @var breakCodeDetailList[]
     */
    public $breakCodeDetailList;

    /**
     * @var int
     */
    public $breakingAgents;

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
    public $longestWaitingTime;

    /**
     * @var int
     */
    public $outboundScenarioReadyAgents;

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
    public $totalAgents;

    /**
     * @var int
     */
    public $waitingCalls;

    /**
     * @var int
     */
    public $workingAgents;
    protected $_name = [
        'breakCodeDetailList' => 'BreakCodeDetailList',
        'breakingAgents' => 'BreakingAgents',
        'instanceId' => 'InstanceId',
        'loggedInAgents' => 'LoggedInAgents',
        'longestWaitingTime' => 'LongestWaitingTime',
        'outboundScenarioReadyAgents' => 'OutboundScenarioReadyAgents',
        'readyAgents' => 'ReadyAgents',
        'skillGroupId' => 'SkillGroupId',
        'skillGroupName' => 'SkillGroupName',
        'talkingAgents' => 'TalkingAgents',
        'totalAgents' => 'TotalAgents',
        'waitingCalls' => 'WaitingCalls',
        'workingAgents' => 'WorkingAgents',
    ];

    public function validate()
    {
        if (\is_array($this->breakCodeDetailList)) {
            Model::validateArray($this->breakCodeDetailList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->breakCodeDetailList) {
            if (\is_array($this->breakCodeDetailList)) {
                $res['BreakCodeDetailList'] = [];
                $n1 = 0;
                foreach ($this->breakCodeDetailList as $item1) {
                    $res['BreakCodeDetailList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BreakCodeDetailList'])) {
            if (!empty($map['BreakCodeDetailList'])) {
                $model->breakCodeDetailList = [];
                $n1 = 0;
                foreach ($map['BreakCodeDetailList'] as $item1) {
                    $model->breakCodeDetailList[$n1] = breakCodeDetailList::fromMap($item1);
                    ++$n1;
                }
            }
        }

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
