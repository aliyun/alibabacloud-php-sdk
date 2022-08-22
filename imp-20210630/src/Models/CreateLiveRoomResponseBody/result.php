<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\CreateLiveRoomResponseBody;

use AlibabaCloud\SDK\Imp\V20210630\Models\CreateLiveRoomResponseBody\result\artcInfo;
use AlibabaCloud\SDK\Imp\V20210630\Models\CreateLiveRoomResponseBody\result\pluginInstanceInfoList;
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
    public $coverUrl;

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
    public $liveId;

    /**
     * @var string
     */
    public $liveUrl;

    /**
     * @var string
     */
    public $notice;

    /**
     * @var string
     */
    public $playbackUrl;

    /**
     * @var pluginInstanceInfoList[]
     */
    public $pluginInstanceInfoList;

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
    public $title;
    protected $_name = [
        'anchorId'               => 'AnchorId',
        'anchorNick'             => 'AnchorNick',
        'appId'                  => 'AppId',
        'artcInfo'               => 'ArtcInfo',
        'chatId'                 => 'ChatId',
        'coverUrl'               => 'CoverUrl',
        'extension'              => 'Extension',
        'hlsUrl'                 => 'HlsUrl',
        'liveId'                 => 'LiveId',
        'liveUrl'                => 'LiveUrl',
        'notice'                 => 'Notice',
        'playbackUrl'            => 'PlaybackUrl',
        'pluginInstanceInfoList' => 'PluginInstanceInfoList',
        'pushUrl'                => 'PushUrl',
        'roomId'                 => 'RoomId',
        'title'                  => 'Title',
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
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->hlsUrl) {
            $res['HlsUrl'] = $this->hlsUrl;
        }
        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }
        if (null !== $this->liveUrl) {
            $res['LiveUrl'] = $this->liveUrl;
        }
        if (null !== $this->notice) {
            $res['Notice'] = $this->notice;
        }
        if (null !== $this->playbackUrl) {
            $res['PlaybackUrl'] = $this->playbackUrl;
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
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['HlsUrl'])) {
            $model->hlsUrl = $map['HlsUrl'];
        }
        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }
        if (isset($map['LiveUrl'])) {
            $model->liveUrl = $map['LiveUrl'];
        }
        if (isset($map['Notice'])) {
            $model->notice = $map['Notice'];
        }
        if (isset($map['PlaybackUrl'])) {
            $model->playbackUrl = $map['PlaybackUrl'];
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
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
