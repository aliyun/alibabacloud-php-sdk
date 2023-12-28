<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetPriceResponseBody;

use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetPriceResponseBody\price\moduleDetails;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetPriceResponseBody\price\promotionDetails;
use AlibabaCloud\Tea\Model;

class price extends Model
{
    /**
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @example 0.0
     *
     * @var float
     */
    public $discountPrice;

    /**
     * @var moduleDetails[]
     */
    public $moduleDetails;

    /**
     * @example 760.0
     *
     * @var float
     */
    public $originalPrice;

    /**
     * @var promotionDetails[]
     */
    public $promotionDetails;

    /**
     * @example 0.0
     *
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'currency'         => 'currency',
        'discountPrice'    => 'discountPrice',
        'moduleDetails'    => 'moduleDetails',
        'originalPrice'    => 'originalPrice',
        'promotionDetails' => 'promotionDetails',
        'tradePrice'       => 'tradePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currency) {
            $res['currency'] = $this->currency;
        }
        if (null !== $this->discountPrice) {
            $res['discountPrice'] = $this->discountPrice;
        }
        if (null !== $this->moduleDetails) {
            $res['moduleDetails'] = [];
            if (null !== $this->moduleDetails && \is_array($this->moduleDetails)) {
                $n = 0;
                foreach ($this->moduleDetails as $item) {
                    $res['moduleDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->originalPrice) {
            $res['originalPrice'] = $this->originalPrice;
        }
        if (null !== $this->promotionDetails) {
            $res['promotionDetails'] = [];
            if (null !== $this->promotionDetails && \is_array($this->promotionDetails)) {
                $n = 0;
                foreach ($this->promotionDetails as $item) {
                    $res['promotionDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tradePrice) {
            $res['tradePrice'] = $this->tradePrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return price
     */
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
                $n                    = 0;
                foreach ($map['moduleDetails'] as $item) {
                    $model->moduleDetails[$n++] = null !== $item ? moduleDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['originalPrice'])) {
            $model->originalPrice = $map['originalPrice'];
        }
        if (isset($map['promotionDetails'])) {
            if (!empty($map['promotionDetails'])) {
                $model->promotionDetails = [];
                $n                       = 0;
                foreach ($map['promotionDetails'] as $item) {
                    $model->promotionDetails[$n++] = null !== $item ? promotionDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['tradePrice'])) {
            $model->tradePrice = $map['tradePrice'];
        }

        return $model;
    }
}
