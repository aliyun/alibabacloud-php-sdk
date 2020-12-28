<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\QueryServicePackAndPriceResponseBody\servicePack;
use AlibabaCloud\Tea\Model;

class QueryServicePackAndPriceResponseBody extends Model
{
    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var float
     */
    public $discountPrice;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var servicePack[]
     */
    public $servicePack;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var float
     */
    public $tradePrice;

    /**
     * @var int
     */
    public $originalAmount;

    /**
     * @var int
     */
    public $chargeAmount;
    protected $_name = [
        'originalPrice'  => 'OriginalPrice',
        'requestId'      => 'RequestId',
        'discountPrice'  => 'DiscountPrice',
        'currency'       => 'Currency',
        'servicePack'    => 'ServicePack',
        'regionId'       => 'RegionId',
        'tradePrice'     => 'TradePrice',
        'originalAmount' => 'OriginalAmount',
        'chargeAmount'   => 'ChargeAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->servicePack) {
            $res['ServicePack'] = [];
            if (null !== $this->servicePack && \is_array($this->servicePack)) {
                $n = 0;
                foreach ($this->servicePack as $item) {
                    $res['ServicePack'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }
        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }
        if (null !== $this->chargeAmount) {
            $res['ChargeAmount'] = $this->chargeAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryServicePackAndPriceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['ServicePack'])) {
            if (!empty($map['ServicePack'])) {
                $model->servicePack = [];
                $n                  = 0;
                foreach ($map['ServicePack'] as $item) {
                    $model->servicePack[$n++] = null !== $item ? servicePack::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }
        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }
        if (isset($map['ChargeAmount'])) {
            $model->chargeAmount = $map['ChargeAmount'];
        }

        return $model;
    }
}
