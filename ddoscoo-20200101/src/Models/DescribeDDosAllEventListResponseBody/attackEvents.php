<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosAllEventListResponseBody;

use AlibabaCloud\Tea\Model;

class attackEvents extends Model
{
    /**
     * @description The source location or region from which the attack was initiated. Valid values:
     *
     *   **cn**: Chinese mainland
     *   **alb-cn-hongkong-gf-2**: China (Hongkong)
     *   **alb-us-west-1-gf-2**: US (Silicon Valley)
     *   **alb-ap-northeast-1-gf-1**: Japan (Tokyo)
     *   **alb-ap-southeast-gf-1**: Singapore
     *   **alb-eu-central-1-gf-1**: Germany (Frankfurt)
     *   **alb-eu-central-1-gf-1** or **selb-eu-west-1-gf-1a**: UK (London)
     *   **alb-us-east-gf-1**: US (Virginia)
     *   **CT-yundi**: China (Hongkong) This value is returned only for Anti-DDoS Premium instances of the Secure Chinese Mainland Acceleration (Sec-CMA) mitigation plan.
     *
     * @example cn
     *
     * @var string
     */
    public $area;

    /**
     * @description The time when the DDoS attack stopped. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1634546030
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The type of the DDoS attack event. Valid values:
     *
     *   **web-cc**: resource exhaustion attacks
     *   **cc**: connection flood attacks
     *   **defense**: DDoS attacks that trigger traffic scrubbing
     *   **blackhole**: DDoS attacks that trigger blackhole filtering
     *
     * @example cc
     *
     * @var string
     */
    public $eventType;

    /**
     * @description The attacked object. The attacked object varies based on the attack event type. The following list describes different attacked objects of different attack event types:
     *
     *   If **EventType** is set to **web-cc**, the value of this parameter indicates the domain name of the attacked website.
     *   If **EventType** is set to **cc**, the value of this parameter indicates the IP address of the attacked Anti-DDoS Pro or Anti-DDoS Premium instance.
     *   If **EventType** is set to **defense** or **blackhole**, the value of this parameter indicates the IP address of the attacked Anti-DDoS Pro or Anti-DDoS Premium instance.
     *
     * @example 203.107.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The peak bandwidth of the attack traffic. Unit: Mbit/s.
     *
     * @example 101899
     *
     * @var int
     */
    public $mbps;

    /**
     * @description The attacked port.
     *
     * > If **EventType** is set to **web-cc**, this parameter is not returned.
     * @example 80
     *
     * @var string
     */
    public $port;

    /**
     * @description The peak packet forwarding rate of attack traffic. Unit: packets per second (pps).
     *
     * @example 9664270
     *
     * @var int
     */
    public $pps;

    /**
     * @description The time when the DDoS attack started. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1634543764
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'area'      => 'Area',
        'endTime'   => 'EndTime',
        'eventType' => 'EventType',
        'ip'        => 'Ip',
        'mbps'      => 'Mbps',
        'port'      => 'Port',
        'pps'       => 'Pps',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
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
        if (null !== $this->mbps) {
            $res['Mbps'] = $this->mbps;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->pps) {
            $res['Pps'] = $this->pps;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attackEvents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
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
        if (isset($map['Mbps'])) {
            $model->mbps = $map['Mbps'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Pps'])) {
            $model->pps = $map['Pps'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
