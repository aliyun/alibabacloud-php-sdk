<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models\GetProductListResponseBody\data;

use AlibabaCloud\Dara\Model;

class productList extends Model
{
    /**
     * @var string
     */
    public $newLabel;

    /**
     * @var string
     */
    public $product;
    protected $_name = [
        'newLabel' => 'NewLabel',
        'product' => 'Product',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->newLabel) {
            $res['NewLabel'] = $this->newLabel;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
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
        if (isset($map['NewLabel'])) {
            $model->newLabel = $map['NewLabel'];
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        return $model;
    }
}
