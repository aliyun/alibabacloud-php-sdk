<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeConfigurationPriceResponseBody\data\requestPrice;

use AlibabaCloud\Dara\Model;

class order extends Model
{
    /**
     * @var float
     */
    public $discountAmount;

    /**
     * @var float
     */
    public $originalAmount;

    /**
     * @var string[]
     */
    public $ruleIds;

    /**
     * @var float
     */
    public $tradeAmount;
    protected $_name = [
        'discountAmount' => 'DiscountAmount',
        'originalAmount' => 'OriginalAmount',
        'ruleIds' => 'RuleIds',
        'tradeAmount' => 'TradeAmount',
    ];

    public function validate()
    {
        if (\is_array($this->ruleIds)) {
            Model::validateArray($this->ruleIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->discountAmount) {
            $res['DiscountAmount'] = $this->discountAmount;
        }

        if (null !== $this->originalAmount) {
            $res['OriginalAmount'] = $this->originalAmount;
        }

        if (null !== $this->ruleIds) {
            if (\is_array($this->ruleIds)) {
                $res['RuleIds'] = [];
                $n1 = 0;
                foreach ($this->ruleIds as $item1) {
                    $res['RuleIds'][$n1++] = $item1;
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
        if (isset($map['DiscountAmount'])) {
            $model->discountAmount = $map['DiscountAmount'];
        }

        if (isset($map['OriginalAmount'])) {
            $model->originalAmount = $map['OriginalAmount'];
        }

        if (isset($map['RuleIds'])) {
            if (!empty($map['RuleIds'])) {
                $model->ruleIds = [];
                $n1 = 0;
                foreach ($map['RuleIds'] as $item1) {
                    $model->ruleIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TradeAmount'])) {
            $model->tradeAmount = $map['TradeAmount'];
        }

        return $model;
    }
}
