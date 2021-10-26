<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class GetCloudMetricLogsRequest extends Model
{
    /**
     * @var int
     */
    public $aggregationInterval;

    /**
     * @var string
     */
    public $aggregationType;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $filter;

    /**
     * @var int
     */
    public $from;

    /**
     * @var string
     */
    public $metricCategories;

    /**
     * @var string
     */
    public $metricScope;

    /**
     * @var bool
     */
    public $reverse;

    /**
     * @var int
     */
    public $to;
    protected $_name = [
        'aggregationInterval' => 'AggregationInterval',
        'aggregationType'     => 'AggregationType',
        'clusterId'           => 'ClusterId',
        'filter'              => 'Filter',
        'from'                => 'From',
        'metricCategories'    => 'MetricCategories',
        'metricScope'         => 'MetricScope',
        'reverse'             => 'Reverse',
        'to'                  => 'To',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregationInterval) {
            $res['AggregationInterval'] = $this->aggregationInterval;
        }
        if (null !== $this->aggregationType) {
            $res['AggregationType'] = $this->aggregationType;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->metricCategories) {
            $res['MetricCategories'] = $this->metricCategories;
        }
        if (null !== $this->metricScope) {
            $res['MetricScope'] = $this->metricScope;
        }
        if (null !== $this->reverse) {
            $res['Reverse'] = $this->reverse;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
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
        if (isset($map['AggregationInterval'])) {
            $model->aggregationInterval = $map['AggregationInterval'];
        }
        if (isset($map['AggregationType'])) {
            $model->aggregationType = $map['AggregationType'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['MetricCategories'])) {
            $model->metricCategories = $map['MetricCategories'];
        }
        if (isset($map['MetricScope'])) {
            $model->metricScope = $map['MetricScope'];
        }
        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
