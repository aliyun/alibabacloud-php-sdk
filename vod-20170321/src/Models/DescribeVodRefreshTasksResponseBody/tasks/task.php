<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodRefreshTasksResponseBody\tasks;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $process;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $objectPath;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'status'       => 'Status',
        'creationTime' => 'CreationTime',
        'objectType'   => 'ObjectType',
        'process'      => 'Process',
        'description'  => 'Description',
        'objectPath'   => 'ObjectPath',
        'taskId'       => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->objectPath) {
            $res['ObjectPath'] = $this->objectPath;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return task
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ObjectPath'])) {
            $model->objectPath = $map['ObjectPath'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
