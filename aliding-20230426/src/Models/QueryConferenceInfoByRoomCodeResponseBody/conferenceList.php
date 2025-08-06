<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceInfoByRoomCodeResponseBody;

use AlibabaCloud\Dara\Model;

class conferenceList extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var int
     */
    public $confDuration;

    /**
     * @var string
     */
    public $conferenceId;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $creatorNick;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $externalLinkUrl;

    /**
     * @var string
     */
    public $roomCode;

    /**
     * @var string
     */
    public $scheduleConferenceId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'bizType' => 'BizType',
        'confDuration' => 'ConfDuration',
        'conferenceId' => 'ConferenceId',
        'creatorId' => 'CreatorId',
        'creatorNick' => 'CreatorNick',
        'endTime' => 'EndTime',
        'externalLinkUrl' => 'ExternalLinkUrl',
        'roomCode' => 'RoomCode',
        'scheduleConferenceId' => 'ScheduleConferenceId',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->confDuration) {
            $res['ConfDuration'] = $this->confDuration;
        }

        if (null !== $this->conferenceId) {
            $res['ConferenceId'] = $this->conferenceId;
        }

        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }

        if (null !== $this->creatorNick) {
            $res['CreatorNick'] = $this->creatorNick;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->externalLinkUrl) {
            $res['ExternalLinkUrl'] = $this->externalLinkUrl;
        }

        if (null !== $this->roomCode) {
            $res['RoomCode'] = $this->roomCode;
        }

        if (null !== $this->scheduleConferenceId) {
            $res['ScheduleConferenceId'] = $this->scheduleConferenceId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['ConfDuration'])) {
            $model->confDuration = $map['ConfDuration'];
        }

        if (isset($map['ConferenceId'])) {
            $model->conferenceId = $map['ConferenceId'];
        }

        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }

        if (isset($map['CreatorNick'])) {
            $model->creatorNick = $map['CreatorNick'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['ExternalLinkUrl'])) {
            $model->externalLinkUrl = $map['ExternalLinkUrl'];
        }

        if (isset($map['RoomCode'])) {
            $model->roomCode = $map['RoomCode'];
        }

        if (isset($map['ScheduleConferenceId'])) {
            $model->scheduleConferenceId = $map['ScheduleConferenceId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
