<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceResponseBody\spans\logEventList;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceResponseBody\spans\tagEntryList;
use AlibabaCloud\Tea\Model;

class spans extends Model
{
    /**
     * @description The child spans of the current span.
     *
     * @var mixed[][]
     */
    public $children;

    /**
     * @description The amount of time consumed by the trace. Unit: milliseconds.
     *
     * @example 1000
     *
     * @var int
     */
    public $duration;

    /**
     * @description Indicates whether a method stack was provided.
     *
     *   `true`: A method stack was provided.
     *   `false`: No method stack was provided.
     *
     * @example false
     *
     * @var bool
     */
    public $haveStack;

    /**
     * @description The log events in the trace.
     *
     * @var logEventList[]
     */
    public $logEventList;

    /**
     * @description The name of the traced span.
     *
     * @example /api/demo
     *
     * @var string
     */
    public $operationName;

    /**
     * @description The ID of the parent span.
     *
     * @example 18
     *
     * @var string
     */
    public $parentSpanId;

    /**
     * @description The status code.
     *
     * @example 222
     *
     * @var string
     */
    public $resultCode;

    /**
     * @description The ID of the RPC mode.
     *
     * @example 0
     *
     * @var string
     */
    public $rpcId;

    /**
     * @description The type of the remote procedure call (RPC) mode.
     *
     * - 1308 Jdk_Timer
     * @example 1
     *
     * @var int
     */
    public $rpcType;

    /**
     * @description The IP address of the host where the application resides.
     *
     * @example 172.20.XX.XX
     *
     * @var string
     */
    public $serviceIp;

    /**
     * @description The name of the application.
     *
     * @example arms-demo
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The span ID.
     *
     * @example 1234
     *
     * @var string
     */
    public $spanId;

    /**
     * @description The tags of the trace.
     *
     * @var tagEntryList[]
     */
    public $tagEntryList;

    /**
     * @description The timestamp generated when the span was generated.
     *
     * @example 1590388651
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The trace ID.
     *
     * @example ac14001a15954493811405707d****
     *
     * @var string
     */
    public $traceID;
    protected $_name = [
        'children'      => 'Children',
        'duration'      => 'Duration',
        'haveStack'     => 'HaveStack',
        'logEventList'  => 'LogEventList',
        'operationName' => 'OperationName',
        'parentSpanId'  => 'ParentSpanId',
        'resultCode'    => 'ResultCode',
        'rpcId'         => 'RpcId',
        'rpcType'       => 'RpcType',
        'serviceIp'     => 'ServiceIp',
        'serviceName'   => 'ServiceName',
        'spanId'        => 'SpanId',
        'tagEntryList'  => 'TagEntryList',
        'timestamp'     => 'Timestamp',
        'traceID'       => 'TraceID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->children) {
            $res['Children'] = $this->children;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->haveStack) {
            $res['HaveStack'] = $this->haveStack;
        }
        if (null !== $this->logEventList) {
            $res['LogEventList'] = [];
            if (null !== $this->logEventList && \is_array($this->logEventList)) {
                $n = 0;
                foreach ($this->logEventList as $item) {
                    $res['LogEventList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->operationName) {
            $res['OperationName'] = $this->operationName;
        }
        if (null !== $this->parentSpanId) {
            $res['ParentSpanId'] = $this->parentSpanId;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->rpcId) {
            $res['RpcId'] = $this->rpcId;
        }
        if (null !== $this->rpcType) {
            $res['RpcType'] = $this->rpcType;
        }
        if (null !== $this->serviceIp) {
            $res['ServiceIp'] = $this->serviceIp;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->spanId) {
            $res['SpanId'] = $this->spanId;
        }
        if (null !== $this->tagEntryList) {
            $res['TagEntryList'] = [];
            if (null !== $this->tagEntryList && \is_array($this->tagEntryList)) {
                $n = 0;
                foreach ($this->tagEntryList as $item) {
                    $res['TagEntryList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->traceID) {
            $res['TraceID'] = $this->traceID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spans
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = $map['Children'];
            }
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['HaveStack'])) {
            $model->haveStack = $map['HaveStack'];
        }
        if (isset($map['LogEventList'])) {
            if (!empty($map['LogEventList'])) {
                $model->logEventList = [];
                $n                   = 0;
                foreach ($map['LogEventList'] as $item) {
                    $model->logEventList[$n++] = null !== $item ? logEventList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OperationName'])) {
            $model->operationName = $map['OperationName'];
        }
        if (isset($map['ParentSpanId'])) {
            $model->parentSpanId = $map['ParentSpanId'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['RpcId'])) {
            $model->rpcId = $map['RpcId'];
        }
        if (isset($map['RpcType'])) {
            $model->rpcType = $map['RpcType'];
        }
        if (isset($map['ServiceIp'])) {
            $model->serviceIp = $map['ServiceIp'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['SpanId'])) {
            $model->spanId = $map['SpanId'];
        }
        if (isset($map['TagEntryList'])) {
            if (!empty($map['TagEntryList'])) {
                $model->tagEntryList = [];
                $n                   = 0;
                foreach ($map['TagEntryList'] as $item) {
                    $model->tagEntryList[$n++] = null !== $item ? tagEntryList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['TraceID'])) {
            $model->traceID = $map['TraceID'];
        }

        return $model;
    }
}
