<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveResponseBody;

use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveResponseBody\result\artcInfo;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveResponseBody\result\playUrlInfoList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 主播ID
     *
     * @var string
     */
    public $anchorId;

    /**
     * @description 直播资源的唯一标识ID
     *
     * @var string
     */
    public $liveId;

    /**
     * @description 直播标题
     *
     * @var string
     */
    public $title;

    /**
     * @description 直播回放地址
     *
     * @var string
     */
    public $playbackUrl;

    /**
     * @description 直播创建时间（毫秒ms）
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 直播结束时间（毫秒ms）
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 直播持续时间（毫秒ms）
     *
     * @var int
     */
    public $duration;

    /**
     * @description 直播推流地址
     *
     * @var string
     */
    public $pushUrl;

    /**
     * @description 直播拉流地址
     *
     * @var string
     */
    public $liveUrl;

    /**
     * @description 直播状态：Created-已创建，未开播，Living-直播中，End-直播结束
     *
     * @var string
     */
    public $status;

    /**
     * @description 直播简介
     *
     * @var string
     */
    public $introduction;

    /**
     * @description 房间id
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 租户名
     *
     * @var string
     */
    public $appId;

    /**
     * @description 创建直播用户
     *
     * @var string
     */
    public $userId;

    /**
     * @description 直播推送分辨率 -1:lld 1:lsd 2:lhd 3:lud
     *
     * @var int
     */
    public $codeLevel;

    /**
     * @description 多分辨率多协议播放信息
     *
     * @var playUrlInfoList[]
     */
    public $playUrlInfoList;

    /**
     * @description 封面图片
     *
     * @var string
     */
    public $coverUrl;

    /**
     * @description 用户自定义数据存储
     *
     * @var string
     */
    public $userDefineField;

    /**
     * @description hls播放地址
     *
     * @var string
     */
    public $hlsUrl;

    /**
     * @description rts播流信息
     *
     * @var artcInfo
     */
    public $artcInfo;
    protected $_name = [
        'anchorId'        => 'AnchorId',
        'liveId'          => 'LiveId',
        'title'           => 'Title',
        'playbackUrl'     => 'PlaybackUrl',
        'createTime'      => 'CreateTime',
        'endTime'         => 'EndTime',
        'duration'        => 'Duration',
        'pushUrl'         => 'PushUrl',
        'liveUrl'         => 'LiveUrl',
        'status'          => 'Status',
        'introduction'    => 'Introduction',
        'roomId'          => 'RoomId',
        'appId'           => 'AppId',
        'userId'          => 'UserId',
        'codeLevel'       => 'CodeLevel',
        'playUrlInfoList' => 'PlayUrlInfoList',
        'coverUrl'        => 'CoverUrl',
        'userDefineField' => 'UserDefineField',
        'hlsUrl'          => 'HlsUrl',
        'artcInfo'        => 'ArtcInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anchorId) {
            $res['AnchorId'] = $this->anchorId;
        }
        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->playbackUrl) {
            $res['PlaybackUrl'] = $this->playbackUrl;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->pushUrl) {
            $res['PushUrl'] = $this->pushUrl;
        }
        if (null !== $this->liveUrl) {
            $res['LiveUrl'] = $this->liveUrl;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->introduction) {
            $res['Introduction'] = $this->introduction;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->codeLevel) {
            $res['CodeLevel'] = $this->codeLevel;
        }
        if (null !== $this->playUrlInfoList) {
            $res['PlayUrlInfoList'] = [];
            if (null !== $this->playUrlInfoList && \is_array($this->playUrlInfoList)) {
                $n = 0;
                foreach ($this->playUrlInfoList as $item) {
                    $res['PlayUrlInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->userDefineField) {
            $res['UserDefineField'] = $this->userDefineField;
        }
        if (null !== $this->hlsUrl) {
            $res['HlsUrl'] = $this->hlsUrl;
        }
        if (null !== $this->artcInfo) {
            $res['ArtcInfo'] = null !== $this->artcInfo ? $this->artcInfo->toMap() : null;
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
        if (isset($map['AnchorId'])) {
            $model->anchorId = $map['AnchorId'];
        }
        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['PlaybackUrl'])) {
            $model->playbackUrl = $map['PlaybackUrl'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['PushUrl'])) {
            $model->pushUrl = $map['PushUrl'];
        }
        if (isset($map['LiveUrl'])) {
            $model->liveUrl = $map['LiveUrl'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Introduction'])) {
            $model->introduction = $map['Introduction'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['CodeLevel'])) {
            $model->codeLevel = $map['CodeLevel'];
        }
        if (isset($map['PlayUrlInfoList'])) {
            if (!empty($map['PlayUrlInfoList'])) {
                $model->playUrlInfoList = [];
                $n                      = 0;
                foreach ($map['PlayUrlInfoList'] as $item) {
                    $model->playUrlInfoList[$n++] = null !== $item ? playUrlInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['UserDefineField'])) {
            $model->userDefineField = $map['UserDefineField'];
        }
        if (isset($map['HlsUrl'])) {
            $model->hlsUrl = $map['HlsUrl'];
        }
        if (isset($map['ArtcInfo'])) {
            $model->artcInfo = artcInfo::fromMap($map['ArtcInfo']);
        }

        return $model;
    }
}
