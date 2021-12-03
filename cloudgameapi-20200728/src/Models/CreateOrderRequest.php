<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class CreateOrderRequest extends Model
{
    /**
     * @var string
     */
    public $accountDomain;

    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $buyerAccountId;

    /**
     * @var string
     */
    public $idempotentCode;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var int
     */
    public $originPrice;

    /**
     * @var int
     */
    public $settlementPrice;

    /**
     * @var string
     */
    public $skuId;
    protected $_name = [
        'accountDomain'   => 'AccountDomain',
        'amount'          => 'Amount',
        'buyerAccountId'  => 'BuyerAccountId',
        'idempotentCode'  => 'IdempotentCode',
        'itemId'          => 'ItemId',
        'originPrice'     => 'OriginPrice',
        'settlementPrice' => 'SettlementPrice',
        'skuId'           => 'SkuId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountDomain) {
            $res['AccountDomain'] = $this->accountDomain;
        }
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->buyerAccountId) {
            $res['BuyerAccountId'] = $this->buyerAccountId;
        }
        if (null !== $this->idempotentCode) {
            $res['IdempotentCode'] = $this->idempotentCode;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->originPrice) {
            $res['OriginPrice'] = $this->originPrice;
        }
        if (null !== $this->settlementPrice) {
            $res['SettlementPrice'] = $this->settlementPrice;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
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
        if (isset($map['AccountDomain'])) {
            $model->accountDomain = $map['AccountDomain'];
        }
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['BuyerAccountId'])) {
            $model->buyerAccountId = $map['BuyerAccountId'];
        }
        if (isset($map['IdempotentCode'])) {
            $model->idempotentCode = $map['IdempotentCode'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['OriginPrice'])) {
            $model->originPrice = $map['OriginPrice'];
        }
        if (isset($map['SettlementPrice'])) {
            $model->settlementPrice = $map['SettlementPrice'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }

        return $model;
    }
}
