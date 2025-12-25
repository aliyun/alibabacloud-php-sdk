<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListCalendarsResponseBody\data;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $calendarName;

    /**
     * @var string
     */
    public $months;

    /**
     * @var int
     */
    public $year;
    protected $_name = [
        'calendarName' => 'CalendarName',
        'months' => 'Months',
        'year' => 'Year',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calendarName) {
            $res['CalendarName'] = $this->calendarName;
        }

        if (null !== $this->months) {
            $res['Months'] = $this->months;
        }

        if (null !== $this->year) {
            $res['Year'] = $this->year;
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
        if (isset($map['CalendarName'])) {
            $model->calendarName = $map['CalendarName'];
        }

        if (isset($map['Months'])) {
            $model->months = $map['Months'];
        }

        if (isset($map['Year'])) {
            $model->year = $map['Year'];
        }

        return $model;
    }
}
