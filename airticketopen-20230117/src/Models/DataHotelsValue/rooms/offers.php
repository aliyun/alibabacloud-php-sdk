<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataHotelsValue\rooms;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataHotelsValue\rooms\offers\cancelPolicy;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataHotelsValue\rooms\offers\sellingDailyPrices;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataHotelsValue\rooms\offers\sellingTotalPrice;

class offers extends Model
{
    /**
     * @var string
     */
    public $itemOfferKey;

    /**
     * @var string
     */
    public $ratePlanName;

    /**
     * @var string
     */
    public $mealType;

    /**
     * @var int
     */
    public $mealCount;

    /**
     * @var cancelPolicy
     */
    public $cancelPolicy;

    /**
     * @var sellingTotalPrice
     */
    public $sellingTotalPrice;

    /**
     * @var sellingDailyPrices[]
     */
    public $sellingDailyPrices;

    /**
     * @var int
     */
    public $availableRooms;

    /**
     * @var int
     */
    public $maxOccupancy;

    /**
     * @var string
     */
    public $confirmType;
    protected $_name = [
        'itemOfferKey' => 'ItemOfferKey',
        'ratePlanName' => 'RatePlanName',
        'mealType' => 'MealType',
        'mealCount' => 'MealCount',
        'cancelPolicy' => 'CancelPolicy',
        'sellingTotalPrice' => 'SellingTotalPrice',
        'sellingDailyPrices' => 'SellingDailyPrices',
        'availableRooms' => 'AvailableRooms',
        'maxOccupancy' => 'MaxOccupancy',
        'confirmType' => 'ConfirmType',
    ];

    public function validate()
    {
        if (null !== $this->cancelPolicy) {
            $this->cancelPolicy->validate();
        }
        if (null !== $this->sellingTotalPrice) {
            $this->sellingTotalPrice->validate();
        }
        if (\is_array($this->sellingDailyPrices)) {
            Model::validateArray($this->sellingDailyPrices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemOfferKey) {
            $res['ItemOfferKey'] = $this->itemOfferKey;
        }

        if (null !== $this->ratePlanName) {
            $res['RatePlanName'] = $this->ratePlanName;
        }

        if (null !== $this->mealType) {
            $res['MealType'] = $this->mealType;
        }

        if (null !== $this->mealCount) {
            $res['MealCount'] = $this->mealCount;
        }

        if (null !== $this->cancelPolicy) {
            $res['CancelPolicy'] = null !== $this->cancelPolicy ? $this->cancelPolicy->toArray($noStream) : $this->cancelPolicy;
        }

        if (null !== $this->sellingTotalPrice) {
            $res['SellingTotalPrice'] = null !== $this->sellingTotalPrice ? $this->sellingTotalPrice->toArray($noStream) : $this->sellingTotalPrice;
        }

        if (null !== $this->sellingDailyPrices) {
            if (\is_array($this->sellingDailyPrices)) {
                $res['SellingDailyPrices'] = [];
                $n1 = 0;
                foreach ($this->sellingDailyPrices as $item1) {
                    $res['SellingDailyPrices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->availableRooms) {
            $res['AvailableRooms'] = $this->availableRooms;
        }

        if (null !== $this->maxOccupancy) {
            $res['MaxOccupancy'] = $this->maxOccupancy;
        }

        if (null !== $this->confirmType) {
            $res['ConfirmType'] = $this->confirmType;
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
        if (isset($map['ItemOfferKey'])) {
            $model->itemOfferKey = $map['ItemOfferKey'];
        }

        if (isset($map['RatePlanName'])) {
            $model->ratePlanName = $map['RatePlanName'];
        }

        if (isset($map['MealType'])) {
            $model->mealType = $map['MealType'];
        }

        if (isset($map['MealCount'])) {
            $model->mealCount = $map['MealCount'];
        }

        if (isset($map['CancelPolicy'])) {
            $model->cancelPolicy = cancelPolicy::fromMap($map['CancelPolicy']);
        }

        if (isset($map['SellingTotalPrice'])) {
            $model->sellingTotalPrice = sellingTotalPrice::fromMap($map['SellingTotalPrice']);
        }

        if (isset($map['SellingDailyPrices'])) {
            if (!empty($map['SellingDailyPrices'])) {
                $model->sellingDailyPrices = [];
                $n1 = 0;
                foreach ($map['SellingDailyPrices'] as $item1) {
                    $model->sellingDailyPrices[$n1] = sellingDailyPrices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AvailableRooms'])) {
            $model->availableRooms = $map['AvailableRooms'];
        }

        if (isset($map['MaxOccupancy'])) {
            $model->maxOccupancy = $map['MaxOccupancy'];
        }

        if (isset($map['ConfirmType'])) {
            $model->confirmType = $map['ConfirmType'];
        }

        return $model;
    }
}
