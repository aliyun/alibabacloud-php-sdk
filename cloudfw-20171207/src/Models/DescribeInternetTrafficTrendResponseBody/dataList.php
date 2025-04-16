<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInternetTrafficTrendResponseBody;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var int
     */
    public $inBps;

    /**
     * @var int
     */
    public $inBytes;

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
    public $outBytes;

    /**
     * @var int
     */
    public $outPps;

    /**
     * @var int
     */
    public $sessionCount;

    /**
     * @var int
     */
    public $time;

    /**
     * @var int
     */
    public $totalBps;
    protected $_name = [
        'inBps' => 'InBps',
        'inBytes' => 'InBytes',
        'inPps' => 'InPps',
        'newConn' => 'NewConn',
        'outBps' => 'OutBps',
        'outBytes' => 'OutBytes',
        'outPps' => 'OutPps',
        'sessionCount' => 'SessionCount',
        'time' => 'Time',
        'totalBps' => 'TotalBps',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
