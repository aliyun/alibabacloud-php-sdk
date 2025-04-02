<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceInfoResponseBody;

use AlibabaCloud\Dara\Model;

class confInfo extends Model
{
    /**
     * @var int
     */
    public $activeNum;

    /**
     * @var int
     */
    public $attendNum;

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
     * @var int
     */
    public $invitedNum;

    /**
     * @var string
     */
    public $roomCode;

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
        'activeNum' => 'ActiveNum',
        'attendNum' => 'AttendNum',
        'confDuration' => 'ConfDuration',
        'conferenceId' => 'ConferenceId',
        'creatorId' => 'CreatorId',
        'creatorNick' => 'CreatorNick',
        'endTime' => 'EndTime',
        'externalLinkUrl' => 'ExternalLinkUrl',
        'invitedNum' => 'InvitedNum',
        'roomCode' => 'RoomCode',
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
        if (null !== $this->activeNum) {
            $res['ActiveNum'] = $this->activeNum;
        }

        if (null !== $this->attendNum) {
            $res['AttendNum'] = $this->attendNum;
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

        if (null !== $this->invitedNum) {
            $res['InvitedNum'] = $this->invitedNum;
        }

        if (null !== $this->roomCode) {
            $res['RoomCode'] = $this->roomCode;
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
        if (isset($map['ActiveNum'])) {
            $model->activeNum = $map['ActiveNum'];
        }

        if (isset($map['AttendNum'])) {
            $model->attendNum = $map['AttendNum'];
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

        if (isset($map['InvitedNum'])) {
            $model->invitedNum = $map['InvitedNum'];
        }

        if (isset($map['RoomCode'])) {
            $model->roomCode = $map['RoomCode'];
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
