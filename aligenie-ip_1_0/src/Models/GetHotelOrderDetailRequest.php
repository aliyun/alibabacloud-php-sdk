<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetHotelOrderDetailRequest\payload;
use AlibabaCloud\Tea\Model;

class GetHotelOrderDetailRequest extends Model
{
    /**
     * @var payload
     */
    public $payload;
    protected $_name = [
        'payload' => 'Payload',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->payload) {
            $res['Payload'] = null !== $this->payload ? $this->payload->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHotelOrderDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Payload'])) {
            $model->payload = payload::fromMap($map['Payload']);
        }

        return $model;
    }
}
