<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateMetricRuleBlackListRequest;

use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @description The timestamp when the blacklist policy starts to take effect.
     *
     * Unit: milliseconds.
     * @example disk_utilization
     *
     * @var string
     */
    public $metricName;

    /**
     * @description The name of the blacklist policy.
     *
     * @example {"device":"C:"}
     *
     * @var string
     */
    public $resource;
    protected $_name = [
        'metricName' => 'MetricName',
        'resource'   => 'Resource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }

        return $model;
    }
}
