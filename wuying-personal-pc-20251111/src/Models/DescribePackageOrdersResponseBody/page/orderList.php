<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models\DescribePackageOrdersResponseBody\page;

use AlibabaCloud\Dara\Model;

class orderList extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var int
     */
    public $creatorAliUid;

    /**
     * @var string
     */
    public $deliveryAddress;

    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var string
     */
    public $gmtCanceledTime;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtPaidTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
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
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productSkuCode;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $tradePrice;
    protected $_name = [
        'amount' => 'Amount',
        'creatorAliUid' => 'CreatorAliUid',
        'deliveryAddress' => 'DeliveryAddress',
        'desktopId' => 'DesktopId',
        'gmtCanceledTime' => 'GmtCanceledTime',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtPaidTime' => 'GmtPaidTime',
        'instanceId' => 'InstanceId',
        'orderId' => 'OrderId',
        'orderStatus' => 'OrderStatus',
        'orderType' => 'OrderType',
        'productCode' => 'ProductCode',
        'productSkuCode' => 'ProductSkuCode',
        'productType' => 'ProductType',
        'tradePrice' => 'TradePrice',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->creatorAliUid) {
            $res['CreatorAliUid'] = $this->creatorAliUid;
        }

        if (null !== $this->deliveryAddress) {
            $res['DeliveryAddress'] = $this->deliveryAddress;
        }

        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }

        if (null !== $this->gmtCanceledTime) {
            $res['GmtCanceledTime'] = $this->gmtCanceledTime;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtPaidTime) {
            $res['GmtPaidTime'] = $this->gmtPaidTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productSkuCode) {
            $res['ProductSkuCode'] = $this->productSkuCode;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['CreatorAliUid'])) {
            $model->creatorAliUid = $map['CreatorAliUid'];
        }

        if (isset($map['DeliveryAddress'])) {
            $model->deliveryAddress = $map['DeliveryAddress'];
        }

        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }

        if (isset($map['GmtCanceledTime'])) {
            $model->gmtCanceledTime = $map['GmtCanceledTime'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtPaidTime'])) {
            $model->gmtPaidTime = $map['GmtPaidTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductSkuCode'])) {
            $model->productSkuCode = $map['ProductSkuCode'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
