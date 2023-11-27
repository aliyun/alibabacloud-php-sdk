<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListRoomUsersRequest;

use AlibabaCloud\Tea\Model;

class request extends Model
{
    /**
     * @example 7m***q
     *
     * @var string
     */
    public $domain;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 9645**c180a1
     *
     * @var string
     */
    public $roomId;
    protected $_name = [
        'domain'     => 'Domain',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'roomId'     => 'RoomId',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }

        return $model;
    }
}
