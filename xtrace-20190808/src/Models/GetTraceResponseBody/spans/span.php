<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody\spans;

use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody\spans\span\logEventList;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody\spans\span\tagEntryList;
use AlibabaCloud\Tea\Model;

class span extends Model
{
    /**
     * @var string
     */
    public $spanId;

    /**
     * @var string
     */
    public $operationName;

    /**
     * @var string
     */
    public $resultCode;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var tagEntryList
     */
    public $tagEntryList;

    /**
     * @var logEventList
     */
    public $logEventList;

    /**
     * @var bool
     */
    public $haveStack;

    /**
     * @var string
     */
    public $serviceIp;

    /**
     * @var string
     */
    public $parentSpanId;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $rpcId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $traceID;
    protected $_name = [
        'spanId'        => 'SpanId',
        'operationName' => 'OperationName',
        'resultCode'    => 'ResultCode',
        'timestamp'     => 'Timestamp',
        'tagEntryList'  => 'TagEntryList',
        'logEventList'  => 'LogEventList',
        'haveStack'     => 'HaveStack',
        'serviceIp'     => 'ServiceIp',
        'parentSpanId'  => 'ParentSpanId',
        'duration'      => 'Duration',
        'rpcId'         => 'RpcId',
        'serviceName'   => 'ServiceName',
        'traceID'       => 'TraceID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spanId) {
            $res['SpanId'] = $this->spanId;
        }
        if (null !== $this->operationName) {
            $res['OperationName'] = $this->operationName;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->tagEntryList) {
            $res['TagEntryList'] = null !== $this->tagEntryList ? $this->tagEntryList->toMap() : null;
        }
        if (null !== $this->logEventList) {
            $res['LogEventList'] = null !== $this->logEventList ? $this->logEventList->toMap() : null;
        }
        if (null !== $this->haveStack) {
            $res['HaveStack'] = $this->haveStack;
        }
        if (null !== $this->serviceIp) {
            $res['ServiceIp'] = $this->serviceIp;
        }
        if (null !== $this->parentSpanId) {
            $res['ParentSpanId'] = $this->parentSpanId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->rpcId) {
            $res['RpcId'] = $this->rpcId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
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
        if (isset($map['SpanId'])) {
            $model->spanId = $map['SpanId'];
        }
        if (isset($map['OperationName'])) {
            $model->operationName = $map['OperationName'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['TagEntryList'])) {
            $model->tagEntryList = tagEntryList::fromMap($map['TagEntryList']);
        }
        if (isset($map['LogEventList'])) {
            $model->logEventList = logEventList::fromMap($map['LogEventList']);
        }
        if (isset($map['HaveStack'])) {
            $model->haveStack = $map['HaveStack'];
        }
        if (isset($map['ServiceIp'])) {
            $model->serviceIp = $map['ServiceIp'];
        }
        if (isset($map['ParentSpanId'])) {
            $model->parentSpanId = $map['ParentSpanId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['RpcId'])) {
            $model->rpcId = $map['RpcId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['TraceID'])) {
            $model->traceID = $map['TraceID'];
        }

        return $model;
    }
}
