<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDoSEventsResponseBody;

use AlibabaCloud\Tea\Model;

class DDoSEvents extends Model
{
    /**
     * @description The bandwidth of attack traffic. Unit: bit/s.
     *
     * @example 0
     *
     * @var int
     */
    public $bps;

    /**
     * @description The time when the DDoS attack stopped. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1583933330
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The type of the attack event. Valid values:
     *
     *   **defense**: traffic scrubbing events
     *   **blackhole**: blackhole filtering events
     *
     * @example blackhole
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The attacked IP address.
     *
     * @example 203.***.***.132
     *
     * @var string
     */
    public $ip;

    /**
     * @description The attacked port.
     *
     * @example 80
     *
     * @var string
     */
    public $port;

    /**
     * @description The packet forwarding rate of attack traffic. Unit: packets per second (pps).
     *
     * @example 0
     *
     * @var int
     */
    public $pps;

    /**
     * @description The region from which the attack was launched. Valid values:
     *
     *   **cn**: a region in the Chinese mainland
     *   **alb-ap-northeast-1-gf-x**: Japan (Tokyo)
     *   **alb-ap-southeast-gf-x**: Singapore
     *   **alb-cn-hongkong-gf-x**: Hong Kong (China)
     *   **alb-eu-central-1-gf-x**: Germany (Frankfurt)
     *   **alb-us-west-1-gf-x**: US (Silicon Valley)
     *
     * > The values except **cn** are returned only when **RegionId** is set to **ap-southeast-1**.
     * @example cn
     *
     * @var string
     */
    public $region;

    /**
     * @description The time when the DDoS attack started. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1583933277
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'bps'       => 'Bps',
        'endTime'   => 'EndTime',
        'eventType' => 'EventType',
        'ip'        => 'Ip',
        'port'      => 'Port',
        'pps'       => 'Pps',
        'region'    => 'Region',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->pps) {
            $res['Pps'] = $this->pps;
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
     * @return DDoSEvents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Pps'])) {
            $model->pps = $map['Pps'];
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
