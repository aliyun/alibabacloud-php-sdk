<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetStackRequest extends Model
{
    /**
     * @description The exit timestamp of the method call. Unit: milliseconds.
     *
     * @example 1653641800
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The process identifier (PID) of the application. For more information about how to obtain the PID, see [Obtain the PID of an application](https://www.alibabacloud.com/help/zh/doc-detail/186100.htm?spm=a2cdw.13409063.0.0.7a72281f0bkTfx#title-imy-7gj-qhr).
     *
     * @example eb4zdose6v@36bab313a******
     *
     * @var string
     */
    public $pid;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the remote procedure call (RPC) mode. You can obtain the ID by calling the **GetTrace** operation.
     *
     * This parameter is required.
     *
     * @example 0.1
     *
     * @var string
     */
    public $rpcID;

    /**
     * @description The span ID of the trace. It is displayed on the Trace Explorer page in the ARMS console.
     *
     * @example 88c32dfa4b******
     *
     * @var string
     */
    public $spanID;

    /**
     * @description The entry timestamp of the method call. Unit: milliseconds.
     *
     * @example 1653555396
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The trace ID. It is displayed on the **Trace Explorer** page in the Application Real-Time Monitoring Service (ARMS) console.
     *
     * This parameter is required.
     *
     * @example 0a5800611641470044457853******
     *
     * @var string
     */
    public $traceID;
    protected $_name = [
        'endTime' => 'EndTime',
        'pid' => 'Pid',
        'regionId' => 'RegionId',
        'rpcID' => 'RpcID',
        'spanID' => 'SpanID',
        'startTime' => 'StartTime',
        'traceID' => 'TraceID',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetStackRequest
     */
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
