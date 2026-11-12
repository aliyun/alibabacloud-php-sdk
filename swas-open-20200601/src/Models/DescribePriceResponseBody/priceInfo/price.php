<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribePriceResponseBody\priceInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribePriceResponseBody\priceInfo\price\coupons;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribePriceResponseBody\priceInfo\price\detailInfos;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribePriceResponseBody\priceInfo\price\promotions;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribePriceResponseBody\priceInfo\price\subPrices;

class price extends Model
{
    /**
     * @var coupons[]
     */
    public $coupons;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var detailInfos[]
     */
    public $detailInfos;

    /**
     * @var float
     */
    public $discountPrice;

    /**
     * @var bool
     */
    public $isContractPromotion;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var promotions[]
     */
    public $promotions;

    /**
     * @var float
     */
    public $standardDiscountPrice;

    /**
     * @var float
     */
    public $standardPrice;

    /**
     * @var subPrices[]
     */
    public $subPrices;

    /**
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'coupons' => 'Coupons',
        'currency' => 'Currency',
        'detailInfos' => 'DetailInfos',
        'discountPrice' => 'DiscountPrice',
        'isContractPromotion' => 'IsContractPromotion',
        'originalPrice' => 'OriginalPrice',
        'promotions' => 'Promotions',
        'standardDiscountPrice' => 'StandardDiscountPrice',
        'standardPrice' => 'StandardPrice',
        'subPrices' => 'SubPrices',
        'tradePrice' => 'TradePrice',
    ];

    public function validate()
    {
        if (\is_array($this->coupons)) {
            Model::validateArray($this->coupons);
        }
        if (\is_array($this->detailInfos)) {
            Model::validateArray($this->detailInfos);
        }
        if (\is_array($this->promotions)) {
            Model::validateArray($this->promotions);
        }
        if (\is_array($this->subPrices)) {
            Model::validateArray($this->subPrices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coupons) {
            if (\is_array($this->coupons)) {
                $res['Coupons'] = [];
                $n1 = 0;
                foreach ($this->coupons as $item1) {
                    $res['Coupons'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        if (null !== $this->detailInfos) {
            if (\is_array($this->detailInfos)) {
                $res['DetailInfos'] = [];
                $n1 = 0;
                foreach ($this->detailInfos as $item1) {
                    $res['DetailInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }

        if (null !== $this->isContractPromotion) {
            $res['IsContractPromotion'] = $this->isContractPromotion;
        }

        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
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

        if (null !== $this->standardDiscountPrice) {
            $res['StandardDiscountPrice'] = $this->standardDiscountPrice;
        }

        if (null !== $this->standardPrice) {
            $res['StandardPrice'] = $this->standardPrice;
        }

        if (null !== $this->subPrices) {
            if (\is_array($this->subPrices)) {
                $res['SubPrices'] = [];
                $n1 = 0;
                foreach ($this->subPrices as $item1) {
                    $res['SubPrices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Coupons'])) {
            if (!empty($map['Coupons'])) {
                $model->coupons = [];
                $n1 = 0;
                foreach ($map['Coupons'] as $item1) {
                    $model->coupons[$n1] = coupons::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        if (isset($map['DetailInfos'])) {
            if (!empty($map['DetailInfos'])) {
                $model->detailInfos = [];
                $n1 = 0;
                foreach ($map['DetailInfos'] as $item1) {
                    $model->detailInfos[$n1] = detailInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }

        if (isset($map['IsContractPromotion'])) {
            $model->isContractPromotion = $map['IsContractPromotion'];
        }

        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
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

        if (isset($map['StandardDiscountPrice'])) {
            $model->standardDiscountPrice = $map['StandardDiscountPrice'];
        }

        if (isset($map['StandardPrice'])) {
            $model->standardPrice = $map['StandardPrice'];
        }

        if (isset($map['SubPrices'])) {
            if (!empty($map['SubPrices'])) {
                $model->subPrices = [];
                $n1 = 0;
                foreach ($map['SubPrices'] as $item1) {
                    $model->subPrices[$n1] = subPrices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
