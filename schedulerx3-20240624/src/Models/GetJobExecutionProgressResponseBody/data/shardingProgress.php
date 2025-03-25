<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponseBody\data;

use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponseBody\data\shardingProgress\statusType;
use AlibabaCloud\Tea\Model;

class shardingProgress extends Model
{
    /**
     * @description id
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @example 1306189481388277762
     *
     * @var string
     */
    public $jobExecutionId;

    /**
     * @example 2,4,6,8,10
     *
     * @var string
     */
    public $result;

    /**
     * @example 5
     *
     * @var int
     */
    public $status;

    /**
     * @var statusType
     */
    public $statusType;

    /**
     * @example http://192.168.1.9:9999/
     *
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

    public function validate() {}

    public function toMap()
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
            $res['StatusType'] = null !== $this->statusType ? $this->statusType->toMap() : null;
        }
        if (null !== $this->workerAddr) {
            $res['WorkerAddr'] = $this->workerAddr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return shardingProgress
     */
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
