<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDestinationPortEventRequest extends Model
{
    /**
     * @description The type of the attack event that you want to query. Valid values:
     *
     *   **defense**: attack events that trigger traffic scrubbing.
     *   **blackhole**: attack events that trigger blackhole filtering.
     *
     * This parameter is required.
     * @example defense
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The IP address of the attacker.
     *
     * This parameter is required.
     * @example 203.107.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The number of destination ports to return. The ports are sorted in descending order of the number of received request packets. By default, the first **10** ports are returned.
     *
     * This parameter is required.
     * @example 2
     *
     * @var int
     */
    public $range;

    /**
     * @description The region in which your service is deployed. Valid values:
     *
     *   **cn**: a region in the Chinese mainland.
     *   **cn-hongkong**: a region outside the Chinese mainland.
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
     * @example 1720059000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'eventType' => 'EventType',
        'ip'        => 'Ip',
        'range'     => 'Range',
        'region'    => 'Region',
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
     * @return DescribeDestinationPortEventRequest
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
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
