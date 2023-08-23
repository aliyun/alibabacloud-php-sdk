<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubResponseBody\result;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListSubResponseBody\result\dataList\scheduleInfo;
use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @example 51999575
     *
     * @var string
     */
    public $albumId;

    /**
     * @example https://ailabs.alibabausercontent.com/images/8838/1600839452498.jpg
     *
     * @var string
     */
    public $coverUrl;

    /**
     * @example 2
     *
     * @var int
     */
    public $dailyStudyCnt;

    /**
     * @example 5874DBCCA3038FAA1A70A8060F07F26D
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @example sequence
     *
     * @var string
     */
    public $playMode;

    /**
     * @var scheduleInfo
     */
    public $scheduleInfo;

    /**
     * @example 小科学家探索
     *
     * @var string
     */
    public $title;

    /**
     * @example 1152893538998276761
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'albumId'       => 'AlbumId',
        'coverUrl'      => 'CoverUrl',
        'dailyStudyCnt' => 'DailyStudyCnt',
        'deviceId'      => 'DeviceId',
        'id'            => 'Id',
        'playMode'      => 'PlayMode',
        'scheduleInfo'  => 'ScheduleInfo',
        'title'         => 'Title',
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
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
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
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlbumId'])) {
            $model->albumId = $map['AlbumId'];
        }
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
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
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
