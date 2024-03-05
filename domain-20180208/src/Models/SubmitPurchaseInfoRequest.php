<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Tea\Model;

class SubmitPurchaseInfoRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $purchaseCurrency;

    /**
     * @var float
     */
    public $purchasePrice;

    /**
     * @var string[]
     */
    public $purchaseProofs;
    protected $_name = [
        'bizId'            => 'BizId',
        'purchaseCurrency' => 'PurchaseCurrency',
        'purchasePrice'    => 'PurchasePrice',
        'purchaseProofs'   => 'PurchaseProofs',
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
        if (null !== $this->purchaseCurrency) {
            $res['PurchaseCurrency'] = $this->purchaseCurrency;
        }
        if (null !== $this->purchasePrice) {
            $res['PurchasePrice'] = $this->purchasePrice;
        }
        if (null !== $this->purchaseProofs) {
            $res['PurchaseProofs'] = $this->purchaseProofs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitPurchaseInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['PurchaseCurrency'])) {
            $model->purchaseCurrency = $map['PurchaseCurrency'];
        }
        if (isset($map['PurchasePrice'])) {
            $model->purchasePrice = $map['PurchasePrice'];
        }
        if (isset($map['PurchaseProofs'])) {
            if (!empty($map['PurchaseProofs'])) {
                $model->purchaseProofs = $map['PurchaseProofs'];
            }
        }

        return $model;
    }
}
