<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class PatchEventShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $attendeesShrink;

    /**
     * @var string
     */
    public $calendarId;

    /**
     * @var string
     */
    public $cardInstancesShrink;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endShrink;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $extraShrink;

    /**
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

    /**
     * @var string
     */
    public $categoriesShrink;

    /**
     * @var string
     */
    public $freeBusyStatus;

    /**
     * @var string
     */
    public $onlineMeetingInfoShrink;

    /**
     * @var string
     */
    public $richTextDescriptionShrink;

    /**
     * @var string
     */
    public $uiConfigsShrink;
    protected $_name = [
        'attendeesShrink' => 'Attendees',
        'calendarId' => 'CalendarId',
        'cardInstancesShrink' => 'CardInstances',
        'description' => 'Description',
        'endShrink' => 'End',
        'eventId' => 'EventId',
        'extraShrink' => 'Extra',
        'isAllDay' => 'IsAllDay',
        'locationShrink' => 'Location',
        'recurrenceShrink' => 'Recurrence',
        'remindersShrink' => 'Reminders',
        'startShrink' => 'Start',
        'summary' => 'Summary',
        'categoriesShrink' => 'categories',
        'freeBusyStatus' => 'freeBusyStatus',
        'onlineMeetingInfoShrink' => 'onlineMeetingInfo',
        'richTextDescriptionShrink' => 'richTextDescription',
        'uiConfigsShrink' => 'uiConfigs',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attendeesShrink) {
            $res['Attendees'] = $this->attendeesShrink;
        }

        if (null !== $this->calendarId) {
            $res['CalendarId'] = $this->calendarId;
        }

        if (null !== $this->cardInstancesShrink) {
            $res['CardInstances'] = $this->cardInstancesShrink;
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

        if (null !== $this->categoriesShrink) {
            $res['categories'] = $this->categoriesShrink;
        }

        if (null !== $this->freeBusyStatus) {
            $res['freeBusyStatus'] = $this->freeBusyStatus;
        }

        if (null !== $this->onlineMeetingInfoShrink) {
            $res['onlineMeetingInfo'] = $this->onlineMeetingInfoShrink;
        }

        if (null !== $this->richTextDescriptionShrink) {
            $res['richTextDescription'] = $this->richTextDescriptionShrink;
        }

        if (null !== $this->uiConfigsShrink) {
            $res['uiConfigs'] = $this->uiConfigsShrink;
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
        if (isset($map['Attendees'])) {
            $model->attendeesShrink = $map['Attendees'];
        }

        if (isset($map['CalendarId'])) {
            $model->calendarId = $map['CalendarId'];
        }

        if (isset($map['CardInstances'])) {
            $model->cardInstancesShrink = $map['CardInstances'];
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

        if (isset($map['categories'])) {
            $model->categoriesShrink = $map['categories'];
        }

        if (isset($map['freeBusyStatus'])) {
            $model->freeBusyStatus = $map['freeBusyStatus'];
        }

        if (isset($map['onlineMeetingInfo'])) {
            $model->onlineMeetingInfoShrink = $map['onlineMeetingInfo'];
        }

        if (isset($map['richTextDescription'])) {
            $model->richTextDescriptionShrink = $map['richTextDescription'];
        }

        if (isset($map['uiConfigs'])) {
            $model->uiConfigsShrink = $map['uiConfigs'];
        }

        return $model;
    }
}
