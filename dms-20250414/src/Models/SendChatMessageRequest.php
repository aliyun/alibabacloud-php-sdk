<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dms\V20250414\Models\SendChatMessageRequest\dataSource;
use AlibabaCloud\SDK\Dms\V20250414\Models\SendChatMessageRequest\sessionConfig;

class SendChatMessageRequest extends Model
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
     * @var dataSource
     */
    public $dataSource;

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
    public $parentSessionId;

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
     * @var sessionConfig
     */
    public $sessionConfig;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'agentId' => 'AgentId',
        'DMSUnit' => 'DMSUnit',
        'dataSource' => 'DataSource',
        'message' => 'Message',
        'messageType' => 'MessageType',
        'parentSessionId' => 'ParentSessionId',
        'question' => 'Question',
        'quotedMessage' => 'QuotedMessage',
        'replyTo' => 'ReplyTo',
        'sessionConfig' => 'SessionConfig',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        if (null !== $this->dataSource) {
            $this->dataSource->validate();
        }
        if (null !== $this->sessionConfig) {
            $this->sessionConfig->validate();
        }
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

        if (null !== $this->dataSource) {
            $res['DataSource'] = null !== $this->dataSource ? $this->dataSource->toArray($noStream) : $this->dataSource;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->messageType) {
            $res['MessageType'] = $this->messageType;
        }

        if (null !== $this->parentSessionId) {
            $res['ParentSessionId'] = $this->parentSessionId;
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

        if (null !== $this->sessionConfig) {
            $res['SessionConfig'] = null !== $this->sessionConfig ? $this->sessionConfig->toArray($noStream) : $this->sessionConfig;
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
            $model->dataSource = dataSource::fromMap($map['DataSource']);
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['MessageType'])) {
            $model->messageType = $map['MessageType'];
        }

        if (isset($map['ParentSessionId'])) {
            $model->parentSessionId = $map['ParentSessionId'];
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
            $model->sessionConfig = sessionConfig::fromMap($map['SessionConfig']);
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
