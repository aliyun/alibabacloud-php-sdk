<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class CreateEventShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $attendeesShrink;

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
    public $onlineMeetingInfoShrink;

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
    public $richTextDescriptionShrink;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $uiConfigsShrink;

    /**
     * @example primary
     *
     * @var string
     */
    public $calendarId;

    /**
     * @var string
     */
    public $startShrink;
    protected $_name = [
        'attendeesShrink'           => 'Attendees',
        'description'               => 'Description',
        'endShrink'                 => 'End',
        'extraShrink'               => 'Extra',
        'isAllDay'                  => 'IsAllDay',
        'locationShrink'            => 'Location',
        'onlineMeetingInfoShrink'   => 'OnlineMeetingInfo',
        'recurrenceShrink'          => 'Recurrence',
        'remindersShrink'           => 'Reminders',
        'richTextDescriptionShrink' => 'RichTextDescription',
        'summary'                   => 'Summary',
        'uiConfigsShrink'           => 'UiConfigs',
        'calendarId'                => 'calendarId',
        'startShrink'               => 'start',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endShrink) {
            $res['End'] = $this->endShrink;
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
        if (null !== $this->onlineMeetingInfoShrink) {
            $res['OnlineMeetingInfo'] = $this->onlineMeetingInfoShrink;
        }
        if (null !== $this->recurrenceShrink) {
            $res['Recurrence'] = $this->recurrenceShrink;
        }
        if (null !== $this->remindersShrink) {
            $res['Reminders'] = $this->remindersShrink;
        }
        if (null !== $this->richTextDescriptionShrink) {
            $res['RichTextDescription'] = $this->richTextDescriptionShrink;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->uiConfigsShrink) {
            $res['UiConfigs'] = $this->uiConfigsShrink;
        }
        if (null !== $this->calendarId) {
            $res['calendarId'] = $this->calendarId;
        }
        if (null !== $this->startShrink) {
            $res['start'] = $this->startShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEventShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attendees'])) {
            $model->attendeesShrink = $map['Attendees'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['End'])) {
            $model->endShrink = $map['End'];
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
        if (isset($map['OnlineMeetingInfo'])) {
            $model->onlineMeetingInfoShrink = $map['OnlineMeetingInfo'];
        }
        if (isset($map['Recurrence'])) {
            $model->recurrenceShrink = $map['Recurrence'];
        }
        if (isset($map['Reminders'])) {
            $model->remindersShrink = $map['Reminders'];
        }
        if (isset($map['RichTextDescription'])) {
            $model->richTextDescriptionShrink = $map['RichTextDescription'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['UiConfigs'])) {
            $model->uiConfigsShrink = $map['UiConfigs'];
        }
        if (isset($map['calendarId'])) {
            $model->calendarId = $map['calendarId'];
        }
        if (isset($map['start'])) {
            $model->startShrink = $map['start'];
        }

        return $model;
    }
}
