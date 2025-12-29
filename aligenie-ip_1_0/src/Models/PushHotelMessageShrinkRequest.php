<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class PushHotelMessageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $pushHotelMessageReqShrink;
    protected $_name = [
        'pushHotelMessageReqShrink' => 'PushHotelMessageReq',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pushHotelMessageReqShrink) {
            $res['PushHotelMessageReq'] = $this->pushHotelMessageReqShrink;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PushHotelMessageReq'])) {
            $model->pushHotelMessageReqShrink = $map['PushHotelMessageReq'];
        }

        return $model;
    }
}
