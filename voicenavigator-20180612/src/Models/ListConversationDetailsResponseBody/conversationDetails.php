<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models\ListConversationDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class conversationDetails extends Model
{
    /**
     * @example Dialogue
     *
     * @var string
     */
    public $action;

    /**
     * @example {}
     *
     * @var string
     */
    public $actionParams;

    /**
     * @example af81a389-91f0-4157-8d82-720edd02b66a
     *
     * @var string
     */
    public $conversationId;

    /**
     * @example 1582266750353
     *
     * @var int
     */
    public $createTime;

    /**
     * @example af81a389-91f0-4157-8d82-720edd02b66a
     *
     * @var string
     */
    public $sequenceId;

    /**
     * @example Chatbot
     *
     * @var string
     */
    public $speaker;

    /**
     * @var string
     */
    public $utterance;
    protected $_name = [
        'action'         => 'Action',
        'actionParams'   => 'ActionParams',
        'conversationId' => 'ConversationId',
        'createTime'     => 'CreateTime',
        'sequenceId'     => 'SequenceId',
        'speaker'        => 'Speaker',
        'utterance'      => 'Utterance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->actionParams) {
            $res['ActionParams'] = $this->actionParams;
        }
        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->sequenceId) {
            $res['SequenceId'] = $this->sequenceId;
        }
        if (null !== $this->speaker) {
            $res['Speaker'] = $this->speaker;
        }
        if (null !== $this->utterance) {
            $res['Utterance'] = $this->utterance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conversationDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['ActionParams'])) {
            $model->actionParams = $map['ActionParams'];
        }
        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SequenceId'])) {
            $model->sequenceId = $map['SequenceId'];
        }
        if (isset($map['Speaker'])) {
            $model->speaker = $map['Speaker'];
        }
        if (isset($map['Utterance'])) {
            $model->utterance = $map['Utterance'];
        }

        return $model;
    }
}
