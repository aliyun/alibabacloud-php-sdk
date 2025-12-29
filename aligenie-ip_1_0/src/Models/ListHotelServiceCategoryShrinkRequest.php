<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Dara\Model;

class ListHotelServiceCategoryShrinkRequest extends Model
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->payloadShrink) {
            $res['Payload'] = $this->payloadShrink;
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
        if (isset($map['Payload'])) {
            $model->payloadShrink = $map['Payload'];
        }

        return $model;
    }
}
