<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribeCacheReservePriceGapResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeCacheReservePriceGapResponseBody\priceModel\rule;

class priceModel extends Model
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var float
     */
    public $discountPrice;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var float
     */
    public $price;

    /**
     * @var rule
     */
    public $rule;

    /**
     * @var float
     */
    public $totalPrice;
    protected $_name = [
        'currency' => 'Currency',
        'discountPrice' => 'DiscountPrice',
        'instanceId' => 'InstanceId',
        'price' => 'Price',
        'rule' => 'Rule',
        'totalPrice' => 'TotalPrice',
    ];

    public function validate()
    {
        if (null !== $this->rule) {
            $this->rule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->price) {
            $res['Price'] = $this->price;
        }

        if (null !== $this->rule) {
            $res['Rule'] = null !== $this->rule ? $this->rule->toArray($noStream) : $this->rule;
        }

        if (null !== $this->totalPrice) {
            $res['TotalPrice'] = $this->totalPrice;
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

        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Price'])) {
            $model->price = $map['Price'];
        }

        if (isset($map['Rule'])) {
            $model->rule = rule::fromMap($map['Rule']);
        }

        if (isset($map['TotalPrice'])) {
            $model->totalPrice = $map['TotalPrice'];
        }

        return $model;
    }
}
