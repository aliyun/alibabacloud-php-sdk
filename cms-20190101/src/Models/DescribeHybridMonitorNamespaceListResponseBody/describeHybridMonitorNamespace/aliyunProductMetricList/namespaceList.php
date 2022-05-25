<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorNamespaceListResponseBody\describeHybridMonitorNamespace\aliyunProductMetricList;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorNamespaceListResponseBody\describeHybridMonitorNamespace\aliyunProductMetricList\namespaceList\metricList;
use AlibabaCloud\Tea\Model;

class namespaceList extends Model
{
    /**
     * @var metricList[]
     */
    public $metricList;

    /**
     * @var string
     */
    public $namespace;
    protected $_name = [
        'metricList' => 'MetricList',
        'namespace'  => 'Namespace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricList) {
            $res['MetricList'] = [];
            if (null !== $this->metricList && \is_array($this->metricList)) {
                $n = 0;
                foreach ($this->metricList as $item) {
                    $res['MetricList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return namespaceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricList'])) {
            if (!empty($map['MetricList'])) {
                $model->metricList = [];
                $n                 = 0;
                foreach ($map['MetricList'] as $item) {
                    $model->metricList[$n++] = null !== $item ? metricList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
