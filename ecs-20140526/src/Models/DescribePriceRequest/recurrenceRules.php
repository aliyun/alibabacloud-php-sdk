<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceRequest;

use AlibabaCloud\Tea\Model;

class recurrenceRules extends Model
{
    /**
     * @description The time when the time-segmented assurance ends. The value must be on the hour.
     *
     * @example 10
     *
     * @var int
     */
    public $endHour;

    /**
     * @description The type of the recurrence rule. Valid values:
     *
     *   Daily
     *   Weekly
     *   Monthly
     *
     * >  If this parameter is specified, specify `RecurrenceType` and `RecurrenceValue`.
     * @example Daily
     *
     * @var string
     */
    public $recurrenceType;

    /**
     * @description The recurrency value of the time-segmented assurance.
     *
     *   If you set `RecurrenceType` to `Daily`, you can set RecurrenceValue to only one value. Valid values: 1 to 31. The time-segmented assurance is performed every few days.
     *   If you set `RecurrenceType` to `Weekly`, you can set RecurrenceValue to one or more values. Separate the values with commas (,). The values that correspond to Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, and Saturday are 0, 1, 2, 3, 4, 5, and 6. For example, `1,2` indicates that the time-segmented assurance is performed on Monday and Tuesday of every week.
     *   If you set `RecurrenceType` to `Monthly`, you can set RecurrenceValue to two values in the `A-B` format. Valid values of A and B: 1 to 31. B must be greater than or equal to A. For example, `1-5` indicates that the time-segmented assurance is performed from the 1st to the 5th of each month.
     *
     * >  If this parameter is specified, you must specify `RecurrenceType` and `RecurrenceValue`.
     * @example 5
     *
     * @var string
     */
    public $recurrenceValue;

    /**
     * @description The time when the time-segmented assurance takes effect. The value must be on the hour.
     *
     * >  You must specify both StartHour and EndHour. The EndHour time must be at least 4 hours later than the StartHour time.
     * @example 4
     *
     * @var int
     */
    public $startHour;
    protected $_name = [
        'endHour'         => 'EndHour',
        'recurrenceType'  => 'RecurrenceType',
        'recurrenceValue' => 'RecurrenceValue',
        'startHour'       => 'StartHour',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endHour) {
            $res['EndHour'] = $this->endHour;
        }
        if (null !== $this->recurrenceType) {
            $res['RecurrenceType'] = $this->recurrenceType;
        }
        if (null !== $this->recurrenceValue) {
            $res['RecurrenceValue'] = $this->recurrenceValue;
        }
        if (null !== $this->startHour) {
            $res['StartHour'] = $this->startHour;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recurrenceRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndHour'])) {
            $model->endHour = $map['EndHour'];
        }
        if (isset($map['RecurrenceType'])) {
            $model->recurrenceType = $map['RecurrenceType'];
        }
        if (isset($map['RecurrenceValue'])) {
            $model->recurrenceValue = $map['RecurrenceValue'];
        }
        if (isset($map['StartHour'])) {
            $model->startHour = $map['StartHour'];
        }

        return $model;
    }
}
