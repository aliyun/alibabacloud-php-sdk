<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryTaskResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example mydevice
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example BDjhI****01
     *
     * @var string
     */
    public $iotId;

    /**
     * @example sGWotgRkutxX*****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example MyTestJobIax6Eq
     *
     * @var string
     */
    public $jobName;

    /**
     * @example this is message about task execution
     *
     * @var string
     */
    public $message;

    /**
     * @example a1S****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example 80
     *
     * @var string
     */
    public $progress;

    /**
     * @example SUCCEEDED
     *
     * @var string
     */
    public $status;

    /**
     * @example { "msg":"this is message reported by device" }
     *
     * @var string
     */
    public $statusDetail;

    /**
     * @example MSnT9***q010101
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 2019-05-21T13:03:56.000Z
     *
     * @var string
     */
    public $utcModified;

    /**
     * @example 2019-05-21T13:03:53.000Z
     *
     * @var string
     */
    public $utcQueueTime;
    protected $_name = [
        'deviceName'   => 'DeviceName',
        'iotId'        => 'IotId',
        'jobId'        => 'JobId',
        'jobName'      => 'JobName',
        'message'      => 'Message',
        'productKey'   => 'ProductKey',
        'progress'     => 'Progress',
        'status'       => 'Status',
        'statusDetail' => 'StatusDetail',
        'taskId'       => 'TaskId',
        'utcModified'  => 'UtcModified',
        'utcQueueTime' => 'UtcQueueTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusDetail) {
            $res['StatusDetail'] = $this->statusDetail;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->utcModified) {
            $res['UtcModified'] = $this->utcModified;
        }
        if (null !== $this->utcQueueTime) {
            $res['UtcQueueTime'] = $this->utcQueueTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusDetail'])) {
            $model->statusDetail = $map['StatusDetail'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['UtcModified'])) {
            $model->utcModified = $map['UtcModified'];
        }
        if (isset($map['UtcQueueTime'])) {
            $model->utcQueueTime = $map['UtcQueueTime'];
        }

        return $model;
    }
}
