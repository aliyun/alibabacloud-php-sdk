<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribePostPaidDesktopBillsResponseBody;

use AlibabaCloud\Tea\Model;

class bills extends Model
{
    /**
     * @var string
     */
    public $billId;

    /**
     * @var string
     */
    public $discountPrice;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $priceUnit;

    /**
     * @var string
     */
    public $cashPayment;

    /**
     * @var string
     */
    public $payment;

    /**
     * @var string
     */
    public $originalPrice;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $productDetail;

    /**
     * @var string
     */
    public $usage;

    /**
     * @var string
     */
    public $goldNote;

    /**
     * @var string
     */
    public $usageUnit;

    /**
     * @var string
     */
    public $price;

    /**
     * @var string
     */
    public $billStartTime;

    /**
     * @var string
     */
    public $billType;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $chargeItem;

    /**
     * @var string
     */
    public $resourceGroupName;

    /**
     * @var string
     */
    public $consumeTime;

    /**
     * @var string
     */
    public $consumeType;

    /**
     * @var string
     */
    public $billEndTime;
    protected $_name = [
        'billId'            => 'BillId',
        'discountPrice'     => 'DiscountPrice',
        'product'           => 'Product',
        'priceUnit'         => 'PriceUnit',
        'cashPayment'       => 'CashPayment',
        'payment'           => 'Payment',
        'originalPrice'     => 'OriginalPrice',
        'instanceId'        => 'InstanceId',
        'productDetail'     => 'ProductDetail',
        'usage'             => 'Usage',
        'goldNote'          => 'GoldNote',
        'usageUnit'         => 'UsageUnit',
        'price'             => 'Price',
        'billStartTime'     => 'BillStartTime',
        'billType'          => 'BillType',
        'resourceGroupId'   => 'ResourceGroupId',
        'chargeItem'        => 'ChargeItem',
        'resourceGroupName' => 'ResourceGroupName',
        'consumeTime'       => 'ConsumeTime',
        'consumeType'       => 'ConsumeType',
        'billEndTime'       => 'BillEndTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billId) {
            $res['BillId'] = $this->billId;
        }
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->priceUnit) {
            $res['PriceUnit'] = $this->priceUnit;
        }
        if (null !== $this->cashPayment) {
            $res['CashPayment'] = $this->cashPayment;
        }
        if (null !== $this->payment) {
            $res['Payment'] = $this->payment;
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->productDetail) {
            $res['ProductDetail'] = $this->productDetail;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }
        if (null !== $this->goldNote) {
            $res['GoldNote'] = $this->goldNote;
        }
        if (null !== $this->usageUnit) {
            $res['UsageUnit'] = $this->usageUnit;
        }
        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }
        if (null !== $this->billStartTime) {
            $res['BillStartTime'] = $this->billStartTime;
        }
        if (null !== $this->billType) {
            $res['BillType'] = $this->billType;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->chargeItem) {
            $res['ChargeItem'] = $this->chargeItem;
        }
        if (null !== $this->resourceGroupName) {
            $res['ResourceGroupName'] = $this->resourceGroupName;
        }
        if (null !== $this->consumeTime) {
            $res['ConsumeTime'] = $this->consumeTime;
        }
        if (null !== $this->consumeType) {
            $res['ConsumeType'] = $this->consumeType;
        }
        if (null !== $this->billEndTime) {
            $res['BillEndTime'] = $this->billEndTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bills
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillId'])) {
            $model->billId = $map['BillId'];
        }
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['PriceUnit'])) {
            $model->priceUnit = $map['PriceUnit'];
        }
        if (isset($map['CashPayment'])) {
            $model->cashPayment = $map['CashPayment'];
        }
        if (isset($map['Payment'])) {
            $model->payment = $map['Payment'];
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ProductDetail'])) {
            $model->productDetail = $map['ProductDetail'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['GoldNote'])) {
            $model->goldNote = $map['GoldNote'];
        }
        if (isset($map['UsageUnit'])) {
            $model->usageUnit = $map['UsageUnit'];
        }
        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }
        if (isset($map['BillStartTime'])) {
            $model->billStartTime = $map['BillStartTime'];
        }
        if (isset($map['BillType'])) {
            $model->billType = $map['BillType'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ChargeItem'])) {
            $model->chargeItem = $map['ChargeItem'];
        }
        if (isset($map['ResourceGroupName'])) {
            $model->resourceGroupName = $map['ResourceGroupName'];
        }
        if (isset($map['ConsumeTime'])) {
            $model->consumeTime = $map['ConsumeTime'];
        }
        if (isset($map['ConsumeType'])) {
            $model->consumeType = $map['ConsumeType'];
        }
        if (isset($map['BillEndTime'])) {
            $model->billEndTime = $map['BillEndTime'];
        }

        return $model;
    }
}
