<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetPriceResponseBody\price;

class GetPriceResponseBody extends Model
{
    /**
     * @var price
     */
    public $price;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'price' => 'price',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->price) {
            $this->price->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->price) {
            $res['price'] = null !== $this->price ? $this->price->toArray($noStream) : $this->price;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['price'])) {
            $model->price = price::fromMap($map['price']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
