<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryTaskResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobName;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusDetail;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $utcModified;

    /**
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
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('iotId', $this->iotId, true);
        Model::validateRequired('jobId', $this->jobId, true);
        Model::validateRequired('jobName', $this->jobName, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('productKey', $this->productKey, true);
        Model::validateRequired('progress', $this->progress, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('statusDetail', $this->statusDetail, true);
        Model::validateRequired('taskId', $this->taskId, true);
        Model::validateRequired('utcModified', $this->utcModified, true);
        Model::validateRequired('utcQueueTime', $this->utcQueueTime, true);
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
