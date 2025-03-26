<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponseBody\priceInfo;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponseBody\rules;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceResponseBody\serverlessPrice;

class DescribePriceResponseBody extends Model
{
    /**
     * @var string
     */
    public $orderParams;

    /**
     * @var priceInfo
     */
    public $priceInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var rules
     */
    public $rules;

    /**
     * @var serverlessPrice
     */
    public $serverlessPrice;

    /**
     * @var bool
     */
    public $showDiscount;

    /**
     * @var float
     */
    public $tradeMaxRCUAmount;

    /**
     * @var float
     */
    public $tradeMinRCUAmount;
    protected $_name = [
        'orderParams' => 'OrderParams',
        'priceInfo' => 'PriceInfo',
        'requestId' => 'RequestId',
        'rules' => 'Rules',
        'serverlessPrice' => 'ServerlessPrice',
        'showDiscount' => 'ShowDiscount',
        'tradeMaxRCUAmount' => 'TradeMaxRCUAmount',
        'tradeMinRCUAmount' => 'TradeMinRCUAmount',
    ];

    public function validate()
    {
        if (null !== $this->priceInfo) {
            $this->priceInfo->validate();
        }
        if (null !== $this->rules) {
            $this->rules->validate();
        }
        if (null !== $this->serverlessPrice) {
            $this->serverlessPrice->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderParams) {
            $res['OrderParams'] = $this->orderParams;
        }

        if (null !== $this->priceInfo) {
            $res['PriceInfo'] = null !== $this->priceInfo ? $this->priceInfo->toArray($noStream) : $this->priceInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->rules) {
            $res['Rules'] = null !== $this->rules ? $this->rules->toArray($noStream) : $this->rules;
        }

        if (null !== $this->serverlessPrice) {
            $res['ServerlessPrice'] = null !== $this->serverlessPrice ? $this->serverlessPrice->toArray($noStream) : $this->serverlessPrice;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
