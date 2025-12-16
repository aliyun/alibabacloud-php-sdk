<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Dara\Model;

class ReadSchedulerxCalendarRequest extends Model
{
    /**
     * @var string
     */
    public $calendarName;

    /**
     * @var bool
     */
    public $fetchCalendarDetail;

    /**
     * @var bool
     */
    public $fetchSystemCalendar;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

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
        'fetchCalendarDetail' => 'FetchCalendarDetail',
        'fetchSystemCalendar' => 'FetchSystemCalendar',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
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

        if (null !== $this->fetchCalendarDetail) {
            $res['FetchCalendarDetail'] = $this->fetchCalendarDetail;
        }

        if (null !== $this->fetchSystemCalendar) {
            $res['FetchSystemCalendar'] = $this->fetchSystemCalendar;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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

        if (isset($map['FetchCalendarDetail'])) {
            $model->fetchCalendarDetail = $map['FetchCalendarDetail'];
        }

        if (isset($map['FetchSystemCalendar'])) {
            $model->fetchSystemCalendar = $map['FetchSystemCalendar'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
