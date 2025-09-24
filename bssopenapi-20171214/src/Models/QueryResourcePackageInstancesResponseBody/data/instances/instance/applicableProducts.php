<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResourcePackageInstancesResponseBody\data\instances\instance;

use AlibabaCloud\Dara\Model;

class applicableProducts extends Model
{
    /**
     * @var string[]
     */
    public $product;
    protected $_name = [
        'product' => 'Product',
    ];

    public function validate()
    {
        if (\is_array($this->product)) {
            Model::validateArray($this->product);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->product) {
            if (\is_array($this->product)) {
                $res['Product'] = [];
                $n1 = 0;
                foreach ($this->product as $item1) {
                    $res['Product'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['Product'])) {
            if (!empty($map['Product'])) {
                $model->product = [];
                $n1 = 0;
                foreach ($map['Product'] as $item1) {
                    $model->product[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
