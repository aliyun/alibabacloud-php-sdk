<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class ListRoomLivesShrinkRequest extends Model
{
    /**
     * @description 应用唯一标识，可以包含小写字母、数字，长度为6个字符。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 房间ID，最大长度36个字符。
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 直播状态筛选条件，0-直播 1-下播，不传则返回全部状态
     *
     * @var int
     */
    public $status;

    /**
     * @description 拉取在这个时间戳之前创建的直播，单位毫秒，不传则默认拉取最新创建的。
     *
     * @var int
     */
    public $queryTimestamp;

    /**
     * @description 拉取直播数量。
     *
     * @var int
     */
    public $size;

    /**
     * @description 房间ID列表，可指定多个房间id，过滤优先级高于RoomId。
     *
     * @var string
     */
    public $roomIdListShrink;
    protected $_name = [
        'appId'            => 'AppId',
        'roomId'           => 'RoomId',
        'status'           => 'Status',
        'queryTimestamp'   => 'QueryTimestamp',
        'size'             => 'Size',
        'roomIdListShrink' => 'RoomIdList',
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
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->queryTimestamp) {
            $res['QueryTimestamp'] = $this->queryTimestamp;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->roomIdListShrink) {
            $res['RoomIdList'] = $this->roomIdListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRoomLivesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['QueryTimestamp'])) {
            $model->queryTimestamp = $map['QueryTimestamp'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['RoomIdList'])) {
            $model->roomIdListShrink = $map['RoomIdList'];
        }

        return $model;
    }
}
