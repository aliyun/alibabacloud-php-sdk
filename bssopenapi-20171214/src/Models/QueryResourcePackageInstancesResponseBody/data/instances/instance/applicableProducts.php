<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResourcePackageInstancesResponseBody\data\instances\instance;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applicableProducts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Product'])) {
            if (!empty($map['Product'])) {
                $model->product = $map['Product'];
            }
        }

        return $model;
    }
}
