<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIABTest\V20240119\Models;

use AlibabaCloud\Tea\Model;

class ListMetricsRequest extends Model
{
    /**
     * @var string
     */
    public $all;

    /**
     * @var string
     */
    public $metricGroupId;

    /**
     * @var string
     */
    public $metricId;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $sortBy;
    protected $_name = [
        'all'           => 'All',
        'metricGroupId' => 'MetricGroupId',
        'metricId'      => 'MetricId',
        'metricName'    => 'MetricName',
        'order'         => 'Order',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'sortBy'        => 'SortBy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['All'] = $this->all;
        }
        if (null !== $this->metricGroupId) {
            $res['MetricGroupId'] = $this->metricGroupId;
        }
        if (null !== $this->metricId) {
            $res['MetricId'] = $this->metricId;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMetricsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['All'])) {
            $model->all = $map['All'];
        }
        if (isset($map['MetricGroupId'])) {
            $model->metricGroupId = $map['MetricGroupId'];
        }
        if (isset($map['MetricId'])) {
            $model->metricId = $map['MetricId'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        return $model;
    }
}
