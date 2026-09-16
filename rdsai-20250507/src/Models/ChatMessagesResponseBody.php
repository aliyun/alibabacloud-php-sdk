<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;

class ChatMessagesResponseBody extends Model
{
    /**
     * @var string
     */
    public $answer;

    /**
     * @var string
     */
    public $approvalStatus;

    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $roundId;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var mixed[]
     */
    public $toolArguments;

    /**
     * @var string
     */
    public $toolName;
    protected $_name = [
        'answer' => 'Answer',
        'approvalStatus' => 'ApprovalStatus',
        'callId' => 'CallId',
        'conversationId' => 'ConversationId',
        'createdAt' => 'CreatedAt',
        'description' => 'Description',
        'event' => 'Event',
        'id' => 'Id',
        'messageId' => 'MessageId',
        'mode' => 'Mode',
        'requestId' => 'RequestId',
        'roundId' => 'RoundId',
        'taskId' => 'TaskId',
        'toolArguments' => 'ToolArguments',
        'toolName' => 'ToolName',
    ];

    public function validate()
    {
        if (\is_array($this->toolArguments)) {
            Model::validateArray($this->toolArguments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->answer) {
            $res['Answer'] = $this->answer;
        }

        if (null !== $this->approvalStatus) {
            $res['ApprovalStatus'] = $this->approvalStatus;
        }

        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }

        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->roundId) {
            $res['RoundId'] = $this->roundId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->toolArguments) {
            if (\is_array($this->toolArguments)) {
                $res['ToolArguments'] = [];
                foreach ($this->toolArguments as $key1 => $value1) {
                    $res['ToolArguments'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->toolName) {
            $res['ToolName'] = $this->toolName;
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
        if (isset($map['Answer'])) {
            $model->answer = $map['Answer'];
        }

        if (isset($map['ApprovalStatus'])) {
            $model->approvalStatus = $map['ApprovalStatus'];
        }

        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }

        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RoundId'])) {
            $model->roundId = $map['RoundId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['ToolArguments'])) {
            if (!empty($map['ToolArguments'])) {
                $model->toolArguments = [];
                foreach ($map['ToolArguments'] as $key1 => $value1) {
                    $model->toolArguments[$key1] = $value1;
                }
            }
        }

        if (isset($map['ToolName'])) {
            $model->toolName = $map['ToolName'];
        }

        return $model;
    }
}
