<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models;

use AlibabaCloud\Dara\Model;

class KopilotChatStreamResponseBody extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $delta;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var string
     */
    public $threadId;

    /**
     * @var string
     */
    public $toolCallId;

    /**
     * @var string
     */
    public $toolCallName;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'content' => 'Content',
        'delta' => 'Delta',
        'message' => 'Message',
        'messageId' => 'MessageId',
        'requestId' => 'RequestId',
        'role' => 'Role',
        'runId' => 'RunId',
        'threadId' => 'ThreadId',
        'toolCallId' => 'ToolCallId',
        'toolCallName' => 'ToolCallName',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->delta) {
            $res['Delta'] = $this->delta;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->runId) {
            $res['RunId'] = $this->runId;
        }

        if (null !== $this->threadId) {
            $res['ThreadId'] = $this->threadId;
        }

        if (null !== $this->toolCallId) {
            $res['ToolCallId'] = $this->toolCallId;
        }

        if (null !== $this->toolCallName) {
            $res['ToolCallName'] = $this->toolCallName;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Delta'])) {
            $model->delta = $map['Delta'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['RunId'])) {
            $model->runId = $map['RunId'];
        }

        if (isset($map['ThreadId'])) {
            $model->threadId = $map['ThreadId'];
        }

        if (isset($map['ToolCallId'])) {
            $model->toolCallId = $map['ToolCallId'];
        }

        if (isset($map['ToolCallName'])) {
            $model->toolCallName = $map['ToolCallName'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
