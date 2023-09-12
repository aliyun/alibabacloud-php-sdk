<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ProductSaleInfoListQuery extends Model
{
    /**
     * @example 22000009
     *
     * @var string
     */
    public $distributorShopId;

    /**
     * @example 110000
     *
     * @var string
     */
    public $divisionCode;

    /**
     * @var string[]
     */
    public $productIds;
    protected $_name = [
        'distributorShopId' => 'distributorShopId',
        'divisionCode'      => 'divisionCode',
        'productIds'        => 'productIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->distributorShopId) {
            $res['distributorShopId'] = $this->distributorShopId;
        }
        if (null !== $this->divisionCode) {
            $res['divisionCode'] = $this->divisionCode;
        }
        if (null !== $this->productIds) {
            $res['productIds'] = $this->productIds;
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
        if (isset($map['distributorShopId'])) {
            $model->distributorShopId = $map['distributorShopId'];
        }
        if (isset($map['divisionCode'])) {
            $model->divisionCode = $map['divisionCode'];
        }
        if (isset($map['productIds'])) {
            if (!empty($map['productIds'])) {
                $model->productIds = $map['productIds'];
            }
        }

        return $model;
    }
}
