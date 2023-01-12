<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class ModifySupplierPriceAndPriceCentRequest extends Model
{
    /**
     * @example LMALL20220713****
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 10026780-55789045****
     *
     * @var string
     */
    public $lmItemId;

    /**
     * @example 1002****
     *
     * @var string
     */
    public $lmShopId;

    /**
     * @example 4880
     *
     * @var string
     */
    public $priceCent;

    /**
     * @example 490073602****
     *
     * @var string
     */
    public $skuId;

    /**
     * @example 10
     *
     * @var string
     */
    public $supplierPrice;
    protected $_name = [
        'bizId'         => 'BizId',
        'lmItemId'      => 'LmItemId',
        'lmShopId'      => 'LmShopId',
        'priceCent'     => 'PriceCent',
        'skuId'         => 'SkuId',
        'supplierPrice' => 'SupplierPrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->lmShopId) {
            $res['LmShopId'] = $this->lmShopId;
        }
        if (null !== $this->priceCent) {
            $res['PriceCent'] = $this->priceCent;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->supplierPrice) {
            $res['SupplierPrice'] = $this->supplierPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySupplierPriceAndPriceCentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['LmShopId'])) {
            $model->lmShopId = $map['LmShopId'];
        }
        if (isset($map['PriceCent'])) {
            $model->priceCent = $map['PriceCent'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['SupplierPrice'])) {
            $model->supplierPrice = $map['SupplierPrice'];
        }

        return $model;
    }
}
