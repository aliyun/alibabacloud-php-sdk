<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveResponseBody;

use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveResponseBody\result\artcInfo;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveResponseBody\result\playUrlInfoList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $anchorId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var artcInfo
     */
    public $artcInfo;

    /**
     * @var int
     */
    public $codeLevel;

    /**
     * @var string
     */
    public $coverUrl;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $hlsUrl;

    /**
     * @var string
     */
    public $introduction;

    /**
     * @var string
     */
    public $liveId;

    /**
     * @var string
     */
    public $liveUrl;

    /**
     * @var playUrlInfoList[]
     */
    public $playUrlInfoList;

    /**
     * @var string
     */
    public $playbackUrl;

    /**
     * @var string
     */
    public $pushUrl;

    /**
     * @var string
     */
    public $roomId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $userDefineField;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'anchorId'        => 'AnchorId',
        'appId'           => 'AppId',
        'artcInfo'        => 'ArtcInfo',
        'codeLevel'       => 'CodeLevel',
        'coverUrl'        => 'CoverUrl',
        'createTime'      => 'CreateTime',
        'duration'        => 'Duration',
        'endTime'         => 'EndTime',
        'hlsUrl'          => 'HlsUrl',
        'introduction'    => 'Introduction',
        'liveId'          => 'LiveId',
        'liveUrl'         => 'LiveUrl',
        'playUrlInfoList' => 'PlayUrlInfoList',
        'playbackUrl'     => 'PlaybackUrl',
        'pushUrl'         => 'PushUrl',
        'roomId'          => 'RoomId',
        'status'          => 'Status',
        'title'           => 'Title',
        'userDefineField' => 'UserDefineField',
        'userId'          => 'UserId',
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
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->artcInfo) {
            $res['ArtcInfo'] = null !== $this->artcInfo ? $this->artcInfo->toMap() : null;
        }
        if (null !== $this->codeLevel) {
            $res['CodeLevel'] = $this->codeLevel;
        }
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->hlsUrl) {
            $res['HlsUrl'] = $this->hlsUrl;
        }
        if (null !== $this->introduction) {
            $res['Introduction'] = $this->introduction;
        }
        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }
        if (null !== $this->liveUrl) {
            $res['LiveUrl'] = $this->liveUrl;
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
        if (null !== $this->playbackUrl) {
            $res['PlaybackUrl'] = $this->playbackUrl;
        }
        if (null !== $this->pushUrl) {
            $res['PushUrl'] = $this->pushUrl;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->userDefineField) {
            $res['UserDefineField'] = $this->userDefineField;
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
        if (isset($map['AnchorId'])) {
            $model->anchorId = $map['AnchorId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ArtcInfo'])) {
            $model->artcInfo = artcInfo::fromMap($map['ArtcInfo']);
        }
        if (isset($map['CodeLevel'])) {
            $model->codeLevel = $map['CodeLevel'];
        }
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['HlsUrl'])) {
            $model->hlsUrl = $map['HlsUrl'];
        }
        if (isset($map['Introduction'])) {
            $model->introduction = $map['Introduction'];
        }
        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }
        if (isset($map['LiveUrl'])) {
            $model->liveUrl = $map['LiveUrl'];
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
        if (isset($map['PlaybackUrl'])) {
            $model->playbackUrl = $map['PlaybackUrl'];
        }
        if (isset($map['PushUrl'])) {
            $model->pushUrl = $map['PushUrl'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UserDefineField'])) {
            $model->userDefineField = $map['UserDefineField'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
