<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\ListOperationActivityResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $activityId;

    /**
     * @var string
     */
    public $activityStatus;

    /**
     * @var int
     */
    public $consoleRetryCount;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $errMessage;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'activityId' => 'ActivityId',
        'activityStatus' => 'ActivityStatus',
        'consoleRetryCount' => 'ConsoleRetryCount',
        'endTime' => 'EndTime',
        'errMessage' => 'ErrMessage',
        'name' => 'Name',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }

        if (null !== $this->activityStatus) {
            $res['ActivityStatus'] = $this->activityStatus;
        }

        if (null !== $this->consoleRetryCount) {
            $res['ConsoleRetryCount'] = $this->consoleRetryCount;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->errMessage) {
            $res['ErrMessage'] = $this->errMessage;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }

        if (isset($map['ActivityStatus'])) {
            $model->activityStatus = $map['ActivityStatus'];
        }

        if (isset($map['ConsoleRetryCount'])) {
            $model->consoleRetryCount = $map['ConsoleRetryCount'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ErrMessage'])) {
            $model->errMessage = $map['ErrMessage'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
