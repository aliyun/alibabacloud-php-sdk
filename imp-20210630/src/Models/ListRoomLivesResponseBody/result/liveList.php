<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListRoomLivesResponseBody\result;

use AlibabaCloud\Tea\Model;

class liveList extends Model
{
    /**
     * @description 房间唯一标识。
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 房间标题。
     *
     * @var string
     */
    public $title;

    /**
     * @description 房主用户id。
     *
     * @var string
     */
    public $roomOwnerId;

    /**
     * @description 房间公告。
     *
     * @var string
     */
    public $notice;

    /**
     * @description 用户访问数。
     *
     * @var int
     */
    public $uv;

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
     * @description 直播状态，0-在播 1-不在播。
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'roomId'      => 'RoomId',
        'title'       => 'Title',
        'roomOwnerId' => 'RoomOwnerId',
        'notice'      => 'Notice',
        'uv'          => 'Uv',
        'appId'       => 'AppId',
        'extension'   => 'Extension',
        'liveId'      => 'LiveId',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->roomOwnerId) {
            $res['RoomOwnerId'] = $this->roomOwnerId;
        }
        if (null !== $this->notice) {
            $res['Notice'] = $this->notice;
        }
        if (null !== $this->uv) {
            $res['Uv'] = $this->uv;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->liveId) {
            $res['LiveId'] = $this->liveId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['RoomOwnerId'])) {
            $model->roomOwnerId = $map['RoomOwnerId'];
        }
        if (isset($map['Notice'])) {
            $model->notice = $map['Notice'];
        }
        if (isset($map['Uv'])) {
            $model->uv = $map['Uv'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['LiveId'])) {
            $model->liveId = $map['LiveId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
