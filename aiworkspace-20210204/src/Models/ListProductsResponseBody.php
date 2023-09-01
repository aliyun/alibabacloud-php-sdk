<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListProductsResponseBody\products;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListProductsResponseBody\services;
use AlibabaCloud\Tea\Model;

class ListProductsResponseBody extends Model
{
    /**
     * @var products[]
     */
    public $products;

    /**
     * @example 1e195c5116124202371861018d5bde
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->products) {
            $res['Products'] = [];
            if (null !== $this->products && \is_array($this->products)) {
                $n = 0;
                foreach ($this->products as $item) {
                    $res['Products'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->services) {
            $res['Services'] = [];
            if (null !== $this->services && \is_array($this->services)) {
                $n = 0;
                foreach ($this->services as $item) {
                    $res['Services'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProductsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Products'])) {
            if (!empty($map['Products'])) {
                $model->products = [];
                $n               = 0;
                foreach ($map['Products'] as $item) {
                    $model->products[$n++] = null !== $item ? products::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Services'])) {
            if (!empty($map['Services'])) {
                $model->services = [];
                $n               = 0;
                foreach ($map['Services'] as $item) {
                    $model->services[$n++] = null !== $item ? services::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
