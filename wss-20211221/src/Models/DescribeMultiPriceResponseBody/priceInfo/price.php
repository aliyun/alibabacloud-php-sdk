<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeMultiPriceResponseBody\priceInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeMultiPriceResponseBody\priceInfo\price\priceDetails;
use AlibabaCloud\SDK\Wss\V20211221\Models\DescribeMultiPriceResponseBody\priceInfo\price\promotions;

class price extends Model
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
     * @var float
     */
    public $originalPrice;

    /**
     * @var priceDetails[]
     */
    public $priceDetails;

    /**
     * @var promotions[]
     */
    public $promotions;

    /**
     * @var float[]
     */
    public $refundInstanceIdPriceMap;

    /**
     * @var float
     */
    public $refundPrice;

    /**
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'currency' => 'Currency',
        'discountPrice' => 'DiscountPrice',
        'originalPrice' => 'OriginalPrice',
        'priceDetails' => 'PriceDetails',
        'promotions' => 'Promotions',
        'refundInstanceIdPriceMap' => 'RefundInstanceIdPriceMap',
        'refundPrice' => 'RefundPrice',
        'tradePrice' => 'TradePrice',
    ];

    public function validate()
    {
        if (\is_array($this->priceDetails)) {
            Model::validateArray($this->priceDetails);
        }
        if (\is_array($this->promotions)) {
            Model::validateArray($this->promotions);
        }
        if (\is_array($this->refundInstanceIdPriceMap)) {
            Model::validateArray($this->refundInstanceIdPriceMap);
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

        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }

        if (null !== $this->priceDetails) {
            if (\is_array($this->priceDetails)) {
                $res['PriceDetails'] = [];
                $n1 = 0;
                foreach ($this->priceDetails as $item1) {
                    $res['PriceDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->promotions) {
            if (\is_array($this->promotions)) {
                $res['Promotions'] = [];
                $n1 = 0;
                foreach ($this->promotions as $item1) {
                    $res['Promotions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->refundInstanceIdPriceMap) {
            if (\is_array($this->refundInstanceIdPriceMap)) {
                $res['RefundInstanceIdPriceMap'] = [];
                foreach ($this->refundInstanceIdPriceMap as $key1 => $value1) {
                    $res['RefundInstanceIdPriceMap'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->refundPrice) {
            $res['RefundPrice'] = $this->refundPrice;
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
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }

        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }

        if (isset($map['PriceDetails'])) {
            if (!empty($map['PriceDetails'])) {
                $model->priceDetails = [];
                $n1 = 0;
                foreach ($map['PriceDetails'] as $item1) {
                    $model->priceDetails[$n1] = priceDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Promotions'])) {
            if (!empty($map['Promotions'])) {
                $model->promotions = [];
                $n1 = 0;
                foreach ($map['Promotions'] as $item1) {
                    $model->promotions[$n1] = promotions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RefundInstanceIdPriceMap'])) {
            if (!empty($map['RefundInstanceIdPriceMap'])) {
                $model->refundInstanceIdPriceMap = [];
                foreach ($map['RefundInstanceIdPriceMap'] as $key1 => $value1) {
                    $model->refundInstanceIdPriceMap[$key1] = $value1;
                }
            }
        }

        if (isset($map['RefundPrice'])) {
            $model->refundPrice = $map['RefundPrice'];
        }

        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
