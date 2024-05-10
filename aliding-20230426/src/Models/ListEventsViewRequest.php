<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class ListEventsViewRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example primary
     *
     * @var string
     */
    public $calendarId;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxAttendees;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example cnNTbW1xxx
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 2022-11-28T00:00:00+08:00
     *
     * @var string
     */
    public $timeMax;

    /**
     * @example 2022-11-27T00:00:00+08:00
     *
     * @var string
     */
    public $timeMin;
    protected $_name = [
        'calendarId'   => 'CalendarId',
        'maxAttendees' => 'MaxAttendees',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'timeMax'      => 'TimeMax',
        'timeMin'      => 'TimeMin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calendarId) {
            $res['CalendarId'] = $this->calendarId;
        }
        if (null !== $this->maxAttendees) {
            $res['MaxAttendees'] = $this->maxAttendees;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->timeMax) {
            $res['TimeMax'] = $this->timeMax;
        }
        if (null !== $this->timeMin) {
            $res['TimeMin'] = $this->timeMin;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEventsViewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalendarId'])) {
            $model->calendarId = $map['CalendarId'];
        }
        if (isset($map['MaxAttendees'])) {
            $model->maxAttendees = $map['MaxAttendees'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['TimeMax'])) {
            $model->timeMax = $map['TimeMax'];
        }
        if (isset($map['TimeMin'])) {
            $model->timeMin = $map['TimeMin'];
        }

        return $model;
    }
}
