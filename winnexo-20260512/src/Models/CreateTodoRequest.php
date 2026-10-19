<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateTodoRequest\questions;

class CreateTodoRequest extends Model
{
    /**
     * @var string[]
     */
    public $assigneeUserIds;

    /**
     * @var string
     */
    public $collaborationGroupId;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var questions[]
     */
    public $questions;

    /**
     * @var mixed[]
     */
    public $sourceContext;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'assigneeUserIds' => 'assigneeUserIds',
        'collaborationGroupId' => 'collaborationGroupId',
        'priority' => 'priority',
        'questions' => 'questions',
        'sourceContext' => 'sourceContext',
        'sourceType' => 'sourceType',
        'tenantId' => 'tenantId',
        'title' => 'title',
    ];

    public function validate()
    {
        if (\is_array($this->assigneeUserIds)) {
            Model::validateArray($this->assigneeUserIds);
        }
        if (\is_array($this->questions)) {
            Model::validateArray($this->questions);
        }
        if (\is_array($this->sourceContext)) {
            Model::validateArray($this->sourceContext);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assigneeUserIds) {
            if (\is_array($this->assigneeUserIds)) {
                $res['assigneeUserIds'] = [];
                $n1 = 0;
                foreach ($this->assigneeUserIds as $item1) {
                    $res['assigneeUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
        }

        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }

        if (null !== $this->questions) {
            if (\is_array($this->questions)) {
                $res['questions'] = [];
                $n1 = 0;
                foreach ($this->questions as $item1) {
                    $res['questions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['assigneeUserIds'])) {
            if (!empty($map['assigneeUserIds'])) {
                $model->assigneeUserIds = [];
                $n1 = 0;
                foreach ($map['assigneeUserIds'] as $item1) {
                    $model->assigneeUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['collaborationGroupId'])) {
            $model->collaborationGroupId = $map['collaborationGroupId'];
        }

        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }

        if (isset($map['questions'])) {
            if (!empty($map['questions'])) {
                $model->questions = [];
                $n1 = 0;
                foreach ($map['questions'] as $item1) {
                    $model->questions[$n1] = questions::fromMap($item1);
                    ++$n1;
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

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
