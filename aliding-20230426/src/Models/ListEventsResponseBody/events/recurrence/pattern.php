<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListEventsResponseBody\events\recurrence;

use AlibabaCloud\Dara\Model;

class pattern extends Model
{
    /**
     * @var int
     */
    public $dayOfMonth;

    /**
     * @var string
     */
    public $daysOfWeek;

    /**
     * @var string
     */
    public $index;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'dayOfMonth' => 'DayOfMonth',
        'daysOfWeek' => 'DaysOfWeek',
        'index' => 'Index',
        'interval' => 'Interval',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
