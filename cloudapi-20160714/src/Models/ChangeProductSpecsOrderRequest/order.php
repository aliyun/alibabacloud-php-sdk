<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ChangeProductSpecsOrderRequest;

use AlibabaCloud\Tea\Model;

class order extends Model
{
    /**
     * @var int
     */
    public $productSpecsId;

    /**
     * @var int
     */
    public $productSpecsOrder;
    protected $_name = [
        'productSpecsId'    => 'ProductSpecsId',
        'productSpecsOrder' => 'ProductSpecsOrder',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productSpecsId) {
            $res['ProductSpecsId'] = $this->productSpecsId;
        }
        if (null !== $this->productSpecsOrder) {
            $res['ProductSpecsOrder'] = $this->productSpecsOrder;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return order
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductSpecsId'])) {
            $model->productSpecsId = $map['ProductSpecsId'];
        }
        if (isset($map['ProductSpecsOrder'])) {
            $model->productSpecsOrder = $map['ProductSpecsOrder'];
        }

        return $model;
    }
}
