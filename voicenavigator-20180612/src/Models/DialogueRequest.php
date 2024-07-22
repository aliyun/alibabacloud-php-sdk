<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class DialogueRequest extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $additionalContext;

    /**
     * @example 10086
     *
     * @var string
     */
    public $calledNumber;

    /**
     * @example 18851708605
     *
     * @var string
     */
    public $callingNumber;

    /**
     * @description This parameter is required.
     *
     * @example da37319b-6c83-4268-9f19-814aed62e401
     *
     * @var string
     */
    public $conversationId;

    /**
     * @var string
     */
    public $emotion;

    /**
     * @description This parameter is required.
     *
     * @example 21e0b2a3-168d-4ba7-9009-afc42666eb54
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1426738157626835
     *
     * @var int
     */
    public $instanceOwnerId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $utterance;
    protected $_name = [
        'additionalContext' => 'AdditionalContext',
        'calledNumber'      => 'CalledNumber',
        'callingNumber'     => 'CallingNumber',
        'conversationId'    => 'ConversationId',
        'emotion'           => 'Emotion',
        'instanceId'        => 'InstanceId',
        'instanceOwnerId'   => 'InstanceOwnerId',
        'utterance'         => 'Utterance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalContext) {
            $res['AdditionalContext'] = $this->additionalContext;
        }
        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }
        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }
        if (null !== $this->emotion) {
            $res['Emotion'] = $this->emotion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceOwnerId) {
            $res['InstanceOwnerId'] = $this->instanceOwnerId;
        }
        if (null !== $this->utterance) {
            $res['Utterance'] = $this->utterance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DialogueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionalContext'])) {
            $model->additionalContext = $map['AdditionalContext'];
        }
        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }
        if (isset($map['CallingNumber'])) {
            $model->callingNumber = $map['CallingNumber'];
        }
        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }
        if (isset($map['Emotion'])) {
            $model->emotion = $map['Emotion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceOwnerId'])) {
            $model->instanceOwnerId = $map['InstanceOwnerId'];
        }
        if (isset($map['Utterance'])) {
            $model->utterance = $map['Utterance'];
        }

        return $model;
    }
}
