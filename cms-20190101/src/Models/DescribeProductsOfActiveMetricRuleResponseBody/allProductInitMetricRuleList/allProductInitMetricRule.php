<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleResponseBody\allProductInitMetricRuleList;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleResponseBody\allProductInitMetricRuleList\allProductInitMetricRule\alertInitConfigList;
use AlibabaCloud\Tea\Model;

class allProductInitMetricRule extends Model
{
    /**
     * @description The initial alert rules that are generated after one-click alert is enabled for a service.
     *
     * @var alertInitConfigList
     */
    public $alertInitConfigList;

    /**
     * @example ecs
     *
     * @var string
     */
    public $product;
    protected $_name = [
        'alertInitConfigList' => 'AlertInitConfigList',
        'product'             => 'Product',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertInitConfigList) {
            $res['AlertInitConfigList'] = null !== $this->alertInitConfigList ? $this->alertInitConfigList->toMap() : null;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
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
        if (isset($map['AlertInitConfigList'])) {
            $model->alertInitConfigList = alertInitConfigList::fromMap($map['AlertInitConfigList']);
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        return $model;
    }
}
