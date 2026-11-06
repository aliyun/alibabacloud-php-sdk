<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetWorkItemAuditResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var mixed
     */
    public $changes;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $occurredAt;

    /**
     * @var string
     */
    public $operatorName;

    /**
     * @var string
     */
    public $operatorUserId;

    /**
     * @var mixed[]
     */
    public $questions;

    /**
     * @var mixed
     */
    public $resultPayload;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $todoId;
    protected $_name = [
        'changes' => 'changes',
        'description' => 'description',
        'eventId' => 'eventId',
        'eventType' => 'eventType',
        'occurredAt' => 'occurredAt',
        'operatorName' => 'operatorName',
        'operatorUserId' => 'operatorUserId',
        'questions' => 'questions',
        'resultPayload' => 'resultPayload',
        'status' => 'status',
        'title' => 'title',
        'todoId' => 'todoId',
    ];

    public function validate()
    {
        if (\is_array($this->questions)) {
            Model::validateArray($this->questions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changes) {
            $res['changes'] = $this->changes;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->eventId) {
            $res['eventId'] = $this->eventId;
        }

        if (null !== $this->eventType) {
            $res['eventType'] = $this->eventType;
        }

        if (null !== $this->occurredAt) {
            $res['occurredAt'] = $this->occurredAt;
        }

        if (null !== $this->operatorName) {
            $res['operatorName'] = $this->operatorName;
        }

        if (null !== $this->operatorUserId) {
            $res['operatorUserId'] = $this->operatorUserId;
        }

        if (null !== $this->questions) {
            if (\is_array($this->questions)) {
                $res['questions'] = [];
                $n1 = 0;
                foreach ($this->questions as $item1) {
                    $res['questions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resultPayload) {
            $res['resultPayload'] = $this->resultPayload;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->todoId) {
            $res['todoId'] = $this->todoId;
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
        if (isset($map['changes'])) {
            $model->changes = $map['changes'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['eventId'])) {
            $model->eventId = $map['eventId'];
        }

        if (isset($map['eventType'])) {
            $model->eventType = $map['eventType'];
        }

        if (isset($map['occurredAt'])) {
            $model->occurredAt = $map['occurredAt'];
        }

        if (isset($map['operatorName'])) {
            $model->operatorName = $map['operatorName'];
        }

        if (isset($map['operatorUserId'])) {
            $model->operatorUserId = $map['operatorUserId'];
        }

        if (isset($map['questions'])) {
            if (!empty($map['questions'])) {
                $model->questions = [];
                $n1 = 0;
                foreach ($map['questions'] as $item1) {
                    $model->questions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['resultPayload'])) {
            $model->resultPayload = $map['resultPayload'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['todoId'])) {
            $model->todoId = $map['todoId'];
        }

        return $model;
    }
}
