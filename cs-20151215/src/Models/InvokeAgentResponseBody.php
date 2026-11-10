<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\InvokeAgentResponseBody\outcome;

class InvokeAgentResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

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
    public $name;

    /**
     * @var outcome
     */
    public $outcome;

    /**
     * @var string
     */
    public $parentMessageId;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var mixed
     */
    public $snapshot;

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

    /**
     * @var mixed
     */
    public $value;
    protected $_name = [
        'code' => 'code',
        'content' => 'content',
        'delta' => 'delta',
        'message' => 'message',
        'messageId' => 'messageId',
        'name' => 'name',
        'outcome' => 'outcome',
        'parentMessageId' => 'parentMessageId',
        'role' => 'role',
        'runId' => 'runId',
        'snapshot' => 'snapshot',
        'threadId' => 'threadId',
        'toolCallId' => 'toolCallId',
        'toolCallName' => 'toolCallName',
        'type' => 'type',
        'value' => 'value',
    ];

    public function validate()
    {
        if (null !== $this->outcome) {
            $this->outcome->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->delta) {
            $res['delta'] = $this->delta;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->outcome) {
            $res['outcome'] = null !== $this->outcome ? $this->outcome->toArray($noStream) : $this->outcome;
        }

        if (null !== $this->parentMessageId) {
            $res['parentMessageId'] = $this->parentMessageId;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }

        if (null !== $this->snapshot) {
            $res['snapshot'] = $this->snapshot;
        }

        if (null !== $this->threadId) {
            $res['threadId'] = $this->threadId;
        }

        if (null !== $this->toolCallId) {
            $res['toolCallId'] = $this->toolCallId;
        }

        if (null !== $this->toolCallName) {
            $res['toolCallName'] = $this->toolCallName;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['delta'])) {
            $model->delta = $map['delta'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['outcome'])) {
            $model->outcome = outcome::fromMap($map['outcome']);
        }

        if (isset($map['parentMessageId'])) {
            $model->parentMessageId = $map['parentMessageId'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        if (isset($map['snapshot'])) {
            $model->snapshot = $map['snapshot'];
        }

        if (isset($map['threadId'])) {
            $model->threadId = $map['threadId'];
        }

        if (isset($map['toolCallId'])) {
            $model->toolCallId = $map['toolCallId'];
        }

        if (isset($map['toolCallName'])) {
            $model->toolCallName = $map['toolCallName'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
