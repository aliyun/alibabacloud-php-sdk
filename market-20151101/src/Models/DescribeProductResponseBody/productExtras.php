<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\productExtras\productExtra;

class productExtras extends Model
{
    /**
     * @var productExtra[]
     */
    public $productExtra;
    protected $_name = [
        'productExtra' => 'ProductExtra',
    ];

    public function validate()
    {
        if (\is_array($this->productExtra)) {
            Model::validateArray($this->productExtra);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productExtra) {
            if (\is_array($this->productExtra)) {
                $res['ProductExtra'] = [];
                $n1 = 0;
                foreach ($this->productExtra as $item1) {
                    $res['ProductExtra'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ProductExtra'])) {
            if (!empty($map['ProductExtra'])) {
                $model->productExtra = [];
                $n1 = 0;
                foreach ($map['ProductExtra'] as $item1) {
                    $model->productExtra[$n1] = productExtra::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
