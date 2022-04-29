<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody\spans;

use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody\spans\span\logEventList;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody\spans\span\tagEntryList;
use AlibabaCloud\Tea\Model;

class span extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @var bool
     */
    public $haveStack;

    /**
     * @var logEventList
     */
    public $logEventList;

    /**
     * @var string
     */
    public $operationName;

    /**
     * @var string
     */
    public $parentSpanId;

    /**
     * @var string
     */
    public $resultCode;

    /**
     * @var string
     */
    public $rpcId;

    /**
     * @var string
     */
    public $serviceIp;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $spanId;

    /**
     * @var tagEntryList
     */
    public $tagEntryList;

    /**
     * @var int
     */
    public $timestamp;

    /**
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
