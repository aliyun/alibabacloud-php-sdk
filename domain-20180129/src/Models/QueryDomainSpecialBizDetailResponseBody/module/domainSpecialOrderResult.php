<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryDomainSpecialBizDetailResponseBody\module;

use AlibabaCloud\Tea\Model;

class domainSpecialOrderResult extends Model
{
    /**
     * @example activate
     *
     * @var string
     */
    public $actionType;

    /**
     * @example 0.0
     *
     * @var float
     */
    public $orderAmount;

    /**
     * @example CNY
     *
     * @var string
     */
    public $orderCurrency;

    /**
     * @example S201601060123456
     *
     * @var string
     */
    public $orderId;

    /**
     * @example ORDER_WAIT_PAY
     *
     * @var string
     */
    public $orderStatus;

    /**
     * @example 2023-09-19T14:28Z
     *
     * @var string
     */
    public $orderTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $orderYear;

    /**
     * @example S201601063418719
     *
     * @var string
     */
    public $saleId;

    /**
     * @example S201601061234567
     *
     * @var string
     */
    public $subOrderId;
    protected $_name = [
        'actionType'    => 'ActionType',
        'orderAmount'   => 'OrderAmount',
        'orderCurrency' => 'OrderCurrency',
        'orderId'       => 'OrderId',
        'orderStatus'   => 'OrderStatus',
        'orderTime'     => 'OrderTime',
        'orderYear'     => 'OrderYear',
        'saleId'        => 'SaleId',
        'subOrderId'    => 'SubOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }
        if (null !== $this->orderAmount) {
            $res['OrderAmount'] = $this->orderAmount;
        }
        if (null !== $this->orderCurrency) {
            $res['OrderCurrency'] = $this->orderCurrency;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }
        if (null !== $this->orderTime) {
            $res['OrderTime'] = $this->orderTime;
        }
        if (null !== $this->orderYear) {
            $res['OrderYear'] = $this->orderYear;
        }
        if (null !== $this->saleId) {
            $res['SaleId'] = $this->saleId;
        }
        if (null !== $this->subOrderId) {
            $res['SubOrderId'] = $this->subOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainSpecialOrderResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
        if (isset($map['OrderAmount'])) {
            $model->orderAmount = $map['OrderAmount'];
        }
        if (isset($map['OrderCurrency'])) {
            $model->orderCurrency = $map['OrderCurrency'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }
        if (isset($map['OrderTime'])) {
            $model->orderTime = $map['OrderTime'];
        }
        if (isset($map['OrderYear'])) {
            $model->orderYear = $map['OrderYear'];
        }
        if (isset($map['SaleId'])) {
            $model->saleId = $map['SaleId'];
        }
        if (isset($map['SubOrderId'])) {
            $model->subOrderId = $map['SubOrderId'];
        }

        return $model;
    }
}
