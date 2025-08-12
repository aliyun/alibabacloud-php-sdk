<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleResponseBody\allProductInitMetricRuleList\allProductInitMetricRule;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleResponseBody\allProductInitMetricRuleList\allProductInitMetricRule\alertInitConfigList\alertInitConfig;

class alertInitConfigList extends Model
{
    /**
     * @var alertInitConfig[]
     */
    public $alertInitConfig;
    protected $_name = [
        'alertInitConfig' => 'AlertInitConfig',
    ];

    public function validate()
    {
        if (\is_array($this->alertInitConfig)) {
            Model::validateArray($this->alertInitConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertInitConfig) {
            if (\is_array($this->alertInitConfig)) {
                $res['AlertInitConfig'] = [];
                $n1 = 0;
                foreach ($this->alertInitConfig as $item1) {
                    $res['AlertInitConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AlertInitConfig'])) {
            if (!empty($map['AlertInitConfig'])) {
                $model->alertInitConfig = [];
                $n1 = 0;
                foreach ($map['AlertInitConfig'] as $item1) {
                    $model->alertInitConfig[$n1] = alertInitConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
