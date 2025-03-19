<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceSubscriptionEstimateCostResponseBody;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceSubscriptionEstimateCostResponseBody\resourcePrices\detailInfos;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceSubscriptionEstimateCostResponseBody\resourcePrices\rules;
use AlibabaCloud\Tea\Model;

class resourcePrices extends Model
{
    /**
     * @description Currency. Valid values:
     * - CNY: Chinese Yuan.
     * - USD: US Dollar.
     * - JPY: Japanese Yen.
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The price details of the pricing module.
     *
     * @var detailInfos[]
     */
    public $detailInfos;

    /**
     * @description Discount.
     *
     * @example 100
     *
     * @var float
     */
    public $discountAmount;

    /**
     * @description Original price.
     *
     * @example 900
     *
     * @var float
     */
    public $originalAmount;

    /**
     * @description Renewal duration. The unit is specified by PeriodUnit.
     *
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The time unit for the renewal duration, which is the unit of the Period parameter. Valid values: Month, Year. Default value: Month.
     *
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description Resource ARN (Aliyun Resource Name).
     *
     * @example acs:ecs:cn-hongkong:1488317743351199:instance/i-j6c6f3lbky38o8rpeqw2
     *
     * @var string
     */
    public $resourceArn;

    /**
     * @description Promotion details.
     *
     * @var rules[]
     */
    public $rules;

    /**
     * @description Discounted price.
     *
     * @example 500
     *
     * @var float
     */
    public $tradeAmount;
    protected $_name = [
        'currency' => 'Currency',
        'detailInfos' => 'DetailInfos',
        'discountAmount' => 'DiscountAmount',
        'originalAmount' => 'OriginalAmount',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'resourceArn' => 'ResourceArn',
        'rules' => 'Rules',
        'tradeAmount' => 'TradeAmount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->detailInfos) {
            $res['DetailInfos'] = [];
            if (null !== $this->detailInfos && \is_array($this->detailInfos)) {
                $n = 0;
                foreach ($this->detailInfos as $item) {
                    $res['DetailInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->discountAmount) {
            $res['DiscountAmount'] = $this->discountAmount;
        }
        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->resourceArn) {
            $res['ResourceArn'] = $this->resourceArn;
        }
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tradeAmount) {
            $res['TradeAmount'] = $this->tradeAmount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcePrices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['DetailInfos'])) {
            if (!empty($map['DetailInfos'])) {
                $model->detailInfos = [];
                $n = 0;
                foreach ($map['DetailInfos'] as $item) {
                    $model->detailInfos[$n++] = null !== $item ? detailInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DiscountAmount'])) {
            $model->discountAmount = $map['DiscountAmount'];
        }
        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['ResourceArn'])) {
            $model->resourceArn = $map['ResourceArn'];
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TradeAmount'])) {
            $model->tradeAmount = $map['TradeAmount'];
        }

        return $model;
    }
}
