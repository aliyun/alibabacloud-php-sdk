<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetCustomerOrdersResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example test_123
     *
     * @var string
     */
    public $customerAccount;

    /**
     * @example myBd
     *
     * @var string
     */
    public $customerManager;

    /**
     * @example 123456
     *
     * @var int
     */
    public $customerNo;

    /**
     * @example 236414227150922
     *
     * @var int
     */
    public $orderId;

    /**
     * @example 0
     *
     * @var string
     */
    public $orderSource;

    /**
     * @example 3
     *
     * @var int
     */
    public $orderStatus;

    /**
     * @example BUY
     *
     * @var string
     */
    public $orderType;

    /**
     * @example 3.92
     *
     * @var float
     */
    public $originalCost;

    /**
     * @example 3:32
     *
     * @var string
     */
    public $paymentMethod;

    /**
     * @example 2024-08-13 13:02:02
     *
     * @var string
     */
    public $paymentTime;

    /**
     * @example 3.92
     *
     * @var float
     */
    public $pretaxCost;

    /**
     * @example oss
     *
     * @var string
     */
    public $productDetail;

    /**
     * @example snapshot
     *
     * @var string
     */
    public $productType;

    /**
     * @example 2024-08-13 13:02:02
     *
     * @var string
     */
    public $timeToOrder;
    protected $_name = [
        'customerAccount' => 'CustomerAccount',
        'customerManager' => 'CustomerManager',
        'customerNo'      => 'CustomerNo',
        'orderId'         => 'OrderId',
        'orderSource'     => 'OrderSource',
        'orderStatus'     => 'OrderStatus',
        'orderType'       => 'OrderType',
        'originalCost'    => 'OriginalCost',
        'paymentMethod'   => 'PaymentMethod',
        'paymentTime'     => 'PaymentTime',
        'pretaxCost'      => 'PretaxCost',
        'productDetail'   => 'ProductDetail',
        'productType'     => 'ProductType',
        'timeToOrder'     => 'TimeToOrder',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerAccount) {
            $res['CustomerAccount'] = $this->customerAccount;
        }
        if (null !== $this->customerManager) {
            $res['CustomerManager'] = $this->customerManager;
        }
        if (null !== $this->customerNo) {
            $res['CustomerNo'] = $this->customerNo;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->orderSource) {
            $res['OrderSource'] = $this->orderSource;
        }
        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->originalCost) {
            $res['OriginalCost'] = $this->originalCost;
        }
        if (null !== $this->paymentMethod) {
            $res['PaymentMethod'] = $this->paymentMethod;
        }
        if (null !== $this->paymentTime) {
            $res['PaymentTime'] = $this->paymentTime;
        }
        if (null !== $this->pretaxCost) {
            $res['PretaxCost'] = $this->pretaxCost;
        }
        if (null !== $this->productDetail) {
            $res['ProductDetail'] = $this->productDetail;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->timeToOrder) {
            $res['TimeToOrder'] = $this->timeToOrder;
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
        if (isset($map['CustomerAccount'])) {
            $model->customerAccount = $map['CustomerAccount'];
        }
        if (isset($map['CustomerManager'])) {
            $model->customerManager = $map['CustomerManager'];
        }
        if (isset($map['CustomerNo'])) {
            $model->customerNo = $map['CustomerNo'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OrderSource'])) {
            $model->orderSource = $map['OrderSource'];
        }
        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['OriginalCost'])) {
            $model->originalCost = $map['OriginalCost'];
        }
        if (isset($map['PaymentMethod'])) {
            $model->paymentMethod = $map['PaymentMethod'];
        }
        if (isset($map['PaymentTime'])) {
            $model->paymentTime = $map['PaymentTime'];
        }
        if (isset($map['PretaxCost'])) {
            $model->pretaxCost = $map['PretaxCost'];
        }
        if (isset($map['ProductDetail'])) {
            $model->productDetail = $map['ProductDetail'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['TimeToOrder'])) {
            $model->timeToOrder = $map['TimeToOrder'];
        }

        return $model;
    }
}
