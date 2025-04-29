<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightPayOrderV2ResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var int
     */
    public $price;
    protected $_name = [
        'price' => 'price',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->price) {
            $res['price'] = $this->price;
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
            $model->price = $map['price'];
        }

        return $model;
    }
}
