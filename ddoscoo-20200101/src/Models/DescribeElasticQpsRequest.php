<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeElasticQpsRequest extends Model
{
    /**
     * @description The end of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * This parameter is required.
     * @example 1684339200
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The sampling interval. Unit: seconds. The value must be a multiple of 60. Default value: 60. Unit: seconds. The query result varies depending on the sampling interval.
     *
     * @example 60
     *
     * @var string
     */
    public $interval;

    /**
     * @description The IP address of the Anti-DDoS Proxy instance to query.
     *
     * @example 203.107.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The type of the service. Valid values:
     *
     *   **cn**: Anti-DDoS Proxy (Chinese Mainland)
     *   **cn-hongkong**: Anti-DDoS Proxy (Outside Chinese Mainland)
     *
     * This parameter is required.
     * @example cn
     *
     * @var string
     */
    public $region;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * This parameter is required.
     * @example 1684252800
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'   => 'EndTime',
        'interval'  => 'Interval',
        'ip'        => 'Ip',
        'region'    => 'Region',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeElasticQpsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
