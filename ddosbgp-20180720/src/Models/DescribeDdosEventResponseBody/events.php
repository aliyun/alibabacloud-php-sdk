<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeDdosEventResponseBody;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @description All Alibaba Cloud API operations must include common request parameters. For more information about common request parameters, see [Common parameters](~~118841~~).
     *
     * For more information about sample requests, see the **"Examples"** section of this topic.
     * @example 1637554335
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 47.89.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description WB269094
     *
     * @example 0
     *
     * @var int
     */
    public $mbps;

    /**
     * @example 456
     *
     * @var int
     */
    public $pps;

    /**
     * @description DescribeDdosEvent
     *
     * @example 1637554034
     *
     * @var int
     */
    public $startTime;

    /**
     * @description Queries the details about the DDoS attack events that occurred on a specific Anti-DDoS Origin instance.
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
