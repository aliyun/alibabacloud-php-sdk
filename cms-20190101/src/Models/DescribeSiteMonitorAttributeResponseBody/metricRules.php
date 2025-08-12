<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\metricRules\metricRule;

class metricRules extends Model
{
    /**
     * @var metricRule[]
     */
    public $metricRule;
    protected $_name = [
        'metricRule' => 'MetricRule',
    ];

    public function validate()
    {
        if (\is_array($this->metricRule)) {
            Model::validateArray($this->metricRule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metricRule) {
            if (\is_array($this->metricRule)) {
                $res['MetricRule'] = [];
                $n1 = 0;
                foreach ($this->metricRule as $item1) {
                    $res['MetricRule'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MetricRule'])) {
            if (!empty($map['MetricRule'])) {
                $model->metricRule = [];
                $n1 = 0;
                foreach ($map['MetricRule'] as $item1) {
                    $model->metricRule[$n1] = metricRule::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
