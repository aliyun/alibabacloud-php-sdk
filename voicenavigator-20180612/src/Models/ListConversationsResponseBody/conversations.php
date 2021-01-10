<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListConversationsResponseBody;

use AlibabaCloud\Tea\Model;

class conversations extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $effectiveAnswerCount;

    /**
     * @var bool
     */
    public $transferredToAgent;

    /**
     * @var int
     */
    public $beginTime;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var string
     */
    public $callingNumber;

    /**
     * @var int
     */
    public $userUtteranceCount;
    protected $_name = [
        'endTime'              => 'EndTime',
        'effectiveAnswerCount' => 'EffectiveAnswerCount',
        'transferredToAgent'   => 'TransferredToAgent',
        'beginTime'            => 'BeginTime',
        'skillGroupId'         => 'SkillGroupId',
        'conversationId'       => 'ConversationId',
        'callingNumber'        => 'CallingNumber',
        'userUtteranceCount'   => 'UserUtteranceCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->effectiveAnswerCount) {
            $res['EffectiveAnswerCount'] = $this->effectiveAnswerCount;
        }
        if (null !== $this->transferredToAgent) {
            $res['TransferredToAgent'] = $this->transferredToAgent;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->userUtteranceCount) {
            $res['UserUtteranceCount'] = $this->userUtteranceCount;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EffectiveAnswerCount'])) {
            $model->effectiveAnswerCount = $map['EffectiveAnswerCount'];
        }
        if (isset($map['TransferredToAgent'])) {
            $model->transferredToAgent = $map['TransferredToAgent'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['UserUtteranceCount'])) {
            $model->userUtteranceCount = $map['UserUtteranceCount'];
        }

        return $model;
    }
}
