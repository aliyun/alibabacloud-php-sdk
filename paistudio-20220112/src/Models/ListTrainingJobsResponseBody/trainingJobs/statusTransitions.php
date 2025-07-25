<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobsResponseBody\trainingJobs;

use AlibabaCloud\Tea\Model;

class statusTransitions extends Model
{
    /**
     * @example 2024-07-10T11:49:47Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example TrainingJobSucceed
     *
     * @var string
     */
    public $reasonCode;

    /**
     * @example KubeDL job runs successfully
     *
     * @var string
     */
    public $reasonMessage;

    /**
     * @example 2024-07-10T11:49:47Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example Creating
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'endTime' => 'EndTime',
        'reasonCode' => 'ReasonCode',
        'reasonMessage' => 'ReasonMessage',
        'startTime' => 'StartTime',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }
        if (null !== $this->reasonMessage) {
            $res['ReasonMessage'] = $this->reasonMessage;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statusTransitions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }
        if (isset($map['ReasonMessage'])) {
            $model->reasonMessage = $map['ReasonMessage'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
