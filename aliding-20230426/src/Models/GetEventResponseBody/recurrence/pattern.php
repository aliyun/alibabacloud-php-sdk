<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetEventResponseBody\recurrence;

use AlibabaCloud\Tea\Model;

class pattern extends Model
{
    /**
     * @example 14
     *
     * @var int
     */
    public $dayOfMonth;

    /**
     * @example monday
     *
     * @var string
     */
    public $daysOfWeek;

    /**
     * @example first
     *
     * @var string
     */
    public $index;

    /**
     * @example 1
     *
     * @var int
     */
    public $interval;

    /**
     * @example daily
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'dayOfMonth' => 'DayOfMonth',
        'daysOfWeek' => 'DaysOfWeek',
        'index'      => 'Index',
        'interval'   => 'Interval',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dayOfMonth) {
            $res['DayOfMonth'] = $this->dayOfMonth;
        }
        if (null !== $this->daysOfWeek) {
            $res['DaysOfWeek'] = $this->daysOfWeek;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pattern
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DayOfMonth'])) {
            $model->dayOfMonth = $map['DayOfMonth'];
        }
        if (isset($map['DaysOfWeek'])) {
            $model->daysOfWeek = $map['DaysOfWeek'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
