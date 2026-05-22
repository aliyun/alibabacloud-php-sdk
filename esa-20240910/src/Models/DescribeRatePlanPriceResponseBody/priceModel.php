<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribeRatePlanPriceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeRatePlanPriceResponseBody\priceModel\ratePlan;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeRatePlanPriceResponseBody\priceModel\rule;

class priceModel extends Model
{
    /**
     * @var ratePlan
     */
    public $ratePlan;

    /**
     * @var rule
     */
    public $rule;
    protected $_name = [
        'ratePlan' => 'RatePlan',
        'rule' => 'Rule',
    ];

    public function validate()
    {
        if (null !== $this->ratePlan) {
            $this->ratePlan->validate();
        }
        if (null !== $this->rule) {
            $this->rule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ratePlan) {
            $res['RatePlan'] = null !== $this->ratePlan ? $this->ratePlan->toArray($noStream) : $this->ratePlan;
        }

        if (null !== $this->rule) {
            $res['Rule'] = null !== $this->rule ? $this->rule->toArray($noStream) : $this->rule;
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
        if (isset($map['RatePlan'])) {
            $model->ratePlan = ratePlan::fromMap($map['RatePlan']);
        }

        if (isset($map['Rule'])) {
            $model->rule = rule::fromMap($map['Rule']);
        }

        return $model;
    }
}
