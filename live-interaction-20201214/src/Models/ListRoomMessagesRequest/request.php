<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListRoomMessagesRequest;

use AlibabaCloud\Tea\Model;

class request extends Model
{
    /**
     * @description 应用的appKey。
     *
     * @var string
     */
    public $domain;

    /**
     * @description 房间ID，由调用CreateRoom时返回。
     *
     * @var string
     */
    public $roomId;

    /**
     * @description 要查询的消息的类型,请传递100000以上的整数，如果不传，则默认拉取全部类型的消息。
     *
     * @var int
     */
    public $subType;

    /**
     * @description 分页查询时的页数，从1开始，每次分页查询时加1。
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 分页查询时的请求大小，要求大于0，且最大不得超过100。
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'domain'     => 'Domain',
        'roomId'     => 'RoomId',
        'subType'    => 'SubType',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
