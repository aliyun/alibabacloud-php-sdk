<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListRecentCallRecordsResponseBody\callDetailRecords\list_\callDetailRecord\agents;

use AlibabaCloud\Tea\Model;

class callDetailAgent extends Model
{
    /**
     * @var string
     */
    public $contactId;

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
    public $skillGroupName;

    /**
     * @var int
     */
    public $queueTime;

    /**
     * @var int
     */
    public $ringTime;

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
    public $holdTime;

    /**
     * @var int
     */
    public $workTime;

    /**
     * @var string
     */
    public $satisfaction;

    /**
     * @var string
     */
    public $feedback;
    protected $_name = [
        'contactId'      => 'ContactId',
        'agentId'        => 'AgentId',
        'agentName'      => 'AgentName',
        'skillGroupName' => 'SkillGroupName',
        'queueTime'      => 'QueueTime',
        'ringTime'       => 'RingTime',
        'startTime'      => 'StartTime',
        'talkTime'       => 'TalkTime',
        'holdTime'       => 'HoldTime',
        'workTime'       => 'WorkTime',
        'satisfaction'   => 'Satisfaction',
        'feedback'       => 'Feedback',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }
        if (null !== $this->skillGroupName) {
            $res['SkillGroupName'] = $this->skillGroupName;
        }
        if (null !== $this->queueTime) {
            $res['QueueTime'] = $this->queueTime;
        }
        if (null !== $this->ringTime) {
            $res['RingTime'] = $this->ringTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->talkTime) {
            $res['TalkTime'] = $this->talkTime;
        }
        if (null !== $this->holdTime) {
            $res['HoldTime'] = $this->holdTime;
        }
        if (null !== $this->workTime) {
            $res['WorkTime'] = $this->workTime;
        }
        if (null !== $this->satisfaction) {
            $res['Satisfaction'] = $this->satisfaction;
        }
        if (null !== $this->feedback) {
            $res['Feedback'] = $this->feedback;
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
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }
        if (isset($map['SkillGroupName'])) {
            $model->skillGroupName = $map['SkillGroupName'];
        }
        if (isset($map['QueueTime'])) {
            $model->queueTime = $map['QueueTime'];
        }
        if (isset($map['RingTime'])) {
            $model->ringTime = $map['RingTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TalkTime'])) {
            $model->talkTime = $map['TalkTime'];
        }
        if (isset($map['HoldTime'])) {
            $model->holdTime = $map['HoldTime'];
        }
        if (isset($map['WorkTime'])) {
            $model->workTime = $map['WorkTime'];
        }
        if (isset($map['Satisfaction'])) {
            $model->satisfaction = $map['Satisfaction'];
        }
        if (isset($map['Feedback'])) {
            $model->feedback = $map['Feedback'];
        }

        return $model;
    }
}
