<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeElasticQpsRecordRequest extends Model
{
    /**
     * @description The end of the time range to query. The value is a timestamp. Unit: milliseconds.
     *
     * This parameter is required.
     * @example 1688140799999
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The IP address of the Anti-DDoS Proxy instance to query.
     *
     * This parameter is required.
     * @example 203.107.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The beginning of the time range to query. The value is a timestamp. Unit: milliseconds.
     *
     * This parameter is required.
     * @example 1684252800000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'   => 'EndTime',
        'ip'        => 'Ip',
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
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeElasticQpsRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
