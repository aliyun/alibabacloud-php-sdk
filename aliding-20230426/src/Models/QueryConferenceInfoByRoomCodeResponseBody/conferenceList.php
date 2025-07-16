<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceInfoByRoomCodeResponseBody;

use AlibabaCloud\Tea\Model;

class conferenceList extends Model
{
    /**
     * @example 3
     *
     * @var string
     */
    public $bizType;

    /**
     * @example 1000
     *
     * @var int
     */
    public $confDuration;

    /**
     * @example 636cf59f2b032f014ae32902
     *
     * @var string
     */
    public $conferenceId;

    /**
     * @example 527079
     *
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $creatorNick;

    /**
     * @example 1668087732000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example https//:xxx
     *
     * @var string
     */
    public $externalLinkUrl;

    /**
     * @example 123456789
     *
     * @var string
     */
    public $roomCode;

    /**
     * @example 2d79cbde-b9d8-4256-9788-78b05834944e
     *
     * @var string
     */
    public $scheduleConferenceId;

    /**
     * @example 1668087731000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 2
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return conferenceList
     */
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
