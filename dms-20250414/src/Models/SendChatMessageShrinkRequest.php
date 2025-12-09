<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class SendChatMessageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $DMSUnit;

    /**
     * @var string
     */
    public $dataSourceShrink;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $messageType;

    /**
     * @var string
     */
    public $question;

    /**
     * @var string
     */
    public $quotedMessage;

    /**
     * @var string
     */
    public $replyTo;

    /**
     * @var string
     */
    public $sessionConfigShrink;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'agentId' => 'AgentId',
        'DMSUnit' => 'DMSUnit',
        'dataSourceShrink' => 'DataSource',
        'message' => 'Message',
        'messageType' => 'MessageType',
        'question' => 'Question',
        'quotedMessage' => 'QuotedMessage',
        'replyTo' => 'ReplyTo',
        'sessionConfigShrink' => 'SessionConfig',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->DMSUnit) {
            $res['DMSUnit'] = $this->DMSUnit;
        }

        if (null !== $this->dataSourceShrink) {
            $res['DataSource'] = $this->dataSourceShrink;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
        }

        if (null !== $this->question) {
            $res['Question'] = $this->question;
        }

        if (null !== $this->quotedMessage) {
            $res['QuotedMessage'] = $this->quotedMessage;
        }

        if (null !== $this->replyTo) {
            $res['ReplyTo'] = $this->replyTo;
        }

        if (null !== $this->sessionConfigShrink) {
            $res['SessionConfig'] = $this->sessionConfigShrink;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['DMSUnit'])) {
            $model->DMSUnit = $map['DMSUnit'];
        }

        if (isset($map['DataSource'])) {
            $model->dataSourceShrink = $map['DataSource'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }

        if (isset($map['Question'])) {
            $model->question = $map['Question'];
        }

        if (isset($map['QuotedMessage'])) {
            $model->quotedMessage = $map['QuotedMessage'];
        }

        if (isset($map['ReplyTo'])) {
            $model->replyTo = $map['ReplyTo'];
        }

        if (isset($map['SessionConfig'])) {
            $model->sessionConfigShrink = $map['SessionConfig'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
