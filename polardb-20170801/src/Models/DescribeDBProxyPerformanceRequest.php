<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBProxyPerformanceRequest extends Model
{
    /**
     * @description The ID of cluster.
     *
     * @example pc-****************
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The ID of the endpoint.
     *
     * @example pe-****************
     *
     * @var string
     */
    public $DBEndpointId;

    /**
     * @description The end of the time range to query. Specify the time in the `yyyy-MM-ddTHH:mmZ` format. The time must be in UTC.
     *
     * @example 2020-09-24T02:08Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The performance metrics that you want to query. Separate multiple indicators with commas (,). For more information, see [Performance parameters](~~141787~~).
     *
     * @example PolarProxy_CpuUsage
     *
     * @var string
     */
    public $key;

    /**
     * @description The beginning of the time range to query. Specify the time in the `yyyy-MM-ddTHH:mmZ` format. The time must be in UTC.
     *
     * @example 2020-09-23T01:01Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBClusterId'  => 'DBClusterId',
        'DBEndpointId' => 'DBEndpointId',
        'endTime'      => 'EndTime',
        'key'          => 'Key',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->DBEndpointId) {
            $res['DBEndpointId'] = $this->DBEndpointId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBProxyPerformanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DBEndpointId'])) {
            $model->DBEndpointId = $map['DBEndpointId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
