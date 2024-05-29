<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDDosEventSrcIpRequest extends Model
{
    /**
     * @description The type of the attack event that you want to query. Valid values:
     *
     *   **defense**: attack events that trigger traffic scrubbing
     *   **blackhole**: attack events that trigger blackhole filtering
     *
     * This parameter is required.
     * @example defense
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The IP address of the attacked Anti-DDoS Pro or Anti-DDoS Premium instance.
     *
     * This parameter is required.
     * @example 203.***.***.199
     *
     * @var string
     */
    public $ip;

    /**
     * @description The number of source IP addresses that you want to return. The source IP addresses are returned in descending order of attack traffic. By default, the top **five** source IP addresses are returned.
     *
     * This parameter is required.
     * @example 2
     *
     * @var int
     */
    public $range;

    /**
     * @description The UNIX timestamp when the query starts. Unit: seconds.
     *
     * This parameter is required.
     * @example 1598948471
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'eventType' => 'EventType',
        'ip'        => 'Ip',
        'range'     => 'Range',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->range) {
            $res['Range'] = $this->range;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDDosEventSrcIpRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Range'])) {
            $model->range = $map['Range'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
