<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\GetMessagesResponseBody\data;

use AlibabaCloud\Dara\Model;

class events extends Model
{
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
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $roundId;

    /**
     * @var mixed[]
     */
    public $toolArguments;

    /**
     * @var string
     */
    public $toolName;

    /**
     * @var string
     */
    public $answer;

    /**
     * @var string
     */
    public $event;
    protected $_name = [
        'approvalStatus' => 'ApprovalStatus',
        'callId' => 'CallId',
        'conversationId' => 'ConversationId',
        'description' => 'Description',
        'messageId' => 'MessageId',
        'roundId' => 'RoundId',
        'toolArguments' => 'ToolArguments',
        'toolName' => 'ToolName',
        'answer' => 'answer',
        'event' => 'event',
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
        if (null !== $this->approvalStatus) {
            $res['ApprovalStatus'] = $this->approvalStatus;
        }

        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }

        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        if (null !== $this->roundId) {
            $res['RoundId'] = $this->roundId;
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

        if (null !== $this->answer) {
            $res['answer'] = $this->answer;
        }

        if (null !== $this->event) {
            $res['event'] = $this->event;
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
        if (isset($map['ApprovalStatus'])) {
            $model->approvalStatus = $map['ApprovalStatus'];
        }

        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }

        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        if (isset($map['RoundId'])) {
            $model->roundId = $map['RoundId'];
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

        if (isset($map['answer'])) {
            $model->answer = $map['answer'];
        }

        if (isset($map['event'])) {
            $model->event = $map['event'];
        }

        return $model;
    }
}
