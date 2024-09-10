<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeHybridMonitorDataListRequest extends Model
{
    /**
     * @description The end of the time range to query.
     *
     * This parameter is required.
     * @example 1653805225
     *
     * @var int
     */
    public $end;

    /**
     * @description The name of the namespace.
     *
     * This parameter is required.
     * @example default-aliyun
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The statistical period of the monitoring data.
     *
     * Unit: seconds.
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @description The metric name.
     *
     * This parameter is required.
     * @example AliyunEcs_cpu_total
     *
     * @var string
     */
    public $promSQL;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The start of the time range to query.
     *
     * This parameter is required.
     * @example 1653804865
     *
     * @var int
     */
    public $start;
    protected $_name = [
        'end'       => 'End',
        'namespace' => 'Namespace',
        'period'    => 'Period',
        'promSQL'   => 'PromSQL',
        'regionId'  => 'RegionId',
        'start'     => 'Start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->promSQL) {
            $res['PromSQL'] = $this->promSQL;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHybridMonitorDataListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PromSQL'])) {
            $model->promSQL = $map['PromSQL'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
