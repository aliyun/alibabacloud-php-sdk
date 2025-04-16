<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeUserAssetIPTrafficInfoResponseBody extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $inBps;

    /**
     * @var int
     */
    public $inPps;

    /**
     * @var int
     */
    public $newConn;

    /**
     * @var int
     */
    public $outBps;

    /**
     * @var int
     */
    public $outPps;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $sessionCount;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'inBps' => 'InBps',
        'inPps' => 'InPps',
        'newConn' => 'NewConn',
        'outBps' => 'OutBps',
        'outPps' => 'OutPps',
        'requestId' => 'RequestId',
        'sessionCount' => 'SessionCount',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
