<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInternetTrafficTrendResponseBody;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @description The inbound network throughput, which indicates the number of bits that are sent inbound per second. Unit: bit/s.
     *
     * @example 187
     *
     * @var int
     */
    public $inBps;

    /**
     * @description The inbound network throughput, which indicates the total number of bytes that are sent inbound. Unit: bytes.
     *
     * @example 235
     *
     * @var int
     */
    public $inBytes;

    /**
     * @description The inbound network throughput, which indicates the number of packets that are sent inbound per second. Unit: packets per second (pps).
     *
     * @example 2
     *
     * @var int
     */
    public $inPps;

    /**
     * @description The number of new connections.
     *
     * @example 27
     *
     * @var int
     */
    public $newConn;

    /**
     * @description The outbound network throughput, which indicates the number of bits that are sent inbound per second. Unit: bit/s.
     *
     * @example 45
     *
     * @var int
     */
    public $outBps;

    /**
     * @description The outbound network throughput, which indicates the total number of bytes that are sent outbound. Unit: bytes.
     *
     * @example 1123
     *
     * @var int
     */
    public $outBytes;

    /**
     * @description The outbound network throughput, which indicates the number of packets that are sent outbound per second. Unit: pps.
     *
     * @example 2
     *
     * @var int
     */
    public $outPps;

    /**
     * @description The number of requests.
     *
     * @example 27
     *
     * @var int
     */
    public $sessionCount;

    /**
     * @description The time when traffic is generated. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1659405600
     *
     * @var int
     */
    public $time;

    /**
     * @description The total outbound and inbound network throughput, which indicates the total number of bits that are sent inbound and outbound per second. Unit: bit/s.
     *
     * @example 323
     *
     * @var int
     */
    public $totalBps;
    protected $_name = [
        'inBps'        => 'InBps',
        'inBytes'      => 'InBytes',
        'inPps'        => 'InPps',
        'newConn'      => 'NewConn',
        'outBps'       => 'OutBps',
        'outBytes'     => 'OutBytes',
        'outPps'       => 'OutPps',
        'sessionCount' => 'SessionCount',
        'time'         => 'Time',
        'totalBps'     => 'TotalBps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inBps) {
            $res['InBps'] = $this->inBps;
        }
        if (null !== $this->inBytes) {
            $res['InBytes'] = $this->inBytes;
        }
        if (null !== $this->inPps) {
            $res['InPps'] = $this->inPps;
        }
        if (null !== $this->newConn) {
            $res['NewConn'] = $this->newConn;
        }
        if (null !== $this->outBps) {
            $res['OutBps'] = $this->outBps;
        }
        if (null !== $this->outBytes) {
            $res['OutBytes'] = $this->outBytes;
        }
        if (null !== $this->outPps) {
            $res['OutPps'] = $this->outPps;
        }
        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->totalBps) {
            $res['TotalBps'] = $this->totalBps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InBps'])) {
            $model->inBps = $map['InBps'];
        }
        if (isset($map['InBytes'])) {
            $model->inBytes = $map['InBytes'];
        }
        if (isset($map['InPps'])) {
            $model->inPps = $map['InPps'];
        }
        if (isset($map['NewConn'])) {
            $model->newConn = $map['NewConn'];
        }
        if (isset($map['OutBps'])) {
            $model->outBps = $map['OutBps'];
        }
        if (isset($map['OutBytes'])) {
            $model->outBytes = $map['OutBytes'];
        }
        if (isset($map['OutPps'])) {
            $model->outPps = $map['OutPps'];
        }
        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['TotalBps'])) {
            $model->totalBps = $map['TotalBps'];
        }

        return $model;
    }
}
