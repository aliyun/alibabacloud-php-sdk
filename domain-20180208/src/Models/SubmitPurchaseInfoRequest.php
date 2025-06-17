<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Dara\Model;

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
        'bizId' => 'BizId',
        'purchaseCurrency' => 'PurchaseCurrency',
        'purchasePrice' => 'PurchasePrice',
        'purchaseProofs' => 'PurchaseProofs',
    ];

    public function validate()
    {
        if (\is_array($this->purchaseProofs)) {
            Model::validateArray($this->purchaseProofs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->purchaseProofs)) {
                $res['PurchaseProofs'] = [];
                $n1 = 0;
                foreach ($this->purchaseProofs as $item1) {
                    $res['PurchaseProofs'][$n1] = $item1;
                    ++$n1;
                }
            }
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
                $model->purchaseProofs = [];
                $n1 = 0;
                foreach ($map['PurchaseProofs'] as $item1) {
                    $model->purchaseProofs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
