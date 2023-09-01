<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListProductsResponseBody;

use AlibabaCloud\Tea\Model;

class products extends Model
{
    /**
     * @var bool
     */
    public $hasPermissionToPurchase;

    /**
     * @example true
     *
     * @var bool
     */
    public $isPurchased;

    /**
     * @example DataWorks_isolate
     *
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productInstanceId;

    /**
     * @example https://common-buy.aliy
     *
     * @var string
     */
    public $purchaseUrl;
    protected $_name = [
        'hasPermissionToPurchase' => 'HasPermissionToPurchase',
        'isPurchased'             => 'IsPurchased',
        'productCode'             => 'ProductCode',
        'productInstanceId'       => 'ProductInstanceId',
        'purchaseUrl'             => 'PurchaseUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasPermissionToPurchase) {
            $res['HasPermissionToPurchase'] = $this->hasPermissionToPurchase;
        }
        if (null !== $this->isPurchased) {
            $res['IsPurchased'] = $this->isPurchased;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productInstanceId) {
            $res['ProductInstanceId'] = $this->productInstanceId;
        }
        if (null !== $this->purchaseUrl) {
            $res['PurchaseUrl'] = $this->purchaseUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return products
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HasPermissionToPurchase'])) {
            $model->hasPermissionToPurchase = $map['HasPermissionToPurchase'];
        }
        if (isset($map['IsPurchased'])) {
            $model->isPurchased = $map['IsPurchased'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductInstanceId'])) {
            $model->productInstanceId = $map['ProductInstanceId'];
        }
        if (isset($map['PurchaseUrl'])) {
            $model->purchaseUrl = $map['PurchaseUrl'];
        }

        return $model;
    }
}
