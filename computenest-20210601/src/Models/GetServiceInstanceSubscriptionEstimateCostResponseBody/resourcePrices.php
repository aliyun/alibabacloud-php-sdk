<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceSubscriptionEstimateCostResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceSubscriptionEstimateCostResponseBody\resourcePrices\detailInfos;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceSubscriptionEstimateCostResponseBody\resourcePrices\rules;

class resourcePrices extends Model
{
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
    public $discountAmount;

    /**
     * @var float
     */
    public $originalAmount;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $resourceArn;

    /**
     * @var rules[]
     */
    public $rules;

    /**
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

    public function validate()
    {
        if (\is_array($this->detailInfos)) {
            Model::validateArray($this->detailInfos);
        }
        if (\is_array($this->rules)) {
            Model::validateArray($this->rules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
            if (\is_array($this->rules)) {
                $res['Rules'] = [];
                $n1 = 0;
                foreach ($this->rules as $item1) {
                    $res['Rules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tradeAmount) {
            $res['TradeAmount'] = $this->tradeAmount;
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
                $n1 = 0;
                foreach ($map['Rules'] as $item1) {
                    $model->rules[$n1] = rules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TradeAmount'])) {
            $model->tradeAmount = $map['TradeAmount'];
        }

        return $model;
    }
}
