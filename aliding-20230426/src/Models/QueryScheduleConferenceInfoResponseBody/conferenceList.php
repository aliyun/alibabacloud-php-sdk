<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryScheduleConferenceInfoResponseBody;

use AlibabaCloud\Tea\Model;

class conferenceList extends Model
{
    /**
     * @example 636cf59f2b032f014ae32902
     *
     * @var string
     */
    public $conferenceId;

    /**
     * @example 1668087732000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 123456789
     *
     * @var string
     */
    public $roomCode;

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
     * @example xxx发起的视频会议
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return conferenceList
     */
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
