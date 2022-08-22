<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetHotelOrderDetailShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $payloadShrink;
    protected $_name = [
        'payloadShrink' => 'Payload',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->payloadShrink) {
            $res['Payload'] = $this->payloadShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHotelOrderDetailShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Payload'])) {
            $model->payloadShrink = $map['Payload'];
        }

        return $model;
    }
}
