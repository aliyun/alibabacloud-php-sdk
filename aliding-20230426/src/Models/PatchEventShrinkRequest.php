<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class PatchEventShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $attendeesShrink;

    /**
     * @description This parameter is required.
     *
     * @example primary
     *
     * @var string
     */
    public $calendarId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endShrink;

    /**
     * @description This parameter is required.
     *
     * @example iiiP35sJadba8aBSgjrwPRKgiEiF
     *
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $extraShrink;

    /**
     * @example true
     *
     * @var bool
     */
    public $isAllDay;

    /**
     * @var string
     */
    public $locationShrink;

    /**
     * @var string
     */
    public $recurrenceShrink;

    /**
     * @var string
     */
    public $remindersShrink;

    /**
     * @var string
     */
    public $startShrink;

    /**
     * @var string
     */
    public $summary;
    protected $_name = [
        'attendeesShrink'  => 'Attendees',
        'calendarId'       => 'CalendarId',
        'description'      => 'Description',
        'endShrink'        => 'End',
        'eventId'          => 'EventId',
        'extraShrink'      => 'Extra',
        'isAllDay'         => 'IsAllDay',
        'locationShrink'   => 'Location',
        'recurrenceShrink' => 'Recurrence',
        'remindersShrink'  => 'Reminders',
        'startShrink'      => 'Start',
        'summary'          => 'Summary',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attendeesShrink) {
            $res['Attendees'] = $this->attendeesShrink;
        }
        if (null !== $this->calendarId) {
            $res['CalendarId'] = $this->calendarId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endShrink) {
            $res['End'] = $this->endShrink;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->extraShrink) {
            $res['Extra'] = $this->extraShrink;
        }
        if (null !== $this->isAllDay) {
            $res['IsAllDay'] = $this->isAllDay;
        }
        if (null !== $this->locationShrink) {
            $res['Location'] = $this->locationShrink;
        }
        if (null !== $this->recurrenceShrink) {
            $res['Recurrence'] = $this->recurrenceShrink;
        }
        if (null !== $this->remindersShrink) {
            $res['Reminders'] = $this->remindersShrink;
        }
        if (null !== $this->startShrink) {
            $res['Start'] = $this->startShrink;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PatchEventShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attendees'])) {
            $model->attendeesShrink = $map['Attendees'];
        }
        if (isset($map['CalendarId'])) {
            $model->calendarId = $map['CalendarId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['End'])) {
            $model->endShrink = $map['End'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['Extra'])) {
            $model->extraShrink = $map['Extra'];
        }
        if (isset($map['IsAllDay'])) {
            $model->isAllDay = $map['IsAllDay'];
        }
        if (isset($map['Location'])) {
            $model->locationShrink = $map['Location'];
        }
        if (isset($map['Recurrence'])) {
            $model->recurrenceShrink = $map['Recurrence'];
        }
        if (isset($map['Reminders'])) {
            $model->remindersShrink = $map['Reminders'];
        }
        if (isset($map['Start'])) {
            $model->startShrink = $map['Start'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        return $model;
    }
}
