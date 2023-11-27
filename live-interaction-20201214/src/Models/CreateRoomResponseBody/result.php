<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\CreateRoomResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example testRoomId
     *
     * @var string
     */
    public $roomId;
    protected $_name = [
        'roomId' => 'roomId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roomId) {
            $res['roomId'] = $this->roomId;
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
        if (isset($map['roomId'])) {
            $model->roomId = $map['roomId'];
        }

        return $model;
    }
}
