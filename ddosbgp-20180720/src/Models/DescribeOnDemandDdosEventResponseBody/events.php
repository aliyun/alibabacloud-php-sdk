<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeOnDemandDdosEventResponseBody;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @description The packet forwarding rate of the DDoS attack. Unit: packets per second (PPS).
     *
     * @example 1557891306
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 192.XX.XX.1
     *
     * @var string
     */
    public $ip;

    /**
     * @example 110000
     *
     * @var int
     */
    public $mbps;

    /**
     * @example 0
     *
     * @var int
     */
    public $pps;

    /**
     * @example 1557889506
     *
     * @var int
     */
    public $startTime;

    /**
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
