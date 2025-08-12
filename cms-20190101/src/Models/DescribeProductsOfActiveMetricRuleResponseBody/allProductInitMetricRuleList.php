<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleResponseBody\allProductInitMetricRuleList\allProductInitMetricRule;

class allProductInitMetricRuleList extends Model
{
    /**
     * @var allProductInitMetricRule[]
     */
    public $allProductInitMetricRule;
    protected $_name = [
        'allProductInitMetricRule' => 'AllProductInitMetricRule',
    ];

    public function validate()
    {
        if (\is_array($this->allProductInitMetricRule)) {
            Model::validateArray($this->allProductInitMetricRule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allProductInitMetricRule) {
            if (\is_array($this->allProductInitMetricRule)) {
                $res['AllProductInitMetricRule'] = [];
                $n1 = 0;
                foreach ($this->allProductInitMetricRule as $item1) {
                    $res['AllProductInitMetricRule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AllProductInitMetricRule'])) {
            if (!empty($map['AllProductInitMetricRule'])) {
                $model->allProductInitMetricRule = [];
                $n1 = 0;
                foreach ($map['AllProductInitMetricRule'] as $item1) {
                    $model->allProductInitMetricRule[$n1] = allProductInitMetricRule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
