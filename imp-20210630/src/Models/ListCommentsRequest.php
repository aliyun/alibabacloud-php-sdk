<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class ListCommentsRequest extends Model
{
    /**
     * @description 用户的应用ID，在控制台创建应用时生成。包含小写字母、数字，长度为6个字符。
     *
     * @var string
     */
    public $appId;

    /**
     * @description 查询弹幕消息列表的分页页数。应该从1开始，每次分页拉取时递增。
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description 查询弹幕消息列表的分页大小。最小不得小于1，最大不得超过100。如果超过100，会被截断为前100条。
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 房间的唯一标识，在调用CreateRoom时返回。
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 查询弹幕消息列表的排序方式。取值仅限0和1，其中0表示按照弹幕消息创建时间递增的顺序拉取，1表示按照弹幕消息创建时间递减的时间拉取。
     *
     * @var int
     */
    public $sortType;

    /**
     * @description 操作人用户ID，表示谁执行了查询弹幕消息列表的操作。
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId'    => 'AppId',
        'pageNum'  => 'PageNum',
        'pageSize' => 'PageSize',
        'roomId'   => 'RoomId',
        'sortType' => 'SortType',
        'userId'   => 'UserId',
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
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCommentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
