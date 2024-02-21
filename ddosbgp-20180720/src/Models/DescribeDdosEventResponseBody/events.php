<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeDdosEventResponseBody;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @description The time when the DDoS attack stopped. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1637554335
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The attacked IP address.
     *
     * @example 47.89.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The volume of the request traffic at the start of the DDoS attack. Unit: Mbit/s.
     *
     * @example 0
     *
     * @var int
     */
    public $mbps;

    /**
     * @description The number of packets at the start of the DDoS attack. Unit: packets per second (PPS).
     *
     * @example 456
     *
     * @var int
     */
    public $pps;

    /**
     * @description The time when the DDoS attack started. This value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1637554034
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The status of the DDoS attack event. Valid values:
     *
     *   **hole_begin**: indicates that blackhole filtering is triggered for the attacked IP address.
     *   **hole_end**: indicates that blackhole filtering is deactivated for the attacked IP address.
     *   **defense_begin**: indicates that attack traffic is being scrubbed.
     *   **defense_end**: indicates that attack traffic is scrubbed.
     *
     * @example defense_end
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'endTime'   => 'EndTime',
        'ip'        => 'Ip',
        'mbps'      => 'Mbps',
        'pps'       => 'Pps',
        'startTime' => 'StartTime',
        'status'    => 'Status',
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
        if (null !== $this->mbps) {
            $res['Mbps'] = $this->mbps;
        }
        if (null !== $this->pps) {
            $res['Pps'] = $this->pps;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return events
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
        if (isset($map['Mbps'])) {
            $model->mbps = $map['Mbps'];
        }
        if (isset($map['Pps'])) {
            $model->pps = $map['Pps'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
