<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\DescribeRatePlanPriceResponseBody\priceModel;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeRatePlanPriceResponseBody\priceModel\ratePlan\planPriceList;

class ratePlan extends Model
{
    /**
     * @var planPriceList[]
     */
    public $planPriceList;
    protected $_name = [
        'planPriceList' => 'PlanPriceList',
    ];

    public function validate()
    {
        if (\is_array($this->planPriceList)) {
            Model::validateArray($this->planPriceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->planPriceList) {
            if (\is_array($this->planPriceList)) {
                $res['PlanPriceList'] = [];
                $n1 = 0;
                foreach ($this->planPriceList as $item1) {
                    $res['PlanPriceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['PlanPriceList'])) {
            if (!empty($map['PlanPriceList'])) {
                $model->planPriceList = [];
                $n1 = 0;
                foreach ($map['PlanPriceList'] as $item1) {
                    $model->planPriceList[$n1] = planPriceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
