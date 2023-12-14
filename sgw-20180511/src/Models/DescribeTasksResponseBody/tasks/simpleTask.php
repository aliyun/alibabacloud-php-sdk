<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeTasksResponseBody\tasks;

use AlibabaCloud\Tea\Model;

class simpleTask extends Model
{
    /**
     * @example 1578367229
     *
     * @var int
     */
    public $createdTime;

    /**
     * @example xxxxxxxxxx
     *
     * @var string
     */
    public $messageKey;

    /**
     * @example task.name.operate_fast_sync.delete
     *
     * @var string
     */
    public $name;

    /**
     * @example 100
     *
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $relatedResourceId;

    /**
     * @example task.state.completed
     *
     * @var string
     */
    public $stateCode;

    /**
     * @example t-0001xv7je357xl9n***
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 1578367230
     *
     * @var int
     */
    public $updatedTime;
    protected $_name = [
        'createdTime'       => 'CreatedTime',
        'messageKey'        => 'MessageKey',
        'name'              => 'Name',
        'progress'          => 'Progress',
        'relatedResourceId' => 'RelatedResourceId',
        'stateCode'         => 'StateCode',
        'taskId'            => 'TaskId',
        'updatedTime'       => 'UpdatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->messageKey) {
            $res['MessageKey'] = $this->messageKey;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->relatedResourceId) {
            $res['RelatedResourceId'] = $this->relatedResourceId;
        }
        if (null !== $this->stateCode) {
            $res['StateCode'] = $this->stateCode;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return simpleTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['MessageKey'])) {
            $model->messageKey = $map['MessageKey'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RelatedResourceId'])) {
            $model->relatedResourceId = $map['RelatedResourceId'];
        }
        if (isset($map['StateCode'])) {
            $model->stateCode = $map['StateCode'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
