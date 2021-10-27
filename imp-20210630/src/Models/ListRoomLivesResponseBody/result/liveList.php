<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListRoomLivesResponseBody\result;

use AlibabaCloud\Tea\Model;

class liveList extends Model
{
    /**
     * @description 应用唯一标识，由6位小写字母、数字组成。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 房间拓展字段。
     *
     * @var string[]
     */
    public $extension;

    /**
     * @description 直播id。
     *
     * @var string
     */
    public $liveId;

    /**
     * @description 房间公告。
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
     * @description 用户访问人次。
     *
     * @var int
     */
    public $pv;

    /**
     * @description 房间唯一标识。
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 房主用户id。
     *
     * @var string
     */
    public $roomOwnerId;

    /**
     * @description 直播状态，0-在播 1-不在播。
     *
     * @var int
     */
    public $status;

    /**
     * @description 房间标题。
     *
     * @var string
     */
    public $title;

    /**
     * @description 用户访问数。
     *
     * @var int
     */
    public $uv;
    protected $_name = [
        'appId'       => 'AppId',
        'extension'   => 'Extension',
        'liveId'      => 'LiveId',
        'notice'      => 'Notice',
        'onlineCount' => 'OnlineCount',
        'pv'          => 'Pv',
        'roomId'      => 'RoomId',
        'roomOwnerId' => 'RoomOwnerId',
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
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
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
        if (null !== $this->roomOwnerId) {
            $res['RoomOwnerId'] = $this->roomOwnerId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
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
        if (isset($map['RoomOwnerId'])) {
            $model->roomOwnerId = $map['RoomOwnerId'];
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
