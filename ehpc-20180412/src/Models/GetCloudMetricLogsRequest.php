<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class GetCloudMetricLogsRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $from;

    /**
     * @var int
     */
    public $to;

    /**
     * @var bool
     */
    public $reverse;

    /**
     * @var string
     */
    public $aggregationType;

    /**
     * @var int
     */
    public $aggregationInterval;

    /**
     * @var string
     */
    public $metricScope;

    /**
     * @var string
     */
    public $filter;

    /**
     * @var string
     */
    public $metricCategories;
    protected $_name = [
        'clusterId'           => 'ClusterId',
        'from'                => 'From',
        'to'                  => 'To',
        'reverse'             => 'Reverse',
        'aggregationType'     => 'AggregationType',
        'aggregationInterval' => 'AggregationInterval',
        'metricScope'         => 'MetricScope',
        'filter'              => 'Filter',
        'metricCategories'    => 'MetricCategories',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }
        if (null !== $this->reverse) {
            $res['Reverse'] = $this->reverse;
        }
        if (null !== $this->aggregationType) {
            $res['AggregationType'] = $this->aggregationType;
        }
        if (null !== $this->aggregationInterval) {
            $res['AggregationInterval'] = $this->aggregationInterval;
        }
        if (null !== $this->metricScope) {
            $res['MetricScope'] = $this->metricScope;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->metricCategories) {
            $res['MetricCategories'] = $this->metricCategories;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCloudMetricLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }
        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }
        if (isset($map['AggregationType'])) {
            $model->aggregationType = $map['AggregationType'];
        }
        if (isset($map['AggregationInterval'])) {
            $model->aggregationInterval = $map['AggregationInterval'];
        }
        if (isset($map['MetricScope'])) {
            $model->metricScope = $map['MetricScope'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['MetricCategories'])) {
            $model->metricCategories = $map['MetricCategories'];
        }

        return $model;
    }
}
