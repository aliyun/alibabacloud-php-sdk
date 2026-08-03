<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelValidatePriceResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\GlobalHotelValidatePriceResponseBody\data\pricing\nightlyPrices;

class pricing extends Model
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var nightlyPrices[]
     */
    public $nightlyPrices;

    /**
     * @var string
     */
    public $totalAmount;

    /**
     * @var string
     */
    public $tracerId;
    protected $_name = [
        'currency' => 'Currency',
        'nightlyPrices' => 'NightlyPrices',
        'totalAmount' => 'TotalAmount',
        'tracerId' => 'TracerId',
    ];

    public function validate()
    {
        if (\is_array($this->nightlyPrices)) {
            Model::validateArray($this->nightlyPrices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->nightlyPrices) {
            if (\is_array($this->nightlyPrices)) {
                $res['NightlyPrices'] = [];
                $n1 = 0;
                foreach ($this->nightlyPrices as $item1) {
                    $res['NightlyPrices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalAmount) {
            $res['TotalAmount'] = $this->totalAmount;
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
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['NightlyPrices'])) {
            if (!empty($map['NightlyPrices'])) {
                $model->nightlyPrices = [];
                $n1 = 0;
                foreach ($map['NightlyPrices'] as $item1) {
                    $model->nightlyPrices[$n1] = nightlyPrices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalAmount'])) {
            $model->totalAmount = $map['TotalAmount'];
        }

        if (isset($map['TracerId'])) {
            $model->tracerId = $map['TracerId'];
        }

        return $model;
    }
}
