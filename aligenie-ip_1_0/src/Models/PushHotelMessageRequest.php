<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PushHotelMessageRequest\pushHotelMessageReq;
use AlibabaCloud\Tea\Model;

class PushHotelMessageRequest extends Model
{
    /**
     * @description pushHotelMessageReq
     *
     * @var pushHotelMessageReq
     */
    public $pushHotelMessageReq;
    protected $_name = [
        'pushHotelMessageReq' => 'PushHotelMessageReq',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pushHotelMessageReq) {
            $res['PushHotelMessageReq'] = null !== $this->pushHotelMessageReq ? $this->pushHotelMessageReq->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushHotelMessageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PushHotelMessageReq'])) {
            $model->pushHotelMessageReq = pushHotelMessageReq::fromMap($map['PushHotelMessageReq']);
        }

        return $model;
    }
}
