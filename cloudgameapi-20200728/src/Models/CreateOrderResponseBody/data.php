<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\CreateOrderResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $autoUnlockTime;

    /**
     * @var int
     */
    public $applyDeliveryTime;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var int
     */
    public $originPrice;

    /**
     * @var string
     */
    public $buyerAccountId;

    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $skuId;

    /**
     * @var int
     */
    public $settlementPrice;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $accountDomain;
    protected $_name = [
        'status'            => 'Status',
        'finishTime'        => 'FinishTime',
        'createTime'        => 'CreateTime',
        'autoUnlockTime'    => 'AutoUnlockTime',
        'applyDeliveryTime' => 'ApplyDeliveryTime',
        'itemId'            => 'ItemId',
        'originPrice'       => 'OriginPrice',
        'buyerAccountId'    => 'BuyerAccountId',
        'amount'            => 'Amount',
        'skuId'             => 'SkuId',
        'settlementPrice'   => 'SettlementPrice',
        'orderId'           => 'OrderId',
        'accountDomain'     => 'AccountDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->autoUnlockTime) {
            $res['AutoUnlockTime'] = $this->autoUnlockTime;
        }
        if (null !== $this->applyDeliveryTime) {
            $res['ApplyDeliveryTime'] = $this->applyDeliveryTime;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->originPrice) {
            $res['OriginPrice'] = $this->originPrice;
        }
        if (null !== $this->buyerAccountId) {
            $res['BuyerAccountId'] = $this->buyerAccountId;
        }
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->settlementPrice) {
            $res['SettlementPrice'] = $this->settlementPrice;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->accountDomain) {
            $res['AccountDomain'] = $this->accountDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['AutoUnlockTime'])) {
            $model->autoUnlockTime = $map['AutoUnlockTime'];
        }
        if (isset($map['ApplyDeliveryTime'])) {
            $model->applyDeliveryTime = $map['ApplyDeliveryTime'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['OriginPrice'])) {
            $model->originPrice = $map['OriginPrice'];
        }
        if (isset($map['BuyerAccountId'])) {
            $model->buyerAccountId = $map['BuyerAccountId'];
        }
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['SettlementPrice'])) {
            $model->settlementPrice = $map['SettlementPrice'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['AccountDomain'])) {
            $model->accountDomain = $map['AccountDomain'];
        }

        return $model;
    }
}
