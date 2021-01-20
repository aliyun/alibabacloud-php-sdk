<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleResponseBody\allProductInitMetricRuleList;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleResponseBody\allProductInitMetricRuleList\allProductInitMetricRule\alertInitConfigList;
use AlibabaCloud\Tea\Model;

class allProductInitMetricRule extends Model
{
    /**
     * @var string
     */
    public $product;

    /**
     * @var alertInitConfigList
     */
    public $alertInitConfigList;
    protected $_name = [
        'product'             => 'Product',
        'alertInitConfigList' => 'AlertInitConfigList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->alertInitConfigList) {
            $res['AlertInitConfigList'] = null !== $this->alertInitConfigList ? $this->alertInitConfigList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return allProductInitMetricRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['AlertInitConfigList'])) {
            $model->alertInitConfigList = alertInitConfigList::fromMap($map['AlertInitConfigList']);
        }

        return $model;
    }
}
