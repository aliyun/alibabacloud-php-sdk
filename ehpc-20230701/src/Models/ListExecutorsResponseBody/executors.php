<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20230701\Models\ListExecutorsResponseBody;

use AlibabaCloud\Tea\Model;

class executors extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $arrayIndex;

    /**
     * @example 2024-02-20 10:04:10
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2024-02-20 10:04:18
     *
     * @var string
     */
    public $endTime;

    /**
     * @example job-xxxx-task0-1
     *
     * @var string
     */
    public $executorId;

    /**
     * @var string[]
     */
    public $hostName;

    /**
     * @var string[]
     */
    public $ipAddress;

    /**
     * @example job-hy1nggvyukuvkrtfpe70
     *
     * @var string
     */
    public $jobId;

    /**
     * @example testJob
     *
     * @var string
     */
    public $jobName;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example Succeeded to release executor resource
     *
     * @var string
     */
    public $statusReason;

    /**
     * @example task0
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'arrayIndex'   => 'ArrayIndex',
        'createTime'   => 'CreateTime',
        'endTime'      => 'EndTime',
        'executorId'   => 'ExecutorId',
        'hostName'     => 'HostName',
        'ipAddress'    => 'IpAddress',
        'jobId'        => 'JobId',
        'jobName'      => 'JobName',
        'status'       => 'Status',
        'statusReason' => 'StatusReason',
        'taskName'     => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arrayIndex) {
            $res['ArrayIndex'] = $this->arrayIndex;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->executorId) {
            $res['ExecutorId'] = $this->executorId;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArrayIndex'])) {
            $model->arrayIndex = $map['ArrayIndex'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExecutorId'])) {
            $model->executorId = $map['ExecutorId'];
        }
        if (isset($map['HostName'])) {
            if (!empty($map['HostName'])) {
                $model->hostName = $map['HostName'];
            }
        }
        if (isset($map['IpAddress'])) {
            if (!empty($map['IpAddress'])) {
                $model->ipAddress = $map['IpAddress'];
            }
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
