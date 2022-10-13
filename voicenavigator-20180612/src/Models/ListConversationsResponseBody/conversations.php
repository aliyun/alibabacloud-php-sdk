<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListConversationsResponseBody;

use AlibabaCloud\Tea\Model;

class conversations extends Model
{
    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string
     */
    public $callingNumber;

    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var int
     */
    public $endReason;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var bool
     */
    public $hasLastPlaybackCompleted;

    /**
     * @var bool
     */
    public $hasToAgent;

    /**
     * @var int
     */
    public $rounds;

    /**
     * @var bool
     */
    public $sandBox;

    /**
     * @var string
     */
    public $skillGroup;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'calledNumber'             => 'CalledNumber',
        'callingNumber'            => 'CallingNumber',
        'conversationId'           => 'ConversationId',
        'endReason'                => 'EndReason',
        'endTime'                  => 'EndTime',
        'hasLastPlaybackCompleted' => 'HasLastPlaybackCompleted',
        'hasToAgent'               => 'HasToAgent',
        'rounds'                   => 'Rounds',
        'sandBox'                  => 'SandBox',
        'skillGroup'               => 'SkillGroup',
        'startTime'                => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }
        if (null !== $this->endReason) {
            $res['EndReason'] = $this->endReason;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->hasLastPlaybackCompleted) {
            $res['HasLastPlaybackCompleted'] = $this->hasLastPlaybackCompleted;
        }
        if (null !== $this->hasToAgent) {
            $res['HasToAgent'] = $this->hasToAgent;
        }
        if (null !== $this->rounds) {
            $res['Rounds'] = $this->rounds;
        }
        if (null !== $this->sandBox) {
            $res['SandBox'] = $this->sandBox;
        }
        if (null !== $this->skillGroup) {
            $res['SkillGroup'] = $this->skillGroup;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conversations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }
        if (isset($map['EndReason'])) {
            $model->endReason = $map['EndReason'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['HasLastPlaybackCompleted'])) {
            $model->hasLastPlaybackCompleted = $map['HasLastPlaybackCompleted'];
        }
        if (isset($map['HasToAgent'])) {
            $model->hasToAgent = $map['HasToAgent'];
        }
        if (isset($map['Rounds'])) {
            $model->rounds = $map['Rounds'];
        }
        if (isset($map['SandBox'])) {
            $model->sandBox = $map['SandBox'];
        }
        if (isset($map['SkillGroup'])) {
            $model->skillGroup = $map['SkillGroup'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
