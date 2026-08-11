<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelValidatePriceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelValidatePriceResponseBody\data\cancellationPolicies;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelValidatePriceResponseBody\data\dailyPrices;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelValidatePriceResponseBody\data\totalPrice;

class data extends Model
{
    /**
     * @var cancellationPolicies[]
     */
    public $cancellationPolicies;

    /**
     * @var dailyPrices[]
     */
    public $dailyPrices;

    /**
     * @var string
     */
    public $itemOfferId;

    /**
     * @var totalPrice
     */
    public $totalPrice;

    /**
     * @var string
     */
    public $tracerId;
    protected $_name = [
        'cancellationPolicies' => 'CancellationPolicies',
        'dailyPrices' => 'DailyPrices',
        'itemOfferId' => 'ItemOfferId',
        'totalPrice' => 'TotalPrice',
        'tracerId' => 'TracerId',
    ];

    public function validate()
    {
        if (\is_array($this->cancellationPolicies)) {
            Model::validateArray($this->cancellationPolicies);
        }
        if (\is_array($this->dailyPrices)) {
            Model::validateArray($this->dailyPrices);
        }
        if (null !== $this->totalPrice) {
            $this->totalPrice->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cancellationPolicies) {
            if (\is_array($this->cancellationPolicies)) {
                $res['CancellationPolicies'] = [];
                $n1 = 0;
                foreach ($this->cancellationPolicies as $item1) {
                    $res['CancellationPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->itemOfferId) {
            $res['ItemOfferId'] = $this->itemOfferId;
        }

        if (null !== $this->totalPrice) {
            $res['TotalPrice'] = null !== $this->totalPrice ? $this->totalPrice->toArray($noStream) : $this->totalPrice;
        }

        if (null !== $this->tracerId) {
            $res['TracerId'] = $this->tracerId;
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
        if (isset($map['CancellationPolicies'])) {
            if (!empty($map['CancellationPolicies'])) {
                $model->cancellationPolicies = [];
                $n1 = 0;
                foreach ($map['CancellationPolicies'] as $item1) {
                    $model->cancellationPolicies[$n1] = cancellationPolicies::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['ItemOfferId'])) {
            $model->itemOfferId = $map['ItemOfferId'];
        }

        if (isset($map['TotalPrice'])) {
            $model->totalPrice = totalPrice::fromMap($map['TotalPrice']);
        }

        if (isset($map['TracerId'])) {
            $model->tracerId = $map['TracerId'];
        }

        return $model;
    }
}
