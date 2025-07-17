<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class LineageRelationship extends Model
{
    /**
     * @example 1743040581000
     *
     * @var int
     */
    public $createTime;

    /**
     * @var LineageEntity
     */
    public $dstEntity;

    /**
     * @example maxcompute-table.p.table:custom-table.xxx:custom-sql.123
     *
     * @var string
     */
    public $id;

    /**
     * @var LineageEntity
     */
    public $srcEntity;

    /**
     * @var LineageTask
     */
    public $task;
    protected $_name = [
        'createTime' => 'CreateTime',
        'dstEntity' => 'DstEntity',
        'id' => 'Id',
        'srcEntity' => 'SrcEntity',
        'task' => 'Task',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dstEntity) {
            $res['DstEntity'] = null !== $this->dstEntity ? $this->dstEntity->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
     * @return LineageRelationship
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DstEntity'])) {
            $model->dstEntity = LineageEntity::fromMap($map['DstEntity']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
