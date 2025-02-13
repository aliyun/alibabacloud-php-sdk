<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryScheduleConferenceInfoResponseBody;

use AlibabaCloud\Dara\Model;

class conferenceList extends Model
{
    /**
     * @var string
     */
    public $conferenceId;
    /**
     * @var int
     */
    public $endTime;
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
        'conferenceId' => 'ConferenceId',
        'endTime'      => 'EndTime',
        'roomCode'     => 'RoomCode',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
        'title'        => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conferenceId) {
            $res['ConferenceId'] = $this->conferenceId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (isset($map['ConferenceId'])) {
            $model->conferenceId = $map['ConferenceId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
