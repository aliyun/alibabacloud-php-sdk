<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRoomResponseBody;

use AlibabaCloud\SDK\Imp\V20210630\Models\GetLiveRoomResponseBody\result\pluginInstanceInfoList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 应用ID。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 直播ID。
     *
     * @var string
     */
    public $liveId;

    /**
     * @description 直播状态，0-在播 1-下播。
     *
     * @var int
     */
    public $status;

    /**
     * @description 房间ID。
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 聊天ID。
     *
     * @var string
     */
    public $chatId;

    /**
     * @description 标题。
     *
     * @var string
     */
    public $title;

    /**
     * @description 公告。
     *
     * @var string
     */
    public $notice;

    /**
     * @description 封面。
     *
     * @var string
     */
    public $coverUrl;

    /**
     * @description 主播ID。
     *
     * @var string
     */
    public $anchorId;

    /**
     * @description 访问用户数。
     *
     * @var int
     */
    public $uv;

    /**
     * @description 在线用户数。
     *
     * @var int
     */
    public $onlineCount;

    /**
     * @description 直播回放地址。
     *
     * @var string
     */
    public $playbackUrl;

    /**
     * @description 直播创建时间，单位：毫秒。
     *
     * @var int
     */
    public $createTime;

    /**
     * @description 直播结束时间，单位：毫秒。
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 直播推流地址。
     *
     * @var string
     */
    public $pushUrl;

    /**
     * @description 直播拉流地址。
     *
     * @var string
     */
    public $liveUrl;

    /**
     * @description 活跃插件列表。
     *
     * @var pluginInstanceInfoList[]
     */
    public $pluginInstanceInfoList;

    /**
     * @description 直播拓展字段。
     *
     * @var string[]
     */
    public $extension;

    /**
     * @description 访问用户人次。
     *
     * @var int
     */
    public $pv;

    /**
     * @description 主播昵称
     *
     * @var string
     */
    public $anchorNick;
    protected $_name = [
        'appId'                  => 'AppId',
        'liveId'                 => 'LiveId',
        'status'                 => 'Status',
        'roomId'                 => 'RoomId',
        'chatId'                 => 'ChatId',
        'title'                  => 'Title',
        'notice'                 => 'Notice',
        'coverUrl'               => 'CoverUrl',
        'anchorId'               => 'AnchorId',
        'uv'                     => 'Uv',
        'onlineCount'            => 'OnlineCount',
        'playbackUrl'            => 'PlaybackUrl',
        'createTime'             => 'CreateTime',
        'endTime'                => 'EndTime',
        'pushUrl'                => 'PushUrl',
        'liveUrl'                => 'LiveUrl',
        'pluginInstanceInfoList' => 'PluginInstanceInfoList',
        'extension'              => 'Extension',
        'pv'                     => 'Pv',
        'anchorNick'             => 'AnchorNick',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->chatId) {
            $res['ChatId'] = $this->chatId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->notice) {
            $res['Notice'] = $this->notice;
        }
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->anchorId) {
            $res['AnchorId'] = $this->anchorId;
        }
        if (null !== $this->uv) {
            $res['Uv'] = $this->uv;
        }
        if (null !== $this->onlineCount) {
            $res['OnlineCount'] = $this->onlineCount;
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
        if (null !== $this->pushUrl) {
            $res['PushUrl'] = $this->pushUrl;
        }
        if (null !== $this->liveUrl) {
            $res['LiveUrl'] = $this->liveUrl;
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
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->pv) {
            $res['Pv'] = $this->pv;
        }
        if (null !== $this->anchorNick) {
            $res['AnchorNick'] = $this->anchorNick;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['ChatId'])) {
            $model->chatId = $map['ChatId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Notice'])) {
            $model->notice = $map['Notice'];
        }
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['AnchorId'])) {
            $model->anchorId = $map['AnchorId'];
        }
        if (isset($map['Uv'])) {
            $model->uv = $map['Uv'];
        }
        if (isset($map['OnlineCount'])) {
            $model->onlineCount = $map['OnlineCount'];
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
        if (isset($map['PushUrl'])) {
            $model->pushUrl = $map['PushUrl'];
        }
        if (isset($map['LiveUrl'])) {
            $model->liveUrl = $map['LiveUrl'];
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
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['Pv'])) {
            $model->pv = $map['Pv'];
        }
        if (isset($map['AnchorNick'])) {
            $model->anchorNick = $map['AnchorNick'];
        }

        return $model;
    }
}
