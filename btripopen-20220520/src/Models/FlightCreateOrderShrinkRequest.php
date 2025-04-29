<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class FlightCreateOrderShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $arrAirportCode;

    /**
     * @var string
     */
    public $arrCityCode;

    /**
     * @var int
     */
    public $autoPay;

    /**
     * @var string
     */
    public $buyerName;

    /**
     * @var string
     */
    public $buyerUniqueKey;

    /**
     * @var string
     */
    public $contactInfoShrink;

    /**
     * @var string
     */
    public $depAirportCode;

    /**
     * @var string
     */
    public $depCityCode;

    /**
     * @var string
     */
    public $depDate;

    /**
     * @var string
     */
    public $disOrderId;

    /**
     * @var string
     */
    public $orderAttrShrink;

    /**
     * @var string
     */
    public $orderParams;

    /**
     * @var string
     */
    public $otaItemId;

    /**
     * @var int
     */
    public $price;

    /**
     * @var string
     */
    public $receiptAddress;

    /**
     * @var int
     */
    public $receiptTarget;

    /**
     * @var string
     */
    public $receiptTitle;

    /**
     * @var string
     */
    public $travelerInfoListShrink;

    /**
     * @var int
     */
    public $tripType;
    protected $_name = [
        'arrAirportCode' => 'arr_airport_code',
        'arrCityCode' => 'arr_city_code',
        'autoPay' => 'auto_pay',
        'buyerName' => 'buyer_name',
        'buyerUniqueKey' => 'buyer_unique_key',
        'contactInfoShrink' => 'contact_info',
        'depAirportCode' => 'dep_airport_code',
        'depCityCode' => 'dep_city_code',
        'depDate' => 'dep_date',
        'disOrderId' => 'dis_order_id',
        'orderAttrShrink' => 'order_attr',
        'orderParams' => 'order_params',
        'otaItemId' => 'ota_item_id',
        'price' => 'price',
        'receiptAddress' => 'receipt_address',
        'receiptTarget' => 'receipt_target',
        'receiptTitle' => 'receipt_title',
        'travelerInfoListShrink' => 'traveler_info_list',
        'tripType' => 'trip_type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arrAirportCode) {
            $res['arr_airport_code'] = $this->arrAirportCode;
        }

        if (null !== $this->arrCityCode) {
            $res['arr_city_code'] = $this->arrCityCode;
        }

        if (null !== $this->autoPay) {
            $res['auto_pay'] = $this->autoPay;
        }

        if (null !== $this->buyerName) {
            $res['buyer_name'] = $this->buyerName;
        }

        if (null !== $this->buyerUniqueKey) {
            $res['buyer_unique_key'] = $this->buyerUniqueKey;
        }

        if (null !== $this->contactInfoShrink) {
            $res['contact_info'] = $this->contactInfoShrink;
        }

        if (null !== $this->depAirportCode) {
            $res['dep_airport_code'] = $this->depAirportCode;
        }

        if (null !== $this->depCityCode) {
            $res['dep_city_code'] = $this->depCityCode;
        }

        if (null !== $this->depDate) {
            $res['dep_date'] = $this->depDate;
        }

        if (null !== $this->disOrderId) {
            $res['dis_order_id'] = $this->disOrderId;
        }

        if (null !== $this->orderAttrShrink) {
            $res['order_attr'] = $this->orderAttrShrink;
        }

        if (null !== $this->orderParams) {
            $res['order_params'] = $this->orderParams;
        }

        if (null !== $this->otaItemId) {
            $res['ota_item_id'] = $this->otaItemId;
        }

        if (null !== $this->price) {
            $res['price'] = $this->price;
        }

        if (null !== $this->receiptAddress) {
            $res['receipt_address'] = $this->receiptAddress;
        }

        if (null !== $this->receiptTarget) {
            $res['receipt_target'] = $this->receiptTarget;
        }

        if (null !== $this->receiptTitle) {
            $res['receipt_title'] = $this->receiptTitle;
        }

        if (null !== $this->travelerInfoListShrink) {
            $res['traveler_info_list'] = $this->travelerInfoListShrink;
        }

        if (null !== $this->tripType) {
            $res['trip_type'] = $this->tripType;
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
        if (isset($map['arr_airport_code'])) {
            $model->arrAirportCode = $map['arr_airport_code'];
        }

        if (isset($map['arr_city_code'])) {
            $model->arrCityCode = $map['arr_city_code'];
        }

        if (isset($map['auto_pay'])) {
            $model->autoPay = $map['auto_pay'];
        }

        if (isset($map['buyer_name'])) {
            $model->buyerName = $map['buyer_name'];
        }

        if (isset($map['buyer_unique_key'])) {
            $model->buyerUniqueKey = $map['buyer_unique_key'];
        }

        if (isset($map['contact_info'])) {
            $model->contactInfoShrink = $map['contact_info'];
        }

        if (isset($map['dep_airport_code'])) {
            $model->depAirportCode = $map['dep_airport_code'];
        }

        if (isset($map['dep_city_code'])) {
            $model->depCityCode = $map['dep_city_code'];
        }

        if (isset($map['dep_date'])) {
            $model->depDate = $map['dep_date'];
        }

        if (isset($map['dis_order_id'])) {
            $model->disOrderId = $map['dis_order_id'];
        }

        if (isset($map['order_attr'])) {
            $model->orderAttrShrink = $map['order_attr'];
        }

        if (isset($map['order_params'])) {
            $model->orderParams = $map['order_params'];
        }

        if (isset($map['ota_item_id'])) {
            $model->otaItemId = $map['ota_item_id'];
        }

        if (isset($map['price'])) {
            $model->price = $map['price'];
        }

        if (isset($map['receipt_address'])) {
            $model->receiptAddress = $map['receipt_address'];
        }

        if (isset($map['receipt_target'])) {
            $model->receiptTarget = $map['receipt_target'];
        }

        if (isset($map['receipt_title'])) {
            $model->receiptTitle = $map['receipt_title'];
        }

        if (isset($map['traveler_info_list'])) {
            $model->travelerInfoListShrink = $map['traveler_info_list'];
        }

        if (isset($map['trip_type'])) {
            $model->tripType = $map['trip_type'];
        }

        return $model;
    }
}
