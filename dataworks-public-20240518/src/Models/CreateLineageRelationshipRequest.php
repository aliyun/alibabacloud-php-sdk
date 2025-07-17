<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

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
     * @description The task information.
     *
     * @var LineageTask
     */
    public $task;
    protected $_name = [
        'dstEntity' => 'DstEntity',
        'srcEntity' => 'SrcEntity',
        'task' => 'Task',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstEntity) {
            $res['DstEntity'] = null !== $this->dstEntity ? $this->dstEntity->toMap() : null;
        }
        if (null !== $this->srcEntity) {
            $res['SrcEntity'] = null !== $this->srcEntity ? $this->srcEntity->toMap() : null;
        }
        if (null !== $this->task) {
            $res['Task'] = null !== $this->task ? $this->task->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLineageRelationshipRequest
     */
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
