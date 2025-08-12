<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutHybridMonitorMetricDataRequest\metricList;

class PutHybridMonitorMetricDataRequest extends Model
{
    /**
     * @var metricList[]
     */
    public $metricList;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'metricList' => 'MetricList',
        'namespace' => 'Namespace',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->metricList)) {
            Model::validateArray($this->metricList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->metricList) {
            if (\is_array($this->metricList)) {
                $res['MetricList'] = [];
                $n1 = 0;
                foreach ($this->metricList as $item1) {
                    $res['MetricList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['MetricList'])) {
            if (!empty($map['MetricList'])) {
                $model->metricList = [];
                $n1 = 0;
                foreach ($map['MetricList'] as $item1) {
                    $model->metricList[$n1] = metricList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
