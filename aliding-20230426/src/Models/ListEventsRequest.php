<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class ListEventsRequest extends Model
{
    /**
     * @var string
     */
    public $calendarId;
    /**
     * @var int
     */
    public $maxAttendees;
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
    public $seriesMasterId;
    /**
     * @var bool
     */
    public $showDeleted;
    /**
     * @var string
     */
    public $syncToken;
    /**
     * @var string
     */
    public $timeMax;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
