<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBatchTaskResponseBody;

use AlibabaCloud\Dara\Model;

class subTasks extends Model
{
    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskBegin;

    /**
     * @var string
     */
    public $taskEnd;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'errorMsg' => 'ErrorMsg',
        'instanceId' => 'InstanceId',
        'status' => 'Status',
        'taskBegin' => 'TaskBegin',
        'taskEnd' => 'TaskEnd',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskBegin) {
            $res['TaskBegin'] = $this->taskBegin;
        }

        if (null !== $this->taskEnd) {
            $res['TaskEnd'] = $this->taskEnd;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskBegin'])) {
            $model->taskBegin = $map['TaskBegin'];
        }

        if (isset($map['TaskEnd'])) {
            $model->taskEnd = $map['TaskEnd'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
