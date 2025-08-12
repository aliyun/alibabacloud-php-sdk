<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleResponseBody\allProductInitMetricRuleList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleResponseBody\allProductInitMetricRuleList\allProductInitMetricRule\alertInitConfigList;

class allProductInitMetricRule extends Model
{
    /**
     * @var alertInitConfigList
     */
    public $alertInitConfigList;

    /**
     * @var string
     */
    public $product;
    protected $_name = [
        'alertInitConfigList' => 'AlertInitConfigList',
        'product' => 'Product',
    ];

    public function validate()
    {
        if (null !== $this->alertInitConfigList) {
            $this->alertInitConfigList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertInitConfigList) {
            $res['AlertInitConfigList'] = null !== $this->alertInitConfigList ? $this->alertInitConfigList->toArray($noStream) : $this->alertInitConfigList;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
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
        if (isset($map['AlertInitConfigList'])) {
            $model->alertInitConfigList = alertInitConfigList::fromMap($map['AlertInitConfigList']);
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        return $model;
    }
}
