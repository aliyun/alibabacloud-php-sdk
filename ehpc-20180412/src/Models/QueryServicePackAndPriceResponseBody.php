<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\QueryServicePackAndPriceResponseBody\servicePack;
use AlibabaCloud\Tea\Model;

class QueryServicePackAndPriceResponseBody extends Model
{
    /**
     * @var int
     */
    public $originalAmount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var float
     */
    public $discountPrice;

    /**
     * @var float
     */
    public $tradePrice;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var int
     */
    public $chargeAmount;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var servicePack
     */
    public $servicePack;
    protected $_name = [
        'originalAmount' => 'OriginalAmount',
        'requestId'      => 'RequestId',
        'discountPrice'  => 'DiscountPrice',
        'tradePrice'     => 'TradePrice',
        'originalPrice'  => 'OriginalPrice',
        'chargeAmount'   => 'ChargeAmount',
        'currency'       => 'Currency',
        'regionId'       => 'RegionId',
        'servicePack'    => 'ServicePack',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->chargeAmount) {
            $res['ChargeAmount'] = $this->chargeAmount;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->servicePack) {
            $res['ServicePack'] = null !== $this->servicePack ? $this->servicePack->toMap() : null;
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
        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['ChargeAmount'])) {
            $model->chargeAmount = $map['ChargeAmount'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServicePack'])) {
            $model->servicePack = servicePack::fromMap($map['ServicePack']);
        }

        return $model;
    }
}
