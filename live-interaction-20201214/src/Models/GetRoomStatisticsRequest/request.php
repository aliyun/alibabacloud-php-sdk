<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetRoomStatisticsRequest;

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
    protected $_name = [
        'domain' => 'Domain',
        'roomId' => 'RoomId',
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

        return $model;
    }
}
