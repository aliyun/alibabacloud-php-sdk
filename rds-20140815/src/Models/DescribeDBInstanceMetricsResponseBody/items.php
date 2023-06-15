<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceMetricsResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The description of the enhanced monitoring metric.
     *
     * @example OS CPU utilization, equal to the number of OS-consumed CPUs divided by the total number of CPUs
     *
     * @var string
     */
    public $description;

    /**
     * @description The category of the enhanced monitoring metric. Valid values:
     *
     *   **os**: OS metric
     *   **db**: database metric
     *
     * @example os
     *
     * @var string
     */
    public $dimension;

    /**
     * @description The key of the group to which the enhanced monitoring metric belongs.
     *
     * @example os.cpu_usage
     *
     * @var string
     */
    public $groupKey;

    /**
     * @description The name of the group to which the enhanced monitoring metric belongs.
     *
     * @example CPU Utilization Rate
     *
     * @var string
     */
    public $groupKeyType;

    /**
     * @description The method that is used to aggregate the monitoring data of the enhanced monitoring metric. Valid values:
     *
     *   **avg**: The system calculates the average value of the enhanced monitoring metric.
     *   **min**: The system calculates the minimum value of the enhanced monitoring metric.
     *   **max**: The system calculates the maximum value of the enhanced monitoring metric.
     *
     * @example avg
     *
     * @var string
     */
    public $method;

    /**
     * @description The key of the enhanced monitoring metric.
     *
     * @example os.cpu_usage.sys.avg
     *
     * @var string
     */
    public $metricsKey;

    /**
     * @description The alias of the enhanced monitoring metric.
     *
     * @example os.cpu_usage.sys
     *
     * @var string
     */
    public $metricsKeyAlias;

    /**
     * @description The serial number of the enhanced monitoring metric.
     *
     * @example 1
     *
     * @var int
     */
    public $sortRule;

    /**
     * @description The unit of the enhanced monitoring metric.
     *
     * @example %
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'description'     => 'Description',
        'dimension'       => 'Dimension',
        'groupKey'        => 'GroupKey',
        'groupKeyType'    => 'GroupKeyType',
        'method'          => 'Method',
        'metricsKey'      => 'MetricsKey',
        'metricsKeyAlias' => 'MetricsKeyAlias',
        'sortRule'        => 'SortRule',
        'unit'            => 'Unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }
        if (null !== $this->groupKey) {
            $res['GroupKey'] = $this->groupKey;
        }
        if (null !== $this->groupKeyType) {
            $res['GroupKeyType'] = $this->groupKeyType;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->metricsKey) {
            $res['MetricsKey'] = $this->metricsKey;
        }
        if (null !== $this->metricsKeyAlias) {
            $res['MetricsKeyAlias'] = $this->metricsKeyAlias;
        }
        if (null !== $this->sortRule) {
            $res['SortRule'] = $this->sortRule;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }
        if (isset($map['GroupKey'])) {
            $model->groupKey = $map['GroupKey'];
        }
        if (isset($map['GroupKeyType'])) {
            $model->groupKeyType = $map['GroupKeyType'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['MetricsKey'])) {
            $model->metricsKey = $map['MetricsKey'];
        }
        if (isset($map['MetricsKeyAlias'])) {
            $model->metricsKeyAlias = $map['MetricsKeyAlias'];
        }
        if (isset($map['SortRule'])) {
            $model->sortRule = $map['SortRule'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
