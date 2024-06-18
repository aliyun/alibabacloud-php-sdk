<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponseBody\priceInfo;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponseBody\rules;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponseBody\serverlessPrice;
use AlibabaCloud\Tea\Model;

class DescribePriceResponseBody extends Model
{
    /**
     * @description The order parameters.
     *
     * >  If the **OrderParamOut** parameter is set to **true**, the value of the OrderParams parameter is returned.
     * @example {\\"autoPay\\":false}"
     *
     * @var string
     */
    public $orderParams;

    /**
     * @description The price information.
     *
     * @var priceInfo
     */
    public $priceInfo;

    /**
     * @description The ID of the request.
     *
     * @example CA0ADDDC-0BEB-4381-A3ED-73B4C79B8CC6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details of the promotion rule.
     *
     * @var rules
     */
    public $rules;

    /**
     * @description The pricing information about a serverless RDS instance.
     *
     * @var serverlessPrice
     */
    public $serverlessPrice;

    /**
     * @description Indicates whether discounts can be used.
     *
     * @example True
     *
     * @var bool
     */
    public $showDiscount;

    /**
     * @description The estimated hourly fee that is calculated based on the maximum number of RCUs.
     *
     * @example 2**
     *
     * @var float
     */
    public $tradeMaxRCUAmount;

    /**
     * @description The estimated hourly fee that is calculated based on the minimum number of RCUs.
     *
     * @example 1**
     *
     * @var float
     */
    public $tradeMinRCUAmount;
    protected $_name = [
        'orderParams'       => 'OrderParams',
        'priceInfo'         => 'PriceInfo',
        'requestId'         => 'RequestId',
        'rules'             => 'Rules',
        'serverlessPrice'   => 'ServerlessPrice',
        'showDiscount'      => 'ShowDiscount',
        'tradeMaxRCUAmount' => 'TradeMaxRCUAmount',
        'tradeMinRCUAmount' => 'TradeMinRCUAmount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderParams) {
            $res['OrderParams'] = $this->orderParams;
        }
        if (null !== $this->priceInfo) {
            $res['PriceInfo'] = null !== $this->priceInfo ? $this->priceInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toMap() : null;
        }
        if (null !== $this->serverlessPrice) {
            $res['ServerlessPrice'] = null !== $this->serverlessPrice ? $this->serverlessPrice->toMap() : null;
        }
        if (null !== $this->showDiscount) {
            $res['ShowDiscount'] = $this->showDiscount;
        }
        if (null !== $this->tradeMaxRCUAmount) {
            $res['TradeMaxRCUAmount'] = $this->tradeMaxRCUAmount;
        }
        if (null !== $this->tradeMinRCUAmount) {
            $res['TradeMinRCUAmount'] = $this->tradeMinRCUAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePriceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderParams'])) {
            $model->orderParams = $map['OrderParams'];
        }
        if (isset($map['PriceInfo'])) {
            $model->priceInfo = priceInfo::fromMap($map['PriceInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Rules'])) {
            $model->rules = rules::fromMap($map['Rules']);
        }
        if (isset($map['ServerlessPrice'])) {
            $model->serverlessPrice = serverlessPrice::fromMap($map['ServerlessPrice']);
        }
        if (isset($map['ShowDiscount'])) {
            $model->showDiscount = $map['ShowDiscount'];
        }
        if (isset($map['TradeMaxRCUAmount'])) {
            $model->tradeMaxRCUAmount = $map['TradeMaxRCUAmount'];
        }
        if (isset($map['TradeMinRCUAmount'])) {
            $model->tradeMinRCUAmount = $map['TradeMinRCUAmount'];
        }

        return $model;
    }
}
