<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class PushHotelMessageShrinkRequest extends Model
{
    /**
     * @description pushHotelMessageReq
     *
     * @var string
     */
    public $pushHotelMessageReqShrink;
    protected $_name = [
        'pushHotelMessageReqShrink' => 'PushHotelMessageReq',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pushHotelMessageReqShrink) {
            $res['PushHotelMessageReq'] = $this->pushHotelMessageReqShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushHotelMessageShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PushHotelMessageReq'])) {
            $model->pushHotelMessageReqShrink = $map['PushHotelMessageReq'];
        }

        return $model;
    }
}
