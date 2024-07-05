<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDestinationPortEventRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example defense
     *
     * @var string
     */
    public $eventType;

    /**
     * @description This parameter is required.
     *
     * @example 203.107.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description This parameter is required.
     *
     * @example 2
     *
     * @var int
     */
    public $range;

    /**
     * @description This parameter is required.
     *
     * @example cn
     *
     * @var string
     */
    public $region;

    /**
     * @description This parameter is required.
     *
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
