<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreateAlarmRequest\payload\scheduleInfo;

use AlibabaCloud\Tea\Model;

class once extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $day;

    /**
     * @example 10
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
     * @example 2022
     *
     * @var int
     */
    public $year;
    protected $_name = [
        'day'    => 'Day',
        'hour'   => 'Hour',
        'minute' => 'Minute',
        'month'  => 'Month',
        'year'   => 'Year',
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
        if (null !== $this->hour) {
            $res['Hour'] = $this->hour;
        }
        if (null !== $this->minute) {
            $res['Minute'] = $this->minute;
        }
        if (null !== $this->month) {
            $res['Month'] = $this->month;
        }
        if (null !== $this->year) {
            $res['Year'] = $this->year;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return once
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Day'])) {
            $model->day = $map['Day'];
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
        if (isset($map['Year'])) {
            $model->year = $map['Year'];
        }

        return $model;
    }
}
