<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Dara\Model;

class ManageSchedulerxCalendarRequest extends Model
{
    /**
     * @var string
     */
    public $calendarName;

    /**
     * @var bool
     */
    public $incremental;

    /**
     * @var string
     */
    public $monthDaysContent;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $year;
    protected $_name = [
        'calendarName' => 'CalendarName',
        'incremental' => 'Incremental',
        'monthDaysContent' => 'MonthDaysContent',
        'regionId' => 'RegionId',
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

        if (null !== $this->incremental) {
            $res['Incremental'] = $this->incremental;
        }

        if (null !== $this->monthDaysContent) {
            $res['MonthDaysContent'] = $this->monthDaysContent;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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

        if (isset($map['Incremental'])) {
            $model->incremental = $map['Incremental'];
        }

        if (isset($map['MonthDaysContent'])) {
            $model->monthDaysContent = $map['MonthDaysContent'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Year'])) {
            $model->year = $map['Year'];
        }

        return $model;
    }
}
