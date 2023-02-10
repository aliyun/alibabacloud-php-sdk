<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\ListBenchmarkTaskResponseBody;

use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $availableAgent;

    /**
     * @example 2020-12-04T02:43:15Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example Benchmark task [benchmark-larec-test-1076] is Running
     *
     * @var string
     */
    public $message;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @example test_quota
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example eas-b-gv4y86uvgt****i
     *
     * @var string
     */
    public $taskId;

    /**
     * @example benchmark-larec-test-1076
     *
     * @var string
     */
    public $taskName;

    /**
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
