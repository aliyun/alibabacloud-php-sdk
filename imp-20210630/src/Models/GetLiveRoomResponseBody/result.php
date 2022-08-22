<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRoomResponseBody;

use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRoomResponseBody\result\artcInfo;
use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRoomResponseBody\result\pluginInstanceInfoList;
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
    public $anchorNick;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var artcInfo
     */
    public $artcInfo;

    /**
     * @var string
     */
    public $chatId;

    /**
     * @var string
     */
    public $confId;

    /**
     * @var string
     */
    public $coverUrl;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $enableLinkMic;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $extension;

    /**
     * @var string
     */
    public $hlsUrl;

    /**
     * @var string
     */
    public $hlsUrlHttps;

    /**
     * @var string
     */
    public $liveId;

    /**
     * @var string
     */
    public $liveUrl;

    /**
     * @var string
     */
    public $liveUrlHttps;

    /**
     * @var string
     */
    public $notice;

    /**
     * @var int
     */
    public $onlineCount;

    /**
     * @var string
     */
    public $playbackUrl;

    /**
     * @var string
     */
    public $playbackUrlHttps;

    /**
     * @var pluginInstanceInfoList[]
     */
    public $pluginInstanceInfoList;

    /**
     * @var string
     */
    public $pushUrl;

    /**
     * @var int
     */
    public $pv;

    /**
     * @var string
     */
    public $roomId;

    /**
     * @var string
     */
    public $rtmpUrl;

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

    /**
     * @var int
     */
    public $uv;
    protected $_name = [
        'anchorId'               => 'AnchorId',
        'anchorNick'             => 'AnchorNick',
        'appId'                  => 'AppId',
        'artcInfo'               => 'ArtcInfo',
        'chatId'                 => 'ChatId',
        'confId'                 => 'ConfId',
        'coverUrl'               => 'CoverUrl',
        'createTime'             => 'CreateTime',
        'enableLinkMic'          => 'EnableLinkMic',
        'endTime'                => 'EndTime',
        'extension'              => 'Extension',
        'hlsUrl'                 => 'HlsUrl',
        'hlsUrlHttps'            => 'HlsUrlHttps',
        'liveId'                 => 'LiveId',
        'liveUrl'                => 'LiveUrl',
        'liveUrlHttps'           => 'LiveUrlHttps',
        'notice'                 => 'Notice',
        'onlineCount'            => 'OnlineCount',
        'playbackUrl'            => 'PlaybackUrl',
        'playbackUrlHttps'       => 'PlaybackUrlHttps',
        'pluginInstanceInfoList' => 'PluginInstanceInfoList',
        'pushUrl'                => 'PushUrl',
        'pv'                     => 'Pv',
        'roomId'                 => 'RoomId',
        'rtmpUrl'                => 'RtmpUrl',
        'startTime'              => 'StartTime',
        'status'                 => 'Status',
        'title'                  => 'Title',
        'uv'                     => 'Uv',
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
        if (null !== $this->anchorNick) {
            $res['AnchorNick'] = $this->anchorNick;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->artcInfo) {
            $res['ArtcInfo'] = null !== $this->artcInfo ? $this->artcInfo->toMap() : null;
        }
        if (null !== $this->chatId) {
            $res['ChatId'] = $this->chatId;
        }
        if (null !== $this->confId) {
            $res['ConfId'] = $this->confId;
        }
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->enableLinkMic) {
            $res['EnableLinkMic'] = $this->enableLinkMic;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->hlsUrl) {
            $res['HlsUrl'] = $this->hlsUrl;
        }
        if (null !== $this->hlsUrlHttps) {
            $res['HlsUrlHttps'] = $this->hlsUrlHttps;
        }
        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }
        if (null !== $this->liveUrl) {
            $res['LiveUrl'] = $this->liveUrl;
        }
        if (null !== $this->liveUrlHttps) {
            $res['LiveUrlHttps'] = $this->liveUrlHttps;
        }
        if (null !== $this->notice) {
            $res['Notice'] = $this->notice;
        }
        if (null !== $this->onlineCount) {
            $res['OnlineCount'] = $this->onlineCount;
        }
        if (null !== $this->playbackUrl) {
            $res['PlaybackUrl'] = $this->playbackUrl;
        }
        if (null !== $this->playbackUrlHttps) {
            $res['PlaybackUrlHttps'] = $this->playbackUrlHttps;
        }
        if (null !== $this->pluginInstanceInfoList) {
            $res['PluginInstanceInfoList'] = [];
            if (null !== $this->pluginInstanceInfoList && \is_array($this->pluginInstanceInfoList)) {
                $n = 0;
                foreach ($this->pluginInstanceInfoList as $item) {
                    $res['PluginInstanceInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pushUrl) {
            $res['PushUrl'] = $this->pushUrl;
        }
        if (null !== $this->pv) {
            $res['Pv'] = $this->pv;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->rtmpUrl) {
            $res['RtmpUrl'] = $this->rtmpUrl;
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
        if (null !== $this->uv) {
            $res['Uv'] = $this->uv;
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
        if (isset($map['AnchorNick'])) {
            $model->anchorNick = $map['AnchorNick'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ArtcInfo'])) {
            $model->artcInfo = artcInfo::fromMap($map['ArtcInfo']);
        }
        if (isset($map['ChatId'])) {
            $model->chatId = $map['ChatId'];
        }
        if (isset($map['ConfId'])) {
            $model->confId = $map['ConfId'];
        }
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EnableLinkMic'])) {
            $model->enableLinkMic = $map['EnableLinkMic'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['HlsUrl'])) {
            $model->hlsUrl = $map['HlsUrl'];
        }
        if (isset($map['HlsUrlHttps'])) {
            $model->hlsUrlHttps = $map['HlsUrlHttps'];
        }
        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }
        if (isset($map['LiveUrl'])) {
            $model->liveUrl = $map['LiveUrl'];
        }
        if (isset($map['LiveUrlHttps'])) {
            $model->liveUrlHttps = $map['LiveUrlHttps'];
        }
        if (isset($map['Notice'])) {
            $model->notice = $map['Notice'];
        }
        if (isset($map['OnlineCount'])) {
            $model->onlineCount = $map['OnlineCount'];
        }
        if (isset($map['PlaybackUrl'])) {
            $model->playbackUrl = $map['PlaybackUrl'];
        }
        if (isset($map['PlaybackUrlHttps'])) {
            $model->playbackUrlHttps = $map['PlaybackUrlHttps'];
        }
        if (isset($map['PluginInstanceInfoList'])) {
            if (!empty($map['PluginInstanceInfoList'])) {
                $model->pluginInstanceInfoList = [];
                $n                             = 0;
                foreach ($map['PluginInstanceInfoList'] as $item) {
                    $model->pluginInstanceInfoList[$n++] = null !== $item ? pluginInstanceInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PushUrl'])) {
            $model->pushUrl = $map['PushUrl'];
        }
        if (isset($map['Pv'])) {
            $model->pv = $map['Pv'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['RtmpUrl'])) {
            $model->rtmpUrl = $map['RtmpUrl'];
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
        if (isset($map['Uv'])) {
            $model->uv = $map['Uv'];
        }

        return $model;
    }
}
