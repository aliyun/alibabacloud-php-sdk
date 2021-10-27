<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListLiveRoomsResponseBody\result;

use AlibabaCloud\Tea\Model;

class liveList extends Model
{
    /**
     * @description 主播ID。
     *
     * @var string
     */
    public $anchorId;

    /**
     * @description 主播昵称。
     *
     * @var string
     */
    public $anchorNick;

    /**
     * @description 应用ID。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 聊天ID。
     *
     * @var string
     */
    public $chatId;

    /**
     * @description 封面。
     *
     * @var string
     */
    public $coverUrl;

    /**
     * @description 直播拓展字段。
     *
     * @var string[]
     */
    public $extension;

    /**
     * @description 直播ID。
     *
     * @var string
     */
    public $liveId;

    /**
     * @description 公告。
     *
     * @var string
     */
    public $notice;

    /**
     * @description 在线用户数。
     *
     * @var int
     */
    public $onlineCount;

    /**
     * @description 访问用户人次。
     *
     * @var int
     */
    public $pv;

    /**
     * @description 房间ID。
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 直播状态，0-在播 1-下播。
     *
     * @var int
     */
    public $status;

    /**
     * @description 标题。
     *
     * @var string
     */
    public $title;

    /**
     * @description 访问用户数。
     *
     * @var int
     */
    public $uv;
    protected $_name = [
        'anchorId'    => 'AnchorId',
        'anchorNick'  => 'AnchorNick',
        'appId'       => 'AppId',
        'chatId'      => 'ChatId',
        'coverUrl'    => 'CoverUrl',
        'extension'   => 'Extension',
        'liveId'      => 'LiveId',
        'notice'      => 'Notice',
        'onlineCount' => 'OnlineCount',
        'pv'          => 'Pv',
        'roomId'      => 'RoomId',
        'status'      => 'Status',
        'title'       => 'Title',
        'uv'          => 'Uv',
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
        if (null !== $this->chatId) {
            $res['ChatId'] = $this->chatId;
        }
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }
        if (null !== $this->notice) {
            $res['Notice'] = $this->notice;
        }
        if (null !== $this->onlineCount) {
            $res['OnlineCount'] = $this->onlineCount;
        }
        if (null !== $this->pv) {
            $res['Pv'] = $this->pv;
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
        if (null !== $this->uv) {
            $res['Uv'] = $this->uv;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveList
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
        if (isset($map['ChatId'])) {
            $model->chatId = $map['ChatId'];
        }
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }
        if (isset($map['Notice'])) {
            $model->notice = $map['Notice'];
        }
        if (isset($map['OnlineCount'])) {
            $model->onlineCount = $map['OnlineCount'];
        }
        if (isset($map['Pv'])) {
            $model->pv = $map['Pv'];
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
        if (isset($map['Uv'])) {
            $model->uv = $map['Uv'];
        }

        return $model;
    }
}
