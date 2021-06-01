<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Improom\V20210515\Models\GetRoomDetailRequest;

use AlibabaCloud\Tea\Model;

class request extends Model
{
    /**
     * @description 租户名
     *
     * @var string
     */
    public $domain;

    /**
     * @description 房间id
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
