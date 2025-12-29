<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelOrderResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $amt;

    /**
     * @var int
     */
    public $applyAmt;

    /**
     * @var string
     */
    public $deliveryMethod;

    /**
     * @var string
     */
    public $deliveryRoomName;

    /**
     * @var int
     */
    public $deliveryTime;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $orderNo;

    /**
     * @var string
     */
    public $orderStatus;

    /**
     * @var string
     */
    public $paymentMethod;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var string
     */
    public $roomNo;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $sumAmt;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $typeIconUrl;

    /**
     * @var string
     */
    public $typeName;
    protected $_name = [
        'amt' => 'Amt',
        'applyAmt' => 'ApplyAmt',
        'deliveryMethod' => 'DeliveryMethod',
        'deliveryRoomName' => 'DeliveryRoomName',
        'deliveryTime' => 'DeliveryTime',
        'gmtCreate' => 'GmtCreate',
        'icon' => 'Icon',
        'itemId' => 'ItemId',
        'itemType' => 'ItemType',
        'name' => 'Name',
        'orderNo' => 'OrderNo',
        'orderStatus' => 'OrderStatus',
        'paymentMethod' => 'PaymentMethod',
        'quantity' => 'Quantity',
        'roomNo' => 'RoomNo',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'sumAmt' => 'SumAmt',
        'type' => 'Type',
        'typeIconUrl' => 'TypeIconUrl',
        'typeName' => 'TypeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amt) {
            $res['Amt'] = $this->amt;
        }

        if (null !== $this->applyAmt) {
            $res['ApplyAmt'] = $this->applyAmt;
        }

        if (null !== $this->deliveryMethod) {
            $res['DeliveryMethod'] = $this->deliveryMethod;
        }

        if (null !== $this->deliveryRoomName) {
            $res['DeliveryRoomName'] = $this->deliveryRoomName;
        }

        if (null !== $this->deliveryTime) {
            $res['DeliveryTime'] = $this->deliveryTime;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }

        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }

        if (null !== $this->itemType) {
            $res['ItemType'] = $this->itemType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->orderNo) {
            $res['OrderNo'] = $this->orderNo;
        }

        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }

        if (null !== $this->paymentMethod) {
            $res['PaymentMethod'] = $this->paymentMethod;
        }

        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }

        if (null !== $this->roomNo) {
            $res['RoomNo'] = $this->roomNo;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->sumAmt) {
            $res['SumAmt'] = $this->sumAmt;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->typeIconUrl) {
            $res['TypeIconUrl'] = $this->typeIconUrl;
        }

        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
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
        if (isset($map['Amt'])) {
            $model->amt = $map['Amt'];
        }

        if (isset($map['ApplyAmt'])) {
            $model->applyAmt = $map['ApplyAmt'];
        }

        if (isset($map['DeliveryMethod'])) {
            $model->deliveryMethod = $map['DeliveryMethod'];
        }

        if (isset($map['DeliveryRoomName'])) {
            $model->deliveryRoomName = $map['DeliveryRoomName'];
        }

        if (isset($map['DeliveryTime'])) {
            $model->deliveryTime = $map['DeliveryTime'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }

        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }

        if (isset($map['ItemType'])) {
            $model->itemType = $map['ItemType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OrderNo'])) {
            $model->orderNo = $map['OrderNo'];
        }

        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }

        if (isset($map['PaymentMethod'])) {
            $model->paymentMethod = $map['PaymentMethod'];
        }

        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        if (isset($map['RoomNo'])) {
            $model->roomNo = $map['RoomNo'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SumAmt'])) {
            $model->sumAmt = $map['SumAmt'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['TypeIconUrl'])) {
            $model->typeIconUrl = $map['TypeIconUrl'];
        }

        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
