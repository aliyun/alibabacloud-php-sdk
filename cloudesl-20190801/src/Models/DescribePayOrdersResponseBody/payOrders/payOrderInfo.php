<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribePayOrdersResponseBody\payOrders;

use AlibabaCloud\Tea\Model;

class payOrderInfo extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $commodityName;

    /**
     * @var string
     */
    public $detailName;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtPay;

    /**
     * @var bool
     */
    public $isAccepted;

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
     * @var float
     */
    public $originalAmount;

    /**
     * @var float
     */
    public $payAmount;

    /**
     * @var int
     */
    public $quantity;
    protected $_name = [
        'commodityCode'  => 'CommodityCode',
        'commodityName'  => 'CommodityName',
        'detailName'     => 'DetailName',
        'gmtCreate'      => 'GmtCreate',
        'gmtPay'         => 'GmtPay',
        'isAccepted'     => 'IsAccepted',
        'orderId'        => 'OrderId',
        'orderStatus'    => 'OrderStatus',
        'orderType'      => 'OrderType',
        'originalAmount' => 'OriginalAmount',
        'payAmount'      => 'PayAmount',
        'quantity'       => 'Quantity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->commodityName) {
            $res['CommodityName'] = $this->commodityName;
        }
        if (null !== $this->detailName) {
            $res['DetailName'] = $this->detailName;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtPay) {
            $res['GmtPay'] = $this->gmtPay;
        }
        if (null !== $this->isAccepted) {
            $res['IsAccepted'] = $this->isAccepted;
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
        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }
        if (null !== $this->payAmount) {
            $res['PayAmount'] = $this->payAmount;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return payOrderInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CommodityName'])) {
            $model->commodityName = $map['CommodityName'];
        }
        if (isset($map['DetailName'])) {
            $model->detailName = $map['DetailName'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtPay'])) {
            $model->gmtPay = $map['GmtPay'];
        }
        if (isset($map['IsAccepted'])) {
            $model->isAccepted = $map['IsAccepted'];
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
        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }
        if (isset($map['PayAmount'])) {
            $model->payAmount = $map['PayAmount'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        return $model;
    }
}
