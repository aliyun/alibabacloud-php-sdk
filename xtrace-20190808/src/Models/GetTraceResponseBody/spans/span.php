<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody\spans;

use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody\spans\span\logEventList;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody\spans\span\tagEntryList;
use AlibabaCloud\Tea\Model;

class span extends Model
{
    /**
     * @description The time used to call the trace. Unit: milliseconds.
     *
     * @example 1000
     *
     * @var int
     */
    public $duration;

    /**
     * @description Indicates whether the span has child spans. Valid values:
     *
     * - false: The span has no child spans.
     * @example false
     *
     * @var bool
     */
    public $haveStack;

    /**
     * @description The log events in the trace.
     *
     * @var logEventList
     */
    public $logEventList;

    /**
     * @description The name of the span.
     *
     * @example /api
     *
     * @var string
     */
    public $operationName;

    /**
     * @description The ID of the parent span.
     *
     * @example fec891bb8f8XXX
     *
     * @var string
     */
    public $parentSpanId;

    /**
     * @description The status code.
     *
     * @example 200
     *
     * @var string
     */
    public $resultCode;

    /**
     * @description The parent-child and sibling relationship between spans. For example, span 1.1 is the parent of span 1.1.1, and span 1.1.2 and span 1.1.1 are siblings.
     *
     * @example 1.1
     *
     * @var string
     */
    public $rpcId;

    /**
     * @description The IP address of the server where the span resides.
     *
     * @example 192.168.XXX.XXX
     *
     * @var string
     */
    public $serviceIp;

    /**
     * @description The name of the application.
     *
     * @example server1
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description Span ID.
     *
     * @example fec891bb8f8XXX
     *
     * @var string
     */
    public $spanId;

    /**
     * @description The tags in the span.
     *
     * @var tagEntryList
     */
    public $tagEntryList;

    /**
     * @description The timestamp when the span was generated. Unit: microseconds.
     *
     * @example 1689845513298000
     *
     * @var int
     */
    public $timestamp;

    /**
     * @description The unique ID of the trace.
     *
     * @example 1c6881aab84191a4****
     *
     * @var string
     */
    public $traceID;
    protected $_name = [
        'duration'      => 'Duration',
        'haveStack'     => 'HaveStack',
        'logEventList'  => 'LogEventList',
        'operationName' => 'OperationName',
        'parentSpanId'  => 'ParentSpanId',
        'resultCode'    => 'ResultCode',
        'rpcId'         => 'RpcId',
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
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->haveStack) {
            $res['HaveStack'] = $this->haveStack;
        }
        if (null !== $this->logEventList) {
            $res['LogEventList'] = null !== $this->logEventList ? $this->logEventList->toMap() : null;
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
            $res['TagEntryList'] = null !== $this->tagEntryList ? $this->tagEntryList->toMap() : null;
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
     * @return span
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['HaveStack'])) {
            $model->haveStack = $map['HaveStack'];
        }
        if (isset($map['LogEventList'])) {
            $model->logEventList = logEventList::fromMap($map['LogEventList']);
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
            $model->tagEntryList = tagEntryList::fromMap($map['TagEntryList']);
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
