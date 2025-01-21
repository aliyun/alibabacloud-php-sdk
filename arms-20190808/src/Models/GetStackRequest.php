<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class GetStackRequest extends Model
{
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var string
     */
    public $pid;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $rpcID;
    /**
     * @var string
     */
    public $spanID;
    /**
     * @var int
     */
    public $startTime;
    /**
     * @var string
     */
    public $traceID;
    protected $_name = [
        'endTime'   => 'EndTime',
        'pid'       => 'Pid',
        'regionId'  => 'RegionId',
        'rpcID'     => 'RpcID',
        'spanID'    => 'SpanID',
        'startTime' => 'StartTime',
        'traceID'   => 'TraceID',
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

        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->rpcID) {
            $res['RpcID'] = $this->rpcID;
        }

        if (null !== $this->spanID) {
            $res['SpanID'] = $this->spanID;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->traceID) {
            $res['TraceID'] = $this->traceID;
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

        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RpcID'])) {
            $model->rpcID = $map['RpcID'];
        }

        if (isset($map['SpanID'])) {
            $model->spanID = $map['SpanID'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TraceID'])) {
            $model->traceID = $map['TraceID'];
        }

        return $model;
    }
}
