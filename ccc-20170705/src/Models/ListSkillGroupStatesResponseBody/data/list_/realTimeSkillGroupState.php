<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListSkillGroupStatesResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class realTimeSkillGroupState extends Model
{
    /**
     * @var int
     */
    public $workingAgents;

    /**
     * @var int
     */
    public $loggedInAgents;

    /**
     * @var int
     */
    public $breakingAgents;

    /**
     * @var int
     */
    public $longestCall;

    /**
     * @var int
     */
    public $waitingCalls;

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
        'workingAgents'  => 'WorkingAgents',
        'loggedInAgents' => 'LoggedInAgents',
        'breakingAgents' => 'BreakingAgents',
        'longestCall'    => 'LongestCall',
        'waitingCalls'   => 'WaitingCalls',
        'talkingAgents'  => 'TalkingAgents',
        'skillGroupName' => 'SkillGroupName',
        'skillGroupId'   => 'SkillGroupId',
        'readyAgents'    => 'ReadyAgents',
        'instanceId'     => 'InstanceId',
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
        if (null !== $this->loggedInAgents) {
            $res['LoggedInAgents'] = $this->loggedInAgents;
        }
        if (null !== $this->breakingAgents) {
            $res['BreakingAgents'] = $this->breakingAgents;
        }
        if (null !== $this->longestCall) {
            $res['LongestCall'] = $this->longestCall;
        }
        if (null !== $this->waitingCalls) {
            $res['WaitingCalls'] = $this->waitingCalls;
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
     * @return realTimeSkillGroupState
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WorkingAgents'])) {
            $model->workingAgents = $map['WorkingAgents'];
        }
        if (isset($map['LoggedInAgents'])) {
            $model->loggedInAgents = $map['LoggedInAgents'];
        }
        if (isset($map['BreakingAgents'])) {
            $model->breakingAgents = $map['BreakingAgents'];
        }
        if (isset($map['LongestCall'])) {
            $model->longestCall = $map['LongestCall'];
        }
        if (isset($map['WaitingCalls'])) {
            $model->waitingCalls = $map['WaitingCalls'];
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
