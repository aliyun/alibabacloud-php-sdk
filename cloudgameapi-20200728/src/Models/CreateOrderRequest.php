<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class CreateOrderRequest extends Model
{
    /**
     * @var string
     */
    public $buyerAccountId;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $skuId;

    /**
     * @var int
     */
    public $originPrice;

    /**
     * @var int
     */
    public $settlementPrice;

    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $idempotentCode;

    /**
     * @var string
     */
    public $accountDomain;
    protected $_name = [
        'buyerAccountId'  => 'BuyerAccountId',
        'itemId'          => 'ItemId',
        'skuId'           => 'SkuId',
        'originPrice'     => 'OriginPrice',
        'settlementPrice' => 'SettlementPrice',
        'amount'          => 'Amount',
        'idempotentCode'  => 'IdempotentCode',
        'accountDomain'   => 'AccountDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buyerAccountId) {
            $res['BuyerAccountId'] = $this->buyerAccountId;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->originPrice) {
            $res['OriginPrice'] = $this->originPrice;
        }
        if (null !== $this->settlementPrice) {
            $res['SettlementPrice'] = $this->settlementPrice;
        }
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->idempotentCode) {
            $res['IdempotentCode'] = $this->idempotentCode;
        }
        if (null !== $this->accountDomain) {
            $res['AccountDomain'] = $this->accountDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuyerAccountId'])) {
            $model->buyerAccountId = $map['BuyerAccountId'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['OriginPrice'])) {
            $model->originPrice = $map['OriginPrice'];
        }
        if (isset($map['SettlementPrice'])) {
            $model->settlementPrice = $map['SettlementPrice'];
        }
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['IdempotentCode'])) {
            $model->idempotentCode = $map['IdempotentCode'];
        }
        if (isset($map['AccountDomain'])) {
            $model->accountDomain = $map['AccountDomain'];
        }

        return $model;
    }
}
