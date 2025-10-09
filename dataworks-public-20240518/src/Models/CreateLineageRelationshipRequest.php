<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class CreateLineageRelationshipRequest extends Model
{
    /**
     * @var LineageEntity
     */
    public $dstEntity;

    /**
     * @var LineageEntity
     */
    public $srcEntity;

    /**
     * @var LineageTask
     */
    public $task;
    protected $_name = [
        'dstEntity' => 'DstEntity',
        'srcEntity' => 'SrcEntity',
        'task' => 'Task',
    ];

    public function validate()
    {
        if (null !== $this->dstEntity) {
            $this->dstEntity->validate();
        }
        if (null !== $this->srcEntity) {
            $this->srcEntity->validate();
        }
        if (null !== $this->task) {
            $this->task->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dstEntity) {
            $res['DstEntity'] = null !== $this->dstEntity ? $this->dstEntity->toArray($noStream) : $this->dstEntity;
        }

        if (null !== $this->srcEntity) {
            $res['SrcEntity'] = null !== $this->srcEntity ? $this->srcEntity->toArray($noStream) : $this->srcEntity;
        }

        if (null !== $this->task) {
            $res['Task'] = null !== $this->task ? $this->task->toArray($noStream) : $this->task;
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
        if (isset($map['DstEntity'])) {
            $model->dstEntity = LineageEntity::fromMap($map['DstEntity']);
        }

        if (isset($map['SrcEntity'])) {
            $model->srcEntity = LineageEntity::fromMap($map['SrcEntity']);
        }

        if (isset($map['Task'])) {
            $model->task = LineageTask::fromMap($map['Task']);
        }

        return $model;
    }
}
