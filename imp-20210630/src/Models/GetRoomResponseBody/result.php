<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\GetRoomResponseBody;

use AlibabaCloud\SDK\Imp\V20210630\Models\GetRoomResponseBody\result\roomInfo;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var roomInfo
     */
    public $roomInfo;
    protected $_name = [
        'roomInfo' => 'RoomInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roomInfo) {
            $res['RoomInfo'] = null !== $this->roomInfo ? $this->roomInfo->toMap() : null;
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
        if (isset($map['RoomInfo'])) {
            $model->roomInfo = roomInfo::fromMap($map['RoomInfo']);
        }

        return $model;
    }
}
