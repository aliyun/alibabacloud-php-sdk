<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\PushHotelMessageRequest\pushHotelMessageReq;

class PushHotelMessageRequest extends Model
{
    /**
     * @var pushHotelMessageReq
     */
    public $pushHotelMessageReq;
    protected $_name = [
        'pushHotelMessageReq' => 'PushHotelMessageReq',
    ];

    public function validate()
    {
        if (null !== $this->pushHotelMessageReq) {
            $this->pushHotelMessageReq->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pushHotelMessageReq) {
            $res['PushHotelMessageReq'] = null !== $this->pushHotelMessageReq ? $this->pushHotelMessageReq->toArray($noStream) : $this->pushHotelMessageReq;
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
            $model->pushHotelMessageReq = pushHotelMessageReq::fromMap($map['PushHotelMessageReq']);
        }

        return $model;
    }
}
