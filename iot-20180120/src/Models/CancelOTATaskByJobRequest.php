<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CancelOTATaskByJobRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var bool
     */
    public $cancelScheduledTask;

    /**
     * @var bool
     */
    public $cancelQueuedTask;

    /**
     * @var bool
     */
    public $cancelInProgressTask;

    /**
     * @var bool
     */
    public $cancelNotifiedTask;
    protected $_name = [
        'iotInstanceId'        => 'IotInstanceId',
        'jobId'                => 'JobId',
        'cancelScheduledTask'  => 'CancelScheduledTask',
        'cancelQueuedTask'     => 'CancelQueuedTask',
        'cancelInProgressTask' => 'CancelInProgressTask',
        'cancelNotifiedTask'   => 'CancelNotifiedTask',
    ];

    public function validate()
    {
        Model::validateRequired('jobId', $this->jobId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->cancelScheduledTask) {
            $res['CancelScheduledTask'] = $this->cancelScheduledTask;
        }
        if (null !== $this->cancelQueuedTask) {
            $res['CancelQueuedTask'] = $this->cancelQueuedTask;
        }
        if (null !== $this->cancelInProgressTask) {
            $res['CancelInProgressTask'] = $this->cancelInProgressTask;
        }
        if (null !== $this->cancelNotifiedTask) {
            $res['CancelNotifiedTask'] = $this->cancelNotifiedTask;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelOTATaskByJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['CancelScheduledTask'])) {
            $model->cancelScheduledTask = $map['CancelScheduledTask'];
        }
        if (isset($map['CancelQueuedTask'])) {
            $model->cancelQueuedTask = $map['CancelQueuedTask'];
        }
        if (isset($map['CancelInProgressTask'])) {
            $model->cancelInProgressTask = $map['CancelInProgressTask'];
        }
        if (isset($map['CancelNotifiedTask'])) {
            $model->cancelNotifiedTask = $map['CancelNotifiedTask'];
        }

        return $model;
    }
}
