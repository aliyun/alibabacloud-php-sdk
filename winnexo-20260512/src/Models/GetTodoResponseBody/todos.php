<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetTodoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetTodoResponseBody\todos\assignees;

class todos extends Model
{
    /**
     * @var assignees[]
     */
    public $assignees;

    /**
     * @var string
     */
    public $completedAt;

    /**
     * @var string
     */
    public $completedByUserId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var mixed[]
     */
    public $questions;

    /**
     * @var mixed[]
     */
    public $resultPayload;

    /**
     * @var mixed[]
     */
    public $sourceContext;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $todoId;
    protected $_name = [
        'assignees' => 'assignees',
        'completedAt' => 'completedAt',
        'completedByUserId' => 'completedByUserId',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'messageId' => 'messageId',
        'priority' => 'priority',
        'questions' => 'questions',
        'resultPayload' => 'resultPayload',
        'sourceContext' => 'sourceContext',
        'status' => 'status',
        'summary' => 'summary',
        'title' => 'title',
        'todoId' => 'todoId',
    ];

    public function validate()
    {
        if (\is_array($this->assignees)) {
            Model::validateArray($this->assignees);
        }
        if (\is_array($this->questions)) {
            Model::validateArray($this->questions);
        }
        if (\is_array($this->resultPayload)) {
            Model::validateArray($this->resultPayload);
        }
        if (\is_array($this->sourceContext)) {
            Model::validateArray($this->sourceContext);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignees) {
            if (\is_array($this->assignees)) {
                $res['assignees'] = [];
                $n1 = 0;
                foreach ($this->assignees as $item1) {
                    $res['assignees'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->completedAt) {
            $res['completedAt'] = $this->completedAt;
        }

        if (null !== $this->completedByUserId) {
            $res['completedByUserId'] = $this->completedByUserId;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
        }

        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }

        if (null !== $this->questions) {
            if (\is_array($this->questions)) {
                $res['questions'] = [];
                foreach ($this->questions as $key1 => $value1) {
                    $res['questions'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->resultPayload) {
            if (\is_array($this->resultPayload)) {
                $res['resultPayload'] = [];
                foreach ($this->resultPayload as $key1 => $value1) {
                    $res['resultPayload'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->sourceContext) {
            if (\is_array($this->sourceContext)) {
                $res['sourceContext'] = [];
                foreach ($this->sourceContext as $key1 => $value1) {
                    $res['sourceContext'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
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
        if (isset($map['assignees'])) {
            if (!empty($map['assignees'])) {
                $model->assignees = [];
                $n1 = 0;
                foreach ($map['assignees'] as $item1) {
                    $model->assignees[$n1] = assignees::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['completedAt'])) {
            $model->completedAt = $map['completedAt'];
        }

        if (isset($map['completedByUserId'])) {
            $model->completedByUserId = $map['completedByUserId'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }

        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }

        if (isset($map['questions'])) {
            if (!empty($map['questions'])) {
                $model->questions = [];
                foreach ($map['questions'] as $key1 => $value1) {
                    $model->questions[$key1] = $value1;
                }
            }
        }

        if (isset($map['resultPayload'])) {
            if (!empty($map['resultPayload'])) {
                $model->resultPayload = [];
                foreach ($map['resultPayload'] as $key1 => $value1) {
                    $model->resultPayload[$key1] = $value1;
                }
            }
        }

        if (isset($map['sourceContext'])) {
            if (!empty($map['sourceContext'])) {
                $model->sourceContext = [];
                foreach ($map['sourceContext'] as $key1 => $value1) {
                    $model->sourceContext[$key1] = $value1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
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
