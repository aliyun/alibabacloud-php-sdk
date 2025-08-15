<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetAccessKeyLastUsedProductsResponseBody\products;

class GetAccessKeyLastUsedProductsResponseBody extends Model
{
    /**
     * @var products[]
     */
    public $products;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'products' => 'Products',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->products)) {
            Model::validateArray($this->products);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->products) {
            if (\is_array($this->products)) {
                $res['Products'] = [];
                $n1 = 0;
                foreach ($this->products as $item1) {
                    $res['Products'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Products'])) {
            if (!empty($map['Products'])) {
                $model->products = [];
                $n1 = 0;
                foreach ($map['Products'] as $item1) {
                    $model->products[$n1] = products::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
