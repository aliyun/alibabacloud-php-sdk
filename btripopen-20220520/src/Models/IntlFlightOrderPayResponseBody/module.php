<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOrderPayResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 51000
     *
     * @var int
     */
    public $price;
    protected $_name = [
        'price' => 'price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->price) {
            $res['price'] = $this->price;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['price'])) {
            $model->price = $map['price'];
        }

        return $model;
    }
}
