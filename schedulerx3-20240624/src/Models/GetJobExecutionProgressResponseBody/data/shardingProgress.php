<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponseBody\data\shardingProgress\statusType;

class shardingProgress extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $jobExecutionId;

    /**
     * @var string
     */
    public $result;

    /**
     * @var int
     */
    public $status;

    /**
     * @var statusType
     */
    public $statusType;

    /**
     * @var string
     */
    public $workerAddr;
    protected $_name = [
        'id' => 'Id',
        'jobExecutionId' => 'JobExecutionId',
        'result' => 'Result',
        'status' => 'Status',
        'statusType' => 'StatusType',
        'workerAddr' => 'WorkerAddr',
    ];

    public function validate()
    {
        if (null !== $this->statusType) {
            $this->statusType->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->jobExecutionId) {
            $res['JobExecutionId'] = $this->jobExecutionId;
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusType) {
            $res['StatusType'] = null !== $this->statusType ? $this->statusType->toArray($noStream) : $this->statusType;
        }

        if (null !== $this->workerAddr) {
            $res['WorkerAddr'] = $this->workerAddr;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['JobExecutionId'])) {
            $model->jobExecutionId = $map['JobExecutionId'];
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusType'])) {
            $model->statusType = statusType::fromMap($map['StatusType']);
        }

        if (isset($map['WorkerAddr'])) {
            $model->workerAddr = $map['WorkerAddr'];
        }

        return $model;
    }
}
