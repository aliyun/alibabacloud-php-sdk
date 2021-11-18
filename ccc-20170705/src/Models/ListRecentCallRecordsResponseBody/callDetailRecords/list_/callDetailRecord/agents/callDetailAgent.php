<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListRecentCallRecordsResponseBody\callDetailRecords\list_\callDetailRecord\agents;

use AlibabaCloud\Tea\Model;

class callDetailAgent extends Model
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
    public $contactId;

    /**
     * @var string
     */
    public $feedback;

    /**
     * @var int
     */
    public $holdTime;

    /**
     * @var int
     */
    public $queueTime;

    /**
     * @var int
     */
    public $ringTime;

    /**
     * @var string
     */
    public $satisfaction;

    /**
     * @var string
     */
    public $skillGroupName;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $talkTime;

    /**
     * @var int
     */
    public $workTime;
    protected $_name = [
        'agentId'        => 'AgentId',
        'agentName'      => 'AgentName',
        'contactId'      => 'ContactId',
        'feedback'       => 'Feedback',
        'holdTime'       => 'HoldTime',
        'queueTime'      => 'QueueTime',
        'ringTime'       => 'RingTime',
        'satisfaction'   => 'Satisfaction',
        'skillGroupName' => 'SkillGroupName',
        'startTime'      => 'StartTime',
        'talkTime'       => 'TalkTime',
        'workTime'       => 'WorkTime',
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
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
        }
        if (null !== $this->holdTime) {
            $res['HoldTime'] = $this->holdTime;
        }
        if (null !== $this->queueTime) {
            $res['QueueTime'] = $this->queueTime;
        }
        if (null !== $this->ringTime) {
            $res['RingTime'] = $this->ringTime;
        }
        if (null !== $this->satisfaction) {
            $res['Satisfaction'] = $this->satisfaction;
        }
        if (null !== $this->skillGroupName) {
            $res['SkillGroupName'] = $this->skillGroupName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->talkTime) {
            $res['TalkTime'] = $this->talkTime;
        }
        if (null !== $this->workTime) {
            $res['WorkTime'] = $this->workTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callDetailAgent
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
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }
        if (isset($map['HoldTime'])) {
            $model->holdTime = $map['HoldTime'];
        }
        if (isset($map['QueueTime'])) {
            $model->queueTime = $map['QueueTime'];
        }
        if (isset($map['RingTime'])) {
            $model->ringTime = $map['RingTime'];
        }
        if (isset($map['Satisfaction'])) {
            $model->satisfaction = $map['Satisfaction'];
        }
        if (isset($map['SkillGroupName'])) {
            $model->skillGroupName = $map['SkillGroupName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TalkTime'])) {
            $model->talkTime = $map['TalkTime'];
        }
        if (isset($map['WorkTime'])) {
            $model->workTime = $map['WorkTime'];
        }

        return $model;
    }
}
