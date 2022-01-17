<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribeOrderResponseBody\instanceIds;
use AlibabaCloud\SDK\Market\V20151101\Models\DescribeOrderResponseBody\supplierTelephones;
use AlibabaCloud\Tea\Model;

class DescribeOrderResponseBody extends Model
{
    /**
     * @var int
     */
    public $accountQuantity;

    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var mixed[]
     */
    public $components;

    /**
     * @var float
     */
    public $couponPrice;

    /**
     * @var int
     */
    public $createdOn;

    /**
     * @var instanceIds
     */
    public $instanceIds;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $orderStatus;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var int
     */
    public $paidOn;

    /**
     * @var string
     */
    public $payStatus;

    /**
     * @var float
     */
    public $paymentPrice;

    /**
     * @var string
     */
    public $periodType;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $productSkuCode;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $supplierCompanyName;

    /**
     * @var supplierTelephones
     */
    public $supplierTelephones;

    /**
     * @var float
     */
    public $totalPrice;
    protected $_name = [
        'accountQuantity'     => 'AccountQuantity',
        'aliUid'              => 'AliUid',
        'components'          => 'Components',
        'couponPrice'         => 'CouponPrice',
        'createdOn'           => 'CreatedOn',
        'instanceIds'         => 'InstanceIds',
        'orderId'             => 'OrderId',
        'orderStatus'         => 'OrderStatus',
        'orderType'           => 'OrderType',
        'originalPrice'       => 'OriginalPrice',
        'paidOn'              => 'PaidOn',
        'payStatus'           => 'PayStatus',
        'paymentPrice'        => 'PaymentPrice',
        'periodType'          => 'PeriodType',
        'productCode'         => 'ProductCode',
        'productName'         => 'ProductName',
        'productSkuCode'      => 'ProductSkuCode',
        'quantity'            => 'Quantity',
        'requestId'           => 'RequestId',
        'supplierCompanyName' => 'SupplierCompanyName',
        'supplierTelephones'  => 'SupplierTelephones',
        'totalPrice'          => 'TotalPrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountQuantity) {
            $res['AccountQuantity'] = $this->accountQuantity;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->components) {
            $res['Components'] = $this->components;
        }
        if (null !== $this->couponPrice) {
            $res['CouponPrice'] = $this->couponPrice;
        }
        if (null !== $this->createdOn) {
            $res['CreatedOn'] = $this->createdOn;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = null !== $this->instanceIds ? $this->instanceIds->toMap() : null;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->paidOn) {
            $res['PaidOn'] = $this->paidOn;
        }
        if (null !== $this->payStatus) {
            $res['PayStatus'] = $this->payStatus;
        }
        if (null !== $this->paymentPrice) {
            $res['PaymentPrice'] = $this->paymentPrice;
        }
        if (null !== $this->periodType) {
            $res['PeriodType'] = $this->periodType;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->productSkuCode) {
            $res['ProductSkuCode'] = $this->productSkuCode;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->supplierCompanyName) {
            $res['SupplierCompanyName'] = $this->supplierCompanyName;
        }
        if (null !== $this->supplierTelephones) {
            $res['SupplierTelephones'] = null !== $this->supplierTelephones ? $this->supplierTelephones->toMap() : null;
        }
        if (null !== $this->totalPrice) {
            $res['TotalPrice'] = $this->totalPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOrderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountQuantity'])) {
            $model->accountQuantity = $map['AccountQuantity'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Components'])) {
            $model->components = $map['Components'];
        }
        if (isset($map['CouponPrice'])) {
            $model->couponPrice = $map['CouponPrice'];
        }
        if (isset($map['CreatedOn'])) {
            $model->createdOn = $map['CreatedOn'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = instanceIds::fromMap($map['InstanceIds']);
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['PaidOn'])) {
            $model->paidOn = $map['PaidOn'];
        }
        if (isset($map['PayStatus'])) {
            $model->payStatus = $map['PayStatus'];
        }
        if (isset($map['PaymentPrice'])) {
            $model->paymentPrice = $map['PaymentPrice'];
        }
        if (isset($map['PeriodType'])) {
            $model->periodType = $map['PeriodType'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['ProductSkuCode'])) {
            $model->productSkuCode = $map['ProductSkuCode'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SupplierCompanyName'])) {
            $model->supplierCompanyName = $map['SupplierCompanyName'];
        }
        if (isset($map['SupplierTelephones'])) {
            $model->supplierTelephones = supplierTelephones::fromMap($map['SupplierTelephones']);
        }
        if (isset($map['TotalPrice'])) {
            $model->totalPrice = $map['TotalPrice'];
        }

        return $model;
    }
}
