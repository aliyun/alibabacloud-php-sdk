<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\GetReminderResponseBody\model\remindResponses;

use AlibabaCloud\Tea\Model;

class recurrenceRule extends Model
{
    /**
     * @example 27
     *
     * @var int
     */
    public $day;

    /**
     * @var int[]
     */
    public $daysOfMonth;

    /**
     * @var int[]
     */
    public $daysOfWeek;

    /**
     * @example 1661598000000
     *
     * @var string
     */
    public $endDateTime;

    /**
     * @example WEEKLY
     *
     * @var string
     */
    public $freq;

    /**
     * @example 18
     *
     * @var int
     */
    public $hour;

    /**
     * @example 0
     *
     * @var int
     */
    public $minute;

    /**
     * @example 8
     *
     * @var int
     */
    public $month;

    /**
     * @example 0
     *
     * @var int
     */
    public $second;

    /**
     * @example 1630054800000
     *
     * @var string
     */
    public $startDateTime;

    /**
     * @example 2021
     *
     * @var int
     */
    public $year;
    protected $_name = [
        'day'           => 'Day',
        'daysOfMonth'   => 'DaysOfMonth',
        'daysOfWeek'    => 'DaysOfWeek',
        'endDateTime'   => 'EndDateTime',
        'freq'          => 'Freq',
        'hour'          => 'Hour',
        'minute'        => 'Minute',
        'month'         => 'Month',
        'second'        => 'Second',
        'startDateTime' => 'StartDateTime',
        'year'          => 'Year',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->day) {
            $res['Day'] = $this->day;
        }
        if (null !== $this->daysOfMonth) {
            $res['DaysOfMonth'] = $this->daysOfMonth;
        }
        if (null !== $this->daysOfWeek) {
            $res['DaysOfWeek'] = $this->daysOfWeek;
        }
        if (null !== $this->endDateTime) {
            $res['EndDateTime'] = $this->endDateTime;
        }
        if (null !== $this->freq) {
            $res['Freq'] = $this->freq;
        }
        if (null !== $this->hour) {
            $res['Hour'] = $this->hour;
        }
        if (null !== $this->minute) {
            $res['Minute'] = $this->minute;
        }
        if (null !== $this->month) {
            $res['Month'] = $this->month;
        }
        if (null !== $this->second) {
            $res['Second'] = $this->second;
        }
        if (null !== $this->startDateTime) {
            $res['StartDateTime'] = $this->startDateTime;
        }
        if (null !== $this->year) {
            $res['Year'] = $this->year;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recurrenceRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Day'])) {
            $model->day = $map['Day'];
        }
        if (isset($map['DaysOfMonth'])) {
            if (!empty($map['DaysOfMonth'])) {
                $model->daysOfMonth = $map['DaysOfMonth'];
            }
        }
        if (isset($map['DaysOfWeek'])) {
            if (!empty($map['DaysOfWeek'])) {
                $model->daysOfWeek = $map['DaysOfWeek'];
            }
        }
        if (isset($map['EndDateTime'])) {
            $model->endDateTime = $map['EndDateTime'];
        }
        if (isset($map['Freq'])) {
            $model->freq = $map['Freq'];
        }
        if (isset($map['Hour'])) {
            $model->hour = $map['Hour'];
        }
        if (isset($map['Minute'])) {
            $model->minute = $map['Minute'];
        }
        if (isset($map['Month'])) {
            $model->month = $map['Month'];
        }
        if (isset($map['Second'])) {
            $model->second = $map['Second'];
        }
        if (isset($map['StartDateTime'])) {
            $model->startDateTime = $map['StartDateTime'];
        }
        if (isset($map['Year'])) {
            $model->year = $map['Year'];
        }

        return $model;
    }
}
