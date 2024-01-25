<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapi\V20210930\Models;

use AlibabaCloud\Tea\Model;

class AiStoreApiNode extends Model
{
    /**
     * @var AiStoreUserTask[]
     */
    public $apis;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $productDesc;
    protected $_name = [
        'apis'        => 'Apis',
        'product'     => 'Product',
        'productDesc' => 'ProductDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apis) {
            $res['Apis'] = [];
            if (null !== $this->apis && \is_array($this->apis)) {
                $n = 0;
                foreach ($this->apis as $item) {
                    $res['Apis'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->productDesc) {
            $res['ProductDesc'] = $this->productDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AiStoreApiNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Apis'])) {
            if (!empty($map['Apis'])) {
                $model->apis = [];
                $n           = 0;
                foreach ($map['Apis'] as $item) {
                    $model->apis[$n++] = null !== $item ? AiStoreUserTask::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['ProductDesc'])) {
            $model->productDesc = $map['ProductDesc'];
        }

        return $model;
    }
}
