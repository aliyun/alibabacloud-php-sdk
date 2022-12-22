<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserAssetIPTrafficInfoResponseBody extends Model
{
    /**
     * @description The end of the time range that is queried. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1656923760
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The network throughput, which indicates the inbound traffic rate. Unit: bit/s.
     *
     * @example 4520
     *
     * @var int
     */
    public $inBps;

    /**
     * @description The network throughput, which indicates the inbound packet rate. Unit: packets per second (pps).
     *
     * @example 233
     *
     * @var int
     */
    public $inPps;

    /**
     * @description The number of new connections.
     *
     * @example 43
     *
     * @var int
     */
    public $newConn;

    /**
     * @description The network throughput, which indicates the outbound traffic rate. Unit: bit/s.
     *
     * @example 4180
     *
     * @var int
     */
    public $outBps;

    /**
     * @description The network throughput, which indicates the outbound packet rate. Unit: pps.
     *
     * @example 224
     *
     * @var int
     */
    public $outPps;

    /**
     * @description The ID of the request.
     *
     * @example F0F82705-CFC7-5F83-86C8-A063892F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of requests.
     *
     * @example 50
     *
     * @var int
     */
    public $sessionCount;

    /**
     * @description The beginning of the time range that is queried. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1656837360
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'      => 'EndTime',
        'inBps'        => 'InBps',
        'inPps'        => 'InPps',
        'newConn'      => 'NewConn',
        'outBps'       => 'OutBps',
        'outPps'       => 'OutPps',
        'requestId'    => 'RequestId',
        'sessionCount' => 'SessionCount',
        'startTime'    => 'StartTime',
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
        if (null !== $this->inBps) {
            $res['InBps'] = $this->inBps;
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
        if (null !== $this->outPps) {
            $res['OutPps'] = $this->outPps;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserAssetIPTrafficInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InBps'])) {
            $model->inBps = $map['InBps'];
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
        if (isset($map['OutPps'])) {
            $model->outPps = $map['OutPps'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
