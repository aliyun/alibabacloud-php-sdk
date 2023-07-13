<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeHybridMonitorDataListRequest extends Model
{
    /**
     * @description The interval at which monitoring data is collected.
     *
     * Unit: seconds.
     * @example 1653805225
     *
     * @var int
     */
    public $end;

    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call is successful.
     * @example default-aliyun
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The error message.
     *
     * @example 60
     *
     * @var string
     */
    public $period;

    /**
     * @description The operation that you want to perform. Set the value to **DescribeHybridMonitorDataList**.
     *
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
     * @description The metric values that are collected at different timestamps.
     *
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
