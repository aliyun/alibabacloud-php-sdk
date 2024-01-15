<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AskSessionPackagePriceResponseBody;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AskSessionPackagePriceResponseBody\data\price;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var price
     */
    public $price;
    protected $_name = [
        'price' => 'Price',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->price) {
            $res['Price'] = null !== $this->price ? $this->price->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Price'])) {
            $model->price = price::fromMap($map['Price']);
        }

        return $model;
    }
}
