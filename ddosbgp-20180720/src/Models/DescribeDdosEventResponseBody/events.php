<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeDdosEventResponseBody;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $mbps;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var int
     */
    public $pps;
    protected $_name = [
        'endTime'   => 'EndTime',
        'status'    => 'Status',
        'startTime' => 'StartTime',
        'mbps'      => 'Mbps',
        'ip'        => 'Ip',
        'pps'       => 'Pps',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->mbps) {
            $res['Mbps'] = $this->mbps;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->pps) {
            $res['Pps'] = $this->pps;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Mbps'])) {
            $model->mbps = $map['Mbps'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Pps'])) {
            $model->pps = $map['Pps'];
        }

        return $model;
    }
}
