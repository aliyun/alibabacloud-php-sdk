<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Dara\Model;

class DescribeOrderForIsvResponseBody extends Model
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
     * @var mixed
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
     * @var string[]
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
     * @var float
     */
    public $totalPrice;
    protected $_name = [
        'accountQuantity' => 'AccountQuantity',
        'aliUid'          => 'AliUid',
        'components'      => 'Components',
        'couponPrice'     => 'CouponPrice',
        'createdOn'       => 'CreatedOn',
        'instanceIds'     => 'InstanceIds',
        'orderId'         => 'OrderId',
        'orderStatus'     => 'OrderStatus',
        'orderType'       => 'OrderType',
        'originalPrice'   => 'OriginalPrice',
        'paidOn'          => 'PaidOn',
        'payStatus'       => 'PayStatus',
        'paymentPrice'    => 'PaymentPrice',
        'periodType'      => 'PeriodType',
        'productCode'     => 'ProductCode',
        'productName'     => 'ProductName',
        'productSkuCode'  => 'ProductSkuCode',
        'quantity'        => 'Quantity',
        'requestId'       => 'RequestId',
        'totalPrice'      => 'TotalPrice',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1                 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->totalPrice) {
            $res['TotalPrice'] = $this->totalPrice;
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
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1                 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1++] = $item1;
                }
            }
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

        if (isset($map['TotalPrice'])) {
            $model->totalPrice = $map['TotalPrice'];
        }

        return $model;
    }
}
