<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetPriceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetPriceResponseBody\price\moduleDetails;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetPriceResponseBody\price\promotionDetails;

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
     * @var moduleDetails[]
     */
    public $moduleDetails;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var promotionDetails[]
     */
    public $promotionDetails;

    /**
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'currency' => 'currency',
        'discountPrice' => 'discountPrice',
        'moduleDetails' => 'moduleDetails',
        'originalPrice' => 'originalPrice',
        'promotionDetails' => 'promotionDetails',
        'tradePrice' => 'tradePrice',
    ];

    public function validate()
    {
        if (\is_array($this->moduleDetails)) {
            Model::validateArray($this->moduleDetails);
        }
        if (\is_array($this->promotionDetails)) {
            Model::validateArray($this->promotionDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currency) {
            $res['currency'] = $this->currency;
        }

        if (null !== $this->discountPrice) {
            $res['discountPrice'] = $this->discountPrice;
        }

        if (null !== $this->moduleDetails) {
            if (\is_array($this->moduleDetails)) {
                $res['moduleDetails'] = [];
                $n1 = 0;
                foreach ($this->moduleDetails as $item1) {
                    $res['moduleDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->originalPrice) {
            $res['originalPrice'] = $this->originalPrice;
        }

        if (null !== $this->promotionDetails) {
            if (\is_array($this->promotionDetails)) {
                $res['promotionDetails'] = [];
                $n1 = 0;
                foreach ($this->promotionDetails as $item1) {
                    $res['promotionDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tradePrice) {
            $res['tradePrice'] = $this->tradePrice;
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
        if (isset($map['currency'])) {
            $model->currency = $map['currency'];
        }

        if (isset($map['discountPrice'])) {
            $model->discountPrice = $map['discountPrice'];
        }

        if (isset($map['moduleDetails'])) {
            if (!empty($map['moduleDetails'])) {
                $model->moduleDetails = [];
                $n1 = 0;
                foreach ($map['moduleDetails'] as $item1) {
                    $model->moduleDetails[$n1] = moduleDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['originalPrice'])) {
            $model->originalPrice = $map['originalPrice'];
        }

        if (isset($map['promotionDetails'])) {
            if (!empty($map['promotionDetails'])) {
                $model->promotionDetails = [];
                $n1 = 0;
                foreach ($map['promotionDetails'] as $item1) {
                    $model->promotionDetails[$n1] = promotionDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['tradePrice'])) {
            $model->tradePrice = $map['tradePrice'];
        }

        return $model;
    }
}
