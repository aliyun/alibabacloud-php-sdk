<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListRelationTasksResponseBody;

use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'createTime'    => 'createTime',
        'moduleId'      => 'moduleId',
        'moduleVersion' => 'moduleVersion',
        'name'          => 'name',
        'status'        => 'status',
        'taskId'        => 'taskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }
        if (null !== $this->moduleVersion) {
            $res['moduleVersion'] = $this->moduleVersion;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }
        if (isset($map['moduleVersion'])) {
            $model->moduleVersion = $map['moduleVersion'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
