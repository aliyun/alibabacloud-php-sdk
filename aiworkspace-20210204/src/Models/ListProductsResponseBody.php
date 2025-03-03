<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListProductsResponseBody\products;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListProductsResponseBody\services;

class ListProductsResponseBody extends Model
{
    /**
     * @var products[]
     */
    public $products;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var services[]
     */
    public $services;
    protected $_name = [
        'products'  => 'Products',
        'requestId' => 'RequestId',
        'services'  => 'Services',
    ];

    public function validate()
    {
        if (\is_array($this->products)) {
            Model::validateArray($this->products);
        }
        if (\is_array($this->services)) {
            Model::validateArray($this->services);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->products) {
            if (\is_array($this->products)) {
                $res['Products'] = [];
                $n1              = 0;
                foreach ($this->products as $item1) {
                    $res['Products'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->services) {
            if (\is_array($this->services)) {
                $res['Services'] = [];
                $n1              = 0;
                foreach ($this->services as $item1) {
                    $res['Services'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1              = 0;
                foreach ($map['Products'] as $item1) {
                    $model->products[$n1++] = products::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Services'])) {
            if (!empty($map['Services'])) {
                $model->services = [];
                $n1              = 0;
                foreach ($map['Services'] as $item1) {
                    $model->services[$n1++] = services::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
