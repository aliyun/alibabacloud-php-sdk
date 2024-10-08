<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateScheduledPreloadExecutionRequest extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @example UpdateScheduledPreloadExecution
     *
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $sliceLen;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'   => 'EndTime',
        'id'        => 'Id',
        'interval'  => 'Interval',
        'sliceLen'  => 'SliceLen',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->sliceLen) {
            $res['SliceLen'] = $this->sliceLen;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateScheduledPreloadExecutionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['SliceLen'])) {
            $model->sliceLen = $map['SliceLen'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
