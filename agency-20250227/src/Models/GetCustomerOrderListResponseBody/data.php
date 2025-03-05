<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20250227\Models\GetCustomerOrderListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $amountDiscount;
    /**
     * @var float
     */
    public $amountDue;
    /**
     * @var string
     */
    public $createdAt;
    /**
     * @var string
     */
    public $customerAccount;
    /**
     * @var string
     */
    public $customerClassification;
    /**
     * @var int
     */
    public $customerUid;
    /**
     * @var float
     */
    public $deductedAmountByCoupons;
    /**
     * @var float
     */
    public $discountedPrice;
    /**
     * @var int
     */
    public $orderId;
    /**
     * @var int
     */
    public $orderStatus;
    /**
     * @var string
     */
    public $orderType;
    /**
     * @var string
     */
    public $paidAt;
    /**
     * @var int
     */
    public $payType;
    /**
     * @var float
     */
    public $price;
    /**
     * @var string
     */
    public $productCode;
    /**
     * @var string
     */
    public $productName;
    /**
     * @var int
     */
    public $projectId;
    /**
     * @var string[]
     */
    public $ramAccountForCustomerManagers;
    protected $_name = [
        'amountDiscount'                => 'AmountDiscount',
        'amountDue'                     => 'AmountDue',
        'createdAt'                     => 'CreatedAt',
        'customerAccount'               => 'CustomerAccount',
        'customerClassification'        => 'CustomerClassification',
        'customerUid'                   => 'CustomerUid',
        'deductedAmountByCoupons'       => 'DeductedAmountByCoupons',
        'discountedPrice'               => 'DiscountedPrice',
        'orderId'                       => 'OrderId',
        'orderStatus'                   => 'OrderStatus',
        'orderType'                     => 'OrderType',
        'paidAt'                        => 'PaidAt',
        'payType'                       => 'PayType',
        'price'                         => 'Price',
        'productCode'                   => 'ProductCode',
        'productName'                   => 'ProductName',
        'projectId'                     => 'ProjectId',
        'ramAccountForCustomerManagers' => 'RamAccountForCustomerManagers',
    ];

    public function validate()
    {
        if (\is_array($this->ramAccountForCustomerManagers)) {
            Model::validateArray($this->ramAccountForCustomerManagers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amountDiscount) {
            $res['AmountDiscount'] = $this->amountDiscount;
        }

        if (null !== $this->amountDue) {
            $res['AmountDue'] = $this->amountDue;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->customerAccount) {
            $res['CustomerAccount'] = $this->customerAccount;
        }

        if (null !== $this->customerClassification) {
            $res['CustomerClassification'] = $this->customerClassification;
        }

        if (null !== $this->customerUid) {
            $res['CustomerUid'] = $this->customerUid;
        }

        if (null !== $this->deductedAmountByCoupons) {
            $res['DeductedAmountByCoupons'] = $this->deductedAmountByCoupons;
        }

        if (null !== $this->discountedPrice) {
            $res['DiscountedPrice'] = $this->discountedPrice;
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

        if (null !== $this->paidAt) {
            $res['PaidAt'] = $this->paidAt;
        }

        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }

        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->ramAccountForCustomerManagers) {
            if (\is_array($this->ramAccountForCustomerManagers)) {
                $res['RamAccountForCustomerManagers'] = [];
                $n1                                   = 0;
                foreach ($this->ramAccountForCustomerManagers as $item1) {
                    $res['RamAccountForCustomerManagers'][$n1++] = $item1;
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
        if (isset($map['AmountDiscount'])) {
            $model->amountDiscount = $map['AmountDiscount'];
        }

        if (isset($map['AmountDue'])) {
            $model->amountDue = $map['AmountDue'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['CustomerAccount'])) {
            $model->customerAccount = $map['CustomerAccount'];
        }

        if (isset($map['CustomerClassification'])) {
            $model->customerClassification = $map['CustomerClassification'];
        }

        if (isset($map['CustomerUid'])) {
            $model->customerUid = $map['CustomerUid'];
        }

        if (isset($map['DeductedAmountByCoupons'])) {
            $model->deductedAmountByCoupons = $map['DeductedAmountByCoupons'];
        }

        if (isset($map['DiscountedPrice'])) {
            $model->discountedPrice = $map['DiscountedPrice'];
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

        if (isset($map['PaidAt'])) {
            $model->paidAt = $map['PaidAt'];
        }

        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }

        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RamAccountForCustomerManagers'])) {
            if (!empty($map['RamAccountForCustomerManagers'])) {
                $model->ramAccountForCustomerManagers = [];
                $n1                                   = 0;
                foreach ($map['RamAccountForCustomerManagers'] as $item1) {
                    $model->ramAccountForCustomerManagers[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
