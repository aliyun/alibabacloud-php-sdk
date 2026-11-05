<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class GetTaskRequest extends Model
{
    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $entityVersionId;

    /**
     * @var string
     */
    public $taskCategory;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'entityId' => 'EntityId',
        'entityType' => 'EntityType',
        'entityVersionId' => 'EntityVersionId',
        'taskCategory' => 'TaskCategory',
        'taskId' => 'TaskId',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->entityVersionId) {
            $res['EntityVersionId'] = $this->entityVersionId;
        }

        if (null !== $this->taskCategory) {
            $res['TaskCategory'] = $this->taskCategory;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
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
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['EntityVersionId'])) {
            $model->entityVersionId = $map['EntityVersionId'];
        }

        if (isset($map['TaskCategory'])) {
            $model->taskCategory = $map['TaskCategory'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
