<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class ListEventsRequest extends Model
{
    /**
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
     * @example cnNTbW1YbxxxxdlQrQT09
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example cnNTbWxxxxaFJZdEgvdlQrQT09
     *
     * @var string
     */
    public $seriesMasterId;

    /**
     * @example true
     *
     * @var bool
     */
    public $showDeleted;

    /**
     * @example zxcasdfvc000009
     *
     * @var string
     */
    public $syncToken;

    /**
     * @example 2023-06-21T00:00:00+08:00
     *
     * @var string
     */
    public $timeMax;

    /**
     * @example 2023-06-20T00:00:00+08:00
     *
     * @var string
     */
    public $timeMin;
    protected $_name = [
        'calendarId'     => 'CalendarId',
        'maxAttendees'   => 'MaxAttendees',
        'maxResults'     => 'MaxResults',
        'nextToken'      => 'NextToken',
        'seriesMasterId' => 'SeriesMasterId',
        'showDeleted'    => 'ShowDeleted',
        'syncToken'      => 'SyncToken',
        'timeMax'        => 'TimeMax',
        'timeMin'        => 'TimeMin',
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
        if (null !== $this->seriesMasterId) {
            $res['SeriesMasterId'] = $this->seriesMasterId;
        }
        if (null !== $this->showDeleted) {
            $res['ShowDeleted'] = $this->showDeleted;
        }
        if (null !== $this->syncToken) {
            $res['SyncToken'] = $this->syncToken;
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
     * @return ListEventsRequest
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
        if (isset($map['SeriesMasterId'])) {
            $model->seriesMasterId = $map['SeriesMasterId'];
        }
        if (isset($map['ShowDeleted'])) {
            $model->showDeleted = $map['ShowDeleted'];
        }
        if (isset($map['SyncToken'])) {
            $model->syncToken = $map['SyncToken'];
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
