<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeCSGClientTasksResponseBody;

use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $messageKey;

    /**
     * @var string
     */
    public $messageParams;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $stateCode;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $updatedTime;
    protected $_name = [
        'createdTime'   => 'CreatedTime',
        'messageKey'    => 'MessageKey',
        'messageParams' => 'MessageParams',
        'name'          => 'Name',
        'progress'      => 'Progress',
        'stateCode'     => 'StateCode',
        'taskId'        => 'TaskId',
        'updatedTime'   => 'UpdatedTime',
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
        if (null !== $this->messageParams) {
            $res['MessageParams'] = $this->messageParams;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
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
     * @return tasks
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
        if (isset($map['MessageParams'])) {
            $model->messageParams = $map['MessageParams'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
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
