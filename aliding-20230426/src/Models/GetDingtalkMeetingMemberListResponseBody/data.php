<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetDingtalkMeetingMemberListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $channelName;

    /**
     * @var string
     */
    public $conferenceId;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $joinTime;

    /**
     * @var int
     */
    public $leaveTime;

    /**
     * @var string
     */
    public $networkQuality;

    /**
     * @var string
     */
    public $nick;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $unionId;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $workNo;
    protected $_name = [
        'channelName' => 'channelName',
        'conferenceId' => 'conferenceId',
        'deviceType' => 'deviceType',
        'duration' => 'duration',
        'joinTime' => 'joinTime',
        'leaveTime' => 'leaveTime',
        'networkQuality' => 'networkQuality',
        'nick' => 'nick',
        'role' => 'role',
        'sessionId' => 'sessionId',
        'status' => 'status',
        'unionId' => 'unionId',
        'version' => 'version',
        'workNo' => 'workNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelName) {
            $res['channelName'] = $this->channelName;
        }

        if (null !== $this->conferenceId) {
            $res['conferenceId'] = $this->conferenceId;
        }

        if (null !== $this->deviceType) {
            $res['deviceType'] = $this->deviceType;
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->joinTime) {
            $res['joinTime'] = $this->joinTime;
        }

        if (null !== $this->leaveTime) {
            $res['leaveTime'] = $this->leaveTime;
        }

        if (null !== $this->networkQuality) {
            $res['networkQuality'] = $this->networkQuality;
        }

        if (null !== $this->nick) {
            $res['nick'] = $this->nick;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->unionId) {
            $res['unionId'] = $this->unionId;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->workNo) {
            $res['workNo'] = $this->workNo;
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
        if (isset($map['channelName'])) {
            $model->channelName = $map['channelName'];
        }

        if (isset($map['conferenceId'])) {
            $model->conferenceId = $map['conferenceId'];
        }

        if (isset($map['deviceType'])) {
            $model->deviceType = $map['deviceType'];
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['joinTime'])) {
            $model->joinTime = $map['joinTime'];
        }

        if (isset($map['leaveTime'])) {
            $model->leaveTime = $map['leaveTime'];
        }

        if (isset($map['networkQuality'])) {
            $model->networkQuality = $map['networkQuality'];
        }

        if (isset($map['nick'])) {
            $model->nick = $map['nick'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['unionId'])) {
            $model->unionId = $map['unionId'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['workNo'])) {
            $model->workNo = $map['workNo'];
        }

        return $model;
    }
}
