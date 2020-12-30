<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeMetaTablePreviewTaskResponseBody\data;
use AlibabaCloud\Tea\Model;

class DescribeMetaTablePreviewTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $taskId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $taskProcess;

    /**
     * @var int
     */
    public $executeTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var data
     */
    public $data;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'taskId'      => 'TaskId',
        'endTime'     => 'EndTime',
        'requestId'   => 'RequestId',
        'taskProcess' => 'TaskProcess',
        'executeTime' => 'ExecuteTime',
        'startTime'   => 'StartTime',
        'data'        => 'Data',
        'taskStatus'  => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskProcess) {
            $res['TaskProcess'] = $this->taskProcess;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMetaTablePreviewTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskProcess'])) {
            $model->taskProcess = $map['TaskProcess'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
