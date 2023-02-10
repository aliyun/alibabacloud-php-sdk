<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CancelOTATaskByJobRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $cancelInProgressTask;

    /**
     * @example false
     *
     * @var bool
     */
    public $cancelNotifiedTask;

    /**
     * @example false
     *
     * @var bool
     */
    public $cancelQueuedTask;

    /**
     * @example false
     *
     * @var bool
     */
    public $cancelScheduledTask;

    /**
     * @example false
     *
     * @var bool
     */
    public $cancelUnconfirmedTask;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example 7glPHmaDYLAYMD1HHutT02****
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'cancelInProgressTask'  => 'CancelInProgressTask',
        'cancelNotifiedTask'    => 'CancelNotifiedTask',
        'cancelQueuedTask'      => 'CancelQueuedTask',
        'cancelScheduledTask'   => 'CancelScheduledTask',
        'cancelUnconfirmedTask' => 'CancelUnconfirmedTask',
        'iotInstanceId'         => 'IotInstanceId',
        'jobId'                 => 'JobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cancelInProgressTask) {
            $res['CancelInProgressTask'] = $this->cancelInProgressTask;
        }
        if (null !== $this->cancelNotifiedTask) {
            $res['CancelNotifiedTask'] = $this->cancelNotifiedTask;
        }
        if (null !== $this->cancelQueuedTask) {
            $res['CancelQueuedTask'] = $this->cancelQueuedTask;
        }
        if (null !== $this->cancelScheduledTask) {
            $res['CancelScheduledTask'] = $this->cancelScheduledTask;
        }
        if (null !== $this->cancelUnconfirmedTask) {
            $res['CancelUnconfirmedTask'] = $this->cancelUnconfirmedTask;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
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
        if (isset($map['CancelInProgressTask'])) {
            $model->cancelInProgressTask = $map['CancelInProgressTask'];
        }
        if (isset($map['CancelNotifiedTask'])) {
            $model->cancelNotifiedTask = $map['CancelNotifiedTask'];
        }
        if (isset($map['CancelQueuedTask'])) {
            $model->cancelQueuedTask = $map['CancelQueuedTask'];
        }
        if (isset($map['CancelScheduledTask'])) {
            $model->cancelScheduledTask = $map['CancelScheduledTask'];
        }
        if (isset($map['CancelUnconfirmedTask'])) {
            $model->cancelUnconfirmedTask = $map['CancelUnconfirmedTask'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
