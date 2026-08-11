<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryOrderResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryOrderResponseBody\data\itemInfo\cancelPolicy;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryOrderResponseBody\data\itemInfo\dailyPrices;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryOrderResponseBody\data\itemInfo\meal;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelQueryOrderResponseBody\data\itemInfo\totalPrice;

class itemInfo extends Model
{
    /**
     * @var cancelPolicy
     */
    public $cancelPolicy;

    /**
     * @var string
     */
    public $checkIn;

    /**
     * @var int
     */
    public $checkInNumber;

    /**
     * @var string
     */
    public $checkOut;

    /**
     * @var dailyPrices[]
     */
    public $dailyPrices;

    /**
     * @var meal
     */
    public $meal;

    /**
     * @var int
     */
    public $roomCount;

    /**
     * @var totalPrice
     */
    public $totalPrice;
    protected $_name = [
        'cancelPolicy' => 'CancelPolicy',
        'checkIn' => 'CheckIn',
        'checkInNumber' => 'CheckInNumber',
        'checkOut' => 'CheckOut',
        'dailyPrices' => 'DailyPrices',
        'meal' => 'Meal',
        'roomCount' => 'RoomCount',
        'totalPrice' => 'TotalPrice',
    ];

    public function validate()
    {
        if (null !== $this->cancelPolicy) {
            $this->cancelPolicy->validate();
        }
        if (\is_array($this->dailyPrices)) {
            Model::validateArray($this->dailyPrices);
        }
        if (null !== $this->meal) {
            $this->meal->validate();
        }
        if (null !== $this->totalPrice) {
            $this->totalPrice->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cancelPolicy) {
            $res['CancelPolicy'] = null !== $this->cancelPolicy ? $this->cancelPolicy->toArray($noStream) : $this->cancelPolicy;
        }

        if (null !== $this->checkIn) {
            $res['CheckIn'] = $this->checkIn;
        }

        if (null !== $this->checkInNumber) {
            $res['CheckInNumber'] = $this->checkInNumber;
        }

        if (null !== $this->checkOut) {
            $res['CheckOut'] = $this->checkOut;
        }

        if (null !== $this->dailyPrices) {
            if (\is_array($this->dailyPrices)) {
                $res['DailyPrices'] = [];
                $n1 = 0;
                foreach ($this->dailyPrices as $item1) {
                    $res['DailyPrices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->meal) {
            $res['Meal'] = null !== $this->meal ? $this->meal->toArray($noStream) : $this->meal;
        }

        if (null !== $this->roomCount) {
            $res['RoomCount'] = $this->roomCount;
        }

        if (null !== $this->totalPrice) {
            $res['TotalPrice'] = null !== $this->totalPrice ? $this->totalPrice->toArray($noStream) : $this->totalPrice;
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
        if (isset($map['CancelPolicy'])) {
            $model->cancelPolicy = cancelPolicy::fromMap($map['CancelPolicy']);
        }

        if (isset($map['CheckIn'])) {
            $model->checkIn = $map['CheckIn'];
        }

        if (isset($map['CheckInNumber'])) {
            $model->checkInNumber = $map['CheckInNumber'];
        }

        if (isset($map['CheckOut'])) {
            $model->checkOut = $map['CheckOut'];
        }

        if (isset($map['DailyPrices'])) {
            if (!empty($map['DailyPrices'])) {
                $model->dailyPrices = [];
                $n1 = 0;
                foreach ($map['DailyPrices'] as $item1) {
                    $model->dailyPrices[$n1] = dailyPrices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Meal'])) {
            $model->meal = meal::fromMap($map['Meal']);
        }

        if (isset($map['RoomCount'])) {
            $model->roomCount = $map['RoomCount'];
        }

        if (isset($map['TotalPrice'])) {
            $model->totalPrice = totalPrice::fromMap($map['TotalPrice']);
        }

        return $model;
    }
}
