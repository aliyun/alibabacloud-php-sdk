<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class TimeTrigger extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $launchExpirationTime;

    /**
     * @var string
     */
    public $launchTime;

    /**
     * @var string
     */
    public $recurrenceType;

    /**
     * @var string
     */
    public $recurrenceValue;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'launchExpirationTime' => 'LaunchExpirationTime',
        'launchTime' => 'LaunchTime',
        'recurrenceType' => 'RecurrenceType',
        'recurrenceValue' => 'RecurrenceValue',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->launchExpirationTime) {
            $res['LaunchExpirationTime'] = $this->launchExpirationTime;
        }

        if (null !== $this->launchTime) {
            $res['LaunchTime'] = $this->launchTime;
        }

        if (null !== $this->recurrenceType) {
            $res['RecurrenceType'] = $this->recurrenceType;
        }

        if (null !== $this->recurrenceValue) {
            $res['RecurrenceValue'] = $this->recurrenceValue;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['LaunchExpirationTime'])) {
            $model->launchExpirationTime = $map['LaunchExpirationTime'];
        }

        if (isset($map['LaunchTime'])) {
            $model->launchTime = $map['LaunchTime'];
        }

        if (isset($map['RecurrenceType'])) {
            $model->recurrenceType = $map['RecurrenceType'];
        }

        if (isset($map['RecurrenceValue'])) {
            $model->recurrenceValue = $map['RecurrenceValue'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
