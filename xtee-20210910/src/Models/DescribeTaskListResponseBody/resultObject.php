<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeTaskListResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var int
     */
    public $completionTime;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $mark;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $sceneName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $taskLogId;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'completionTime' => 'completionTime',
        'createTime'     => 'createTime',
        'id'             => 'id',
        'mark'           => 'mark',
        'remark'         => 'remark',
        'sceneName'      => 'sceneName',
        'status'         => 'status',
        'taskLogId'      => 'taskLogId',
        'taskType'       => 'taskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completionTime) {
            $res['completionTime'] = $this->completionTime;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->mark) {
            $res['mark'] = $this->mark;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->sceneName) {
            $res['sceneName'] = $this->sceneName;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->taskLogId) {
            $res['taskLogId'] = $this->taskLogId;
        }
        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['completionTime'])) {
            $model->completionTime = $map['completionTime'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['mark'])) {
            $model->mark = $map['mark'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['sceneName'])) {
            $model->sceneName = $map['sceneName'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['taskLogId'])) {
            $model->taskLogId = $map['taskLogId'];
        }
        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }

        return $model;
    }
}
