<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceInfoResponseBody;

use AlibabaCloud\Tea\Model;

class confInfo extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $activeNum;

    /**
     * @example 2
     *
     * @var int
     */
    public $attendNum;

    /**
     * @example 1000000
     *
     * @var int
     */
    public $confDuration;

    /**
     * @example 607452e01401526ee39609e1
     *
     * @var string
     */
    public $conferenceId;

    /**
     * @example 208579
     *
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $creatorNick;

    /**
     * @example 1663294270000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example https://meeting.dingtalk.com/app?roomCode=42726xxx&token=1_7ac9xxx
     *
     * @var string
     */
    public $externalLinkUrl;

    /**
     * @example 2
     *
     * @var int
     */
    public $invitedNum;

    /**
     * @example 4272xxxxx
     *
     * @var string
     */
    public $roomCode;

    /**
     * @example 1663293270000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'activeNum'       => 'ActiveNum',
        'attendNum'       => 'AttendNum',
        'confDuration'    => 'ConfDuration',
        'conferenceId'    => 'ConferenceId',
        'creatorId'       => 'CreatorId',
        'creatorNick'     => 'CreatorNick',
        'endTime'         => 'EndTime',
        'externalLinkUrl' => 'ExternalLinkUrl',
        'invitedNum'      => 'InvitedNum',
        'roomCode'        => 'RoomCode',
        'startTime'       => 'StartTime',
        'status'          => 'Status',
        'title'           => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return confInfo
     */
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
