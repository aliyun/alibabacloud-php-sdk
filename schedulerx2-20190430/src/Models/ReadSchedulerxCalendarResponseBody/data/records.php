<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ReadSchedulerxCalendarResponseBody\data;

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
    public $creator;

    /**
     * @var string
     */
    public $monthDaysContent;

    /**
     * @var bool
     */
    public $systemCalendar;

    /**
     * @var int
     */
    public $year;
    protected $_name = [
        'calendarName' => 'CalendarName',
        'creator' => 'Creator',
        'monthDaysContent' => 'MonthDaysContent',
        'systemCalendar' => 'SystemCalendar',
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

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->monthDaysContent) {
            $res['MonthDaysContent'] = $this->monthDaysContent;
        }

        if (null !== $this->systemCalendar) {
            $res['SystemCalendar'] = $this->systemCalendar;
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

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['MonthDaysContent'])) {
            $model->monthDaysContent = $map['MonthDaysContent'];
        }

        if (isset($map['SystemCalendar'])) {
            $model->systemCalendar = $map['SystemCalendar'];
        }

        if (isset($map['Year'])) {
            $model->year = $map['Year'];
        }

        return $model;
    }
}
