<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListProductsResponseBody;

use AlibabaCloud\Dara\Model;

class products extends Model
{
    /**
     * @var bool
     */
    public $hasPermissionToPurchase;

    /**
     * @var bool
     */
    public $isPurchased;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $purchaseUrl;
    protected $_name = [
        'hasPermissionToPurchase' => 'HasPermissionToPurchase',
        'isPurchased' => 'IsPurchased',
        'productCode' => 'ProductCode',
        'productId' => 'ProductId',
        'purchaseUrl' => 'PurchaseUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->purchaseUrl) {
            $res['PurchaseUrl'] = $this->purchaseUrl;
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
        if (isset($map['HasPermissionToPurchase'])) {
            $model->hasPermissionToPurchase = $map['HasPermissionToPurchase'];
        }

        if (isset($map['IsPurchased'])) {
            $model->isPurchased = $map['IsPurchased'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['PurchaseUrl'])) {
            $model->purchaseUrl = $map['PurchaseUrl'];
        }

        return $model;
    }
}
