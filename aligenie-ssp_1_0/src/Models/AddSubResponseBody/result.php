<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddSubResponseBody;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\AddSubResponseBody\result\scheduleInfo;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $albumId;

    /**
     * @var int
     */
    public $dailyStudyCnt;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $playMode;

    /**
     * @var scheduleInfo
     */
    public $scheduleInfo;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'albumId'       => 'AlbumId',
        'dailyStudyCnt' => 'DailyStudyCnt',
        'deviceId'      => 'DeviceId',
        'id'            => 'Id',
        'playMode'      => 'PlayMode',
        'scheduleInfo'  => 'ScheduleInfo',
        'userId'        => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->albumId) {
            $res['AlbumId'] = $this->albumId;
        }
        if (null !== $this->dailyStudyCnt) {
            $res['DailyStudyCnt'] = $this->dailyStudyCnt;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->playMode) {
            $res['PlayMode'] = $this->playMode;
        }
        if (null !== $this->scheduleInfo) {
            $res['ScheduleInfo'] = null !== $this->scheduleInfo ? $this->scheduleInfo->toMap() : null;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlbumId'])) {
            $model->albumId = $map['AlbumId'];
        }
        if (isset($map['DailyStudyCnt'])) {
            $model->dailyStudyCnt = $map['DailyStudyCnt'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PlayMode'])) {
            $model->playMode = $map['PlayMode'];
        }
        if (isset($map['ScheduleInfo'])) {
            $model->scheduleInfo = scheduleInfo::fromMap($map['ScheduleInfo']);
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
