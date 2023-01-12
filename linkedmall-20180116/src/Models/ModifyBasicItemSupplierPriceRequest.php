<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class ModifyBasicItemSupplierPriceRequest extends Model
{
    /**
     * @example LMALL20******001
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 10000****-6193664*****
     *
     * @var string
     */
    public $lmItemId;

    /**
     * @example 1002****
     *
     * @var int
     */
    public $lmShopId;

    /**
     * @example 490073602****
     *
     * @var int
     */
    public $skuId;

    /**
     * @example 4800
     *
     * @var int
     */
    public $supplierPrice;
    protected $_name = [
        'bizId'         => 'BizId',
        'lmItemId'      => 'LmItemId',
        'lmShopId'      => 'LmShopId',
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
     * @return ModifyBasicItemSupplierPriceRequest
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
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['SupplierPrice'])) {
            $model->supplierPrice = $map['SupplierPrice'];
        }

        return $model;
    }
}
