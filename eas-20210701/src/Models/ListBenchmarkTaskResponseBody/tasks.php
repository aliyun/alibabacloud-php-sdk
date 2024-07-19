<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\ListBenchmarkTaskResponseBody;

use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @description The number of instances that are available for stress testing.
     *
     * @example 2
     *
     * @var int
     */
    public $availableAgent;

    /**
     * @description The time when the stress testing task was created.
     *
     * @example 2020-12-04T02:43:15Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The returned message.
     *
     * @example Benchmark task [benchmark-larec-test-1076] is Running
     *
     * @var string
     */
    public $message;

    /**
     * @description The region ID of the stress testing task.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The name of the service on which you want to perform a stress testing.
     *
     * @example test_quota
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The state of the stress testing task.
     *
     * Valid values:
     *
     *   Creating
     *
     * <!-- -->
     *
     *   Starting
     *
     * <!-- -->
     *
     *   DeleteFailed
     *
     * <!-- -->
     *
     *   Running
     *
     * <!-- -->
     *
     *   Stopping
     *
     * <!-- -->
     *
     *   Error
     *
     * <!-- -->
     *
     *   Updating
     *
     * <!-- -->
     *
     *   Deleting
     *
     * <!-- -->
     *
     *   CreateFailed
     *
     * <!-- -->
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the stress testing task.
     *
     * @example eas-b-gv4y86uvgt****i
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The name of the stress testing task.
     *
     * @example benchmark-larec-test-1076
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The time when the stress testing task was updated.
     *
     * @example 2020-06-24T03:11:30Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'availableAgent' => 'AvailableAgent',
        'createTime'     => 'CreateTime',
        'message'        => 'Message',
        'region'         => 'Region',
        'serviceName'    => 'ServiceName',
        'status'         => 'Status',
        'taskId'         => 'TaskId',
        'taskName'       => 'TaskName',
        'updateTime'     => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableAgent) {
            $res['AvailableAgent'] = $this->availableAgent;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AvailableAgent'])) {
            $model->availableAgent = $map['AvailableAgent'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
