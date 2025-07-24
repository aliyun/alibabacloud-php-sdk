<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyElasticityAssuranceRequest;

use AlibabaCloud\Tea\Model;

class recurrenceRules extends Model
{
    /**
     * @description The end time of the assurance period for the capacity reservation of the time-segmented elasticity assurance. Specify an on-the-hour point in time.
     *
     * @example 10
     *
     * @var int
     */
    public $endHour;

    /**
     * @description The type of the assurance schedule. Valid values:
     *
     *   Daily
     *   Weekly
     *   Monthly
     *
     * >  If you specify this parameter, you must specify `RecurrenceType` and `RecurrenceValue`.
     *
     * @example Daily
     *
     * @var string
     */
    public $recurrenceType;

    /**
     * @description The days of the week or month on which the capacity reservation of the time-segmented elasticity assurance takes effect or the interval, in number of days, at which the capacity reservation takes effect.
     *
     *   If you set `RecurrenceType` to `Daily`, you can specify only one value. Valid values: 1 to 31. The value specifies that the capacity reservation takes effect every few days.
     *   If you set `RecurrenceType` to `Weekly`, you can specify multiple values. Separate the values with commas (,). Valid values: 0, 1, 2, 3, 4, 5, and 6, which specify Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, and Saturday, respectively. Example: `1,2`, which specifies that the capacity reservation takes effect on Monday and Tuesday.
     *   If you set `RecurrenceType` to `Monthly`, you can specify two values in the `A-B` format. Valid values of A and B: 1 to 31. B must be greater than or equal to A. Example: `1-5`, which specifies that the capacity reservation takes effect every day from the first day up to the fifth day of each month.
     *
     * >  If this parameter is specified, you must specify `RecurrenceType` and `RecurrenceValue`.
     *
     * @example 5
     *
     * @var string
     */
    public $recurrenceValue;

    /**
     * @description The start time of the assurance period for the capacity reservation of the time-segmented elasticity assurance. Specify an on-the-hour point in time.
     *
     * >  You must specify both `StartHour` and `EndHour`. The EndHour value must be at least 4 hours later than the StartHour value.
     *
     * @example 4
     *
     * @var int
     */
    public $startHour;
    protected $_name = [
        'endHour' => 'EndHour',
        'recurrenceType' => 'RecurrenceType',
        'recurrenceValue' => 'RecurrenceValue',
        'startHour' => 'StartHour',
    ];

    public function validate() {}

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
