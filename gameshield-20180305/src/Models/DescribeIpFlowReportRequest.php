<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\Tea\Model;

class DescribeIpFlowReportRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $FPort;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $protocolEx;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'sourceIp'   => 'SourceIp',
        'ip'         => 'Ip',
        'endTime'    => 'EndTime',
        'FPort'      => 'FPort',
        'interval'   => 'Interval',
        'protocolEx' => 'ProtocolEx',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->FPort) {
            $res['FPort'] = $this->FPort;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->protocolEx) {
            $res['ProtocolEx'] = $this->protocolEx;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpFlowReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['FPort'])) {
            $model->FPort = $map['FPort'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['ProtocolEx'])) {
            $model->protocolEx = $map['ProtocolEx'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
