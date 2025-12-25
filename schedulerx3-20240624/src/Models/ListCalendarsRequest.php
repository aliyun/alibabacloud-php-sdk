<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Dara\Model;

class ListCalendarsRequest extends Model
{
    /**
     * @var string
     */
    public $calendarName;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var bool
     */
    public $fetchCalendarDetail;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $year;
    protected $_name = [
        'calendarName' => 'CalendarName',
        'clusterId' => 'ClusterId',
        'fetchCalendarDetail' => 'FetchCalendarDetail',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
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

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->fetchCalendarDetail) {
            $res['FetchCalendarDetail'] = $this->fetchCalendarDetail;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['FetchCalendarDetail'])) {
            $model->fetchCalendarDetail = $map['FetchCalendarDetail'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Year'])) {
            $model->year = $map['Year'];
        }

        return $model;
    }
}
