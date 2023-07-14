<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\QueryMetricByPageRequest\filters;
use AlibabaCloud\Tea\Model;

class QueryMetricByPageRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: `1`.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Custom filter conditions.
     *
     * @var string[]
     */
    public $customFilters;

    /**
     * @description The dimensions of the metric that you want to query.
     *
     * @example ["detector_browser","detector_device"]
     *
     * @var string[]
     */
    public $dimensions;

    /**
     * @description The end of the time range to query. Unit: milliseconds.
     *
     * @example 1667546895000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The filter conditions.
     *
     * @var filters[]
     */
    public $filters;

    /**
     * @description The time interval at which data entries are aggregated. Unit: milliseconds. Minimum value: 60000.
     *
     * @example 100000
     *
     * @var int
     */
    public $intervalInSec;

    /**
     * @description The measures of the metric that you want to query.
     *
     * @example pv
     *
     * @var string[]
     */
    public $measures;

    /**
     * @description The metric that you want to query. You cannot specify a custom metric. For more information, see the "Application monitoring metrics that can be queried" section.
     *
     * @example appstat.host
     *
     * @var string
     */
    public $metric;

    /**
     * @description The order in which measures are sorted. Valid values:
     *
     *   `ASC`: ascending order
     *   `DESC`: descending order
     *
     * > If you do not specify the parameter, data is not sorted.
     * @example ASC
     *
     * @var string
     */
    public $order;

    /**
     * @description The dimension from which metrics are sorted. You can set this parameter to a supported dimension.
     *
     * @example pid
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The number of entries to return on each page. This parameter is no longer supported. The number of entries to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The start of the time range to query. Unit: milliseconds.
     *
     * @example 1667287695000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'currentPage'   => 'CurrentPage',
        'customFilters' => 'CustomFilters',
        'dimensions'    => 'Dimensions',
        'endTime'       => 'EndTime',
        'filters'       => 'Filters',
        'intervalInSec' => 'IntervalInSec',
        'measures'      => 'Measures',
        'metric'        => 'Metric',
        'order'         => 'Order',
        'orderBy'       => 'OrderBy',
        'pageSize'      => 'PageSize',
        'startTime'     => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->customFilters) {
            $res['CustomFilters'] = $this->customFilters;
        }
        if (null !== $this->dimensions) {
            $res['Dimensions'] = $this->dimensions;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->filters) {
            $res['Filters'] = [];
            if (null !== $this->filters && \is_array($this->filters)) {
                $n = 0;
                foreach ($this->filters as $item) {
                    $res['Filters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->intervalInSec) {
            $res['IntervalInSec'] = $this->intervalInSec;
        }
        if (null !== $this->measures) {
            $res['Measures'] = $this->measures;
        }
        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMetricByPageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['CustomFilters'])) {
            if (!empty($map['CustomFilters'])) {
                $model->customFilters = $map['CustomFilters'];
            }
        }
        if (isset($map['Dimensions'])) {
            if (!empty($map['Dimensions'])) {
                $model->dimensions = $map['Dimensions'];
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n              = 0;
                foreach ($map['Filters'] as $item) {
                    $model->filters[$n++] = null !== $item ? filters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IntervalInSec'])) {
            $model->intervalInSec = $map['IntervalInSec'];
        }
        if (isset($map['Measures'])) {
            if (!empty($map['Measures'])) {
                $model->measures = $map['Measures'];
            }
        }
        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
