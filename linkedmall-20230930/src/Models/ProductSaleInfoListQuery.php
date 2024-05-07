<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ProductSaleInfoListQuery extends Model
{
    /**
     * @example 110000
     *
     * @var string
     */
    public $divisionCode;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $productIds;

    /**
     * @description This parameter is required.
     *
     * @example 22000009
     *
     * @var string
     */
    public $purchaserId;
    protected $_name = [
        'divisionCode' => 'divisionCode',
        'productIds'   => 'productIds',
        'purchaserId'  => 'purchaserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->divisionCode) {
            $res['divisionCode'] = $this->divisionCode;
        }
        if (null !== $this->productIds) {
            $res['productIds'] = $this->productIds;
        }
        if (null !== $this->purchaserId) {
            $res['purchaserId'] = $this->purchaserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ProductSaleInfoListQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['divisionCode'])) {
            $model->divisionCode = $map['divisionCode'];
        }
        if (isset($map['productIds'])) {
            if (!empty($map['productIds'])) {
                $model->productIds = $map['productIds'];
            }
        }
        if (isset($map['purchaserId'])) {
            $model->purchaserId = $map['purchaserId'];
        }

        return $model;
    }
}
