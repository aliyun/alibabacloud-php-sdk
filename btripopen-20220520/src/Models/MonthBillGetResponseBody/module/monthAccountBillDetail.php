<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\MonthBillGetResponseBody\module;

use AlibabaCloud\Dara\Model;

class monthAccountBillDetail extends Model
{
    /**
     * @var int
     */
    public $billConfirmed;

    /**
     * @var float
     */
    public $carAmount;

    /**
     * @var float
     */
    public $damageAmount;

    /**
     * @var float
     */
    public $flightAmount;

    /**
     * @var float
     */
    public $fuPoint;

    /**
     * @var float
     */
    public $hotelAmount;

    /**
     * @var float
     */
    public $ieFlightAmount;

    /**
     * @var float
     */
    public $ieHotelAmount;

    /**
     * @var int
     */
    public $mailBillDate;

    /**
     * @var float
     */
    public $mealAmount;

    /**
     * @var float
     */
    public $serviceAmount;

    /**
     * @var float
     */
    public $trainAmount;

    /**
     * @var float
     */
    public $vasAmount;
    protected $_name = [
        'billConfirmed' => 'billConfirmed',
        'carAmount' => 'carAmount',
        'damageAmount' => 'damageAmount',
        'flightAmount' => 'flightAmount',
        'fuPoint' => 'fuPoint',
        'hotelAmount' => 'hotelAmount',
        'ieFlightAmount' => 'ieFlightAmount',
        'ieHotelAmount' => 'ieHotelAmount',
        'mailBillDate' => 'mailBillDate',
        'mealAmount' => 'mealAmount',
        'serviceAmount' => 'serviceAmount',
        'trainAmount' => 'trainAmount',
        'vasAmount' => 'vasAmount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billConfirmed) {
            $res['billConfirmed'] = $this->billConfirmed;
        }

        if (null !== $this->carAmount) {
            $res['carAmount'] = $this->carAmount;
        }

        if (null !== $this->damageAmount) {
            $res['damageAmount'] = $this->damageAmount;
        }

        if (null !== $this->flightAmount) {
            $res['flightAmount'] = $this->flightAmount;
        }

        if (null !== $this->fuPoint) {
            $res['fuPoint'] = $this->fuPoint;
        }

        if (null !== $this->hotelAmount) {
            $res['hotelAmount'] = $this->hotelAmount;
        }

        if (null !== $this->ieFlightAmount) {
            $res['ieFlightAmount'] = $this->ieFlightAmount;
        }

        if (null !== $this->ieHotelAmount) {
            $res['ieHotelAmount'] = $this->ieHotelAmount;
        }

        if (null !== $this->mailBillDate) {
            $res['mailBillDate'] = $this->mailBillDate;
        }

        if (null !== $this->mealAmount) {
            $res['mealAmount'] = $this->mealAmount;
        }

        if (null !== $this->serviceAmount) {
            $res['serviceAmount'] = $this->serviceAmount;
        }

        if (null !== $this->trainAmount) {
            $res['trainAmount'] = $this->trainAmount;
        }

        if (null !== $this->vasAmount) {
            $res['vasAmount'] = $this->vasAmount;
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
        if (isset($map['billConfirmed'])) {
            $model->billConfirmed = $map['billConfirmed'];
        }

        if (isset($map['carAmount'])) {
            $model->carAmount = $map['carAmount'];
        }

        if (isset($map['damageAmount'])) {
            $model->damageAmount = $map['damageAmount'];
        }

        if (isset($map['flightAmount'])) {
            $model->flightAmount = $map['flightAmount'];
        }

        if (isset($map['fuPoint'])) {
            $model->fuPoint = $map['fuPoint'];
        }

        if (isset($map['hotelAmount'])) {
            $model->hotelAmount = $map['hotelAmount'];
        }

        if (isset($map['ieFlightAmount'])) {
            $model->ieFlightAmount = $map['ieFlightAmount'];
        }

        if (isset($map['ieHotelAmount'])) {
            $model->ieHotelAmount = $map['ieHotelAmount'];
        }

        if (isset($map['mailBillDate'])) {
            $model->mailBillDate = $map['mailBillDate'];
        }

        if (isset($map['mealAmount'])) {
            $model->mealAmount = $map['mealAmount'];
        }

        if (isset($map['serviceAmount'])) {
            $model->serviceAmount = $map['serviceAmount'];
        }

        if (isset($map['trainAmount'])) {
            $model->trainAmount = $map['trainAmount'];
        }

        if (isset($map['vasAmount'])) {
            $model->vasAmount = $map['vasAmount'];
        }

        return $model;
    }
}
