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
    public $chargeAmount;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var float
     */
    public $discountPrice;

    /**
     * @var int
     */
    public $originalAmount;

    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var servicePack
     */
    public $servicePack;

    /**
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'chargeAmount'   => 'ChargeAmount',
        'currency'       => 'Currency',
        'discountPrice'  => 'DiscountPrice',
        'originalAmount' => 'OriginalAmount',
        'originalPrice'  => 'OriginalPrice',
        'regionId'       => 'RegionId',
        'requestId'      => 'RequestId',
        'servicePack'    => 'ServicePack',
        'tradePrice'     => 'TradePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeAmount) {
            $res['ChargeAmount'] = $this->chargeAmount;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->servicePack) {
            $res['ServicePack'] = null !== $this->servicePack ? $this->servicePack->toMap() : null;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
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
        if (isset($map['ChargeAmount'])) {
            $model->chargeAmount = $map['ChargeAmount'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServicePack'])) {
            $model->servicePack = servicePack::fromMap($map['ServicePack']);
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
