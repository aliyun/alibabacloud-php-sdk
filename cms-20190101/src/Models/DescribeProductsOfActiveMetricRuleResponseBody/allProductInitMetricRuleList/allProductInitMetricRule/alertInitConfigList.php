<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleResponseBody\allProductInitMetricRuleList\allProductInitMetricRule;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductsOfActiveMetricRuleResponseBody\allProductInitMetricRuleList\allProductInitMetricRule\alertInitConfigList\alertInitConfig;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertInitConfig) {
            $res['AlertInitConfig'] = [];
            if (null !== $this->alertInitConfig && \is_array($this->alertInitConfig)) {
                $n = 0;
                foreach ($this->alertInitConfig as $item) {
                    $res['AlertInitConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertInitConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertInitConfig'])) {
            if (!empty($map['AlertInitConfig'])) {
                $model->alertInitConfig = [];
                $n                      = 0;
                foreach ($map['AlertInitConfig'] as $item) {
                    $model->alertInitConfig[$n++] = null !== $item ? alertInitConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
