<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class SelectionGroupAddProductResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $productIds;
    protected $_name = [
        'productIds' => 'productIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productIds) {
            $res['productIds'] = $this->productIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SelectionGroupAddProductResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['productIds'])) {
            if (!empty($map['productIds'])) {
                $model->productIds = $map['productIds'];
            }
        }

        return $model;
    }
}
