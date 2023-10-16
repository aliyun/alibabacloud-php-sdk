<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\QueryConversationsResponseBody;

use AlibabaCloud\Tea\Model;

class conversations extends Model
{
    /**
     * @example 1582183381000
     *
     * @var int
     */
    public $beginTime;

    /**
     * @example 02811111111
     *
     * @var string
     */
    public $callingNumber;

    /**
     * @example af81a389-91f0-4157-8d82-720edd02b66a
     *
     * @var string
     */
    public $conversationId;

    /**
     * @example 8
     *
     * @var int
     */
    public $effectiveAnswerCount;

    /**
     * @example 1582183481000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example AAA
     *
     * @var string
     */
    public $skillGroupId;

    /**
     * @example true
     *
     * @var bool
     */
    public $transferredToAgent;

    /**
     * @example 10
     *
     * @var int
     */
    public $userUtteranceCount;
    protected $_name = [
        'beginTime'            => 'BeginTime',
        'callingNumber'        => 'CallingNumber',
        'conversationId'       => 'ConversationId',
        'effectiveAnswerCount' => 'EffectiveAnswerCount',
        'endTime'              => 'EndTime',
        'skillGroupId'         => 'SkillGroupId',
        'transferredToAgent'   => 'TransferredToAgent',
        'userUtteranceCount'   => 'UserUtteranceCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }
        if (null !== $this->effectiveAnswerCount) {
            $res['EffectiveAnswerCount'] = $this->effectiveAnswerCount;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->transferredToAgent) {
            $res['TransferredToAgent'] = $this->transferredToAgent;
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
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }
        if (isset($map['EffectiveAnswerCount'])) {
            $model->effectiveAnswerCount = $map['EffectiveAnswerCount'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['TransferredToAgent'])) {
            $model->transferredToAgent = $map['TransferredToAgent'];
        }
        if (isset($map['UserUtteranceCount'])) {
            $model->userUtteranceCount = $map['UserUtteranceCount'];
        }

        return $model;
    }
}
