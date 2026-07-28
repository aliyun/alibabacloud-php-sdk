<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ChatAiAgentResponseBody\items;
use AlibabaCloud\SDK\Ververica\V20220718\Models\ChatAiAgentResponseBody\usage;

class ChatAiAgentResponseBody extends Model
{
    /**
     * @var bool
     */
    public $completed;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $errorType;

    /**
     * @var string
     */
    public $event;

    /**
     * @var mixed
     */
    public $input;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $success;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $toolCallId;

    /**
     * @var string
     */
    public $toolName;

    /**
     * @var usage
     */
    public $usage;
    protected $_name = [
        'completed' => 'completed',
        'displayName' => 'displayName',
        'errorMessage' => 'errorMessage',
        'errorType' => 'errorType',
        'event' => 'event',
        'input' => 'input',
        'items' => 'items',
        'message' => 'message',
        'sessionId' => 'sessionId',
        'success' => 'success',
        'text' => 'text',
        'toolCallId' => 'toolCallId',
        'toolName' => 'toolName',
        'usage' => 'usage',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        if (null !== $this->usage) {
            $this->usage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completed) {
            $res['completed'] = $this->completed;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->errorType) {
            $res['errorType'] = $this->errorType;
        }

        if (null !== $this->event) {
            $res['event'] = $this->event;
        }

        if (null !== $this->input) {
            $res['input'] = $this->input;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        if (null !== $this->toolCallId) {
            $res['toolCallId'] = $this->toolCallId;
        }

        if (null !== $this->toolName) {
            $res['toolName'] = $this->toolName;
        }

        if (null !== $this->usage) {
            $res['usage'] = null !== $this->usage ? $this->usage->toArray($noStream) : $this->usage;
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
        if (isset($map['completed'])) {
            $model->completed = $map['completed'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['errorType'])) {
            $model->errorType = $map['errorType'];
        }

        if (isset($map['event'])) {
            $model->event = $map['event'];
        }

        if (isset($map['input'])) {
            $model->input = $map['input'];
        }

        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        if (isset($map['toolCallId'])) {
            $model->toolCallId = $map['toolCallId'];
        }

        if (isset($map['toolName'])) {
            $model->toolName = $map['toolName'];
        }

        if (isset($map['usage'])) {
            $model->usage = usage::fromMap($map['usage']);
        }

        return $model;
    }
}
