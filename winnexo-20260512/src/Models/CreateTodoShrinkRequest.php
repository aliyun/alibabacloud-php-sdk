<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CreateTodoShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $assigneeUserIdsShrink;

    /**
     * @var string
     */
    public $collaborationGroupId;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $questionsShrink;

    /**
     * @var string
     */
    public $sourceContextShrink;

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
        'assigneeUserIdsShrink' => 'assigneeUserIds',
        'collaborationGroupId' => 'collaborationGroupId',
        'priority' => 'priority',
        'questionsShrink' => 'questions',
        'sourceContextShrink' => 'sourceContext',
        'sourceType' => 'sourceType',
        'tenantId' => 'tenantId',
        'title' => 'title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assigneeUserIdsShrink) {
            $res['assigneeUserIds'] = $this->assigneeUserIdsShrink;
        }

        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
        }

        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }

        if (null !== $this->questionsShrink) {
            $res['questions'] = $this->questionsShrink;
        }

        if (null !== $this->sourceContextShrink) {
            $res['sourceContext'] = $this->sourceContextShrink;
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
            $model->assigneeUserIdsShrink = $map['assigneeUserIds'];
        }

        if (isset($map['collaborationGroupId'])) {
            $model->collaborationGroupId = $map['collaborationGroupId'];
        }

        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }

        if (isset($map['questions'])) {
            $model->questionsShrink = $map['questions'];
        }

        if (isset($map['sourceContext'])) {
            $model->sourceContextShrink = $map['sourceContext'];
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
