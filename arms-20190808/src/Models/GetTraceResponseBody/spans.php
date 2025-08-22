<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceResponseBody\spans\logEventList;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceResponseBody\spans\tagEntryList;

class spans extends Model
{
    /**
     * @var mixed[][]
     */
    public $children;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var bool
     */
    public $haveStack;

    /**
     * @var logEventList[]
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
     * @var int
     */
    public $rpcType;

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
     * @var tagEntryList[]
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
        'children' => 'Children',
        'duration' => 'Duration',
        'haveStack' => 'HaveStack',
        'logEventList' => 'LogEventList',
        'operationName' => 'OperationName',
        'parentSpanId' => 'ParentSpanId',
        'resultCode' => 'ResultCode',
        'rpcId' => 'RpcId',
        'rpcType' => 'RpcType',
        'serviceIp' => 'ServiceIp',
        'serviceName' => 'ServiceName',
        'spanId' => 'SpanId',
        'tagEntryList' => 'TagEntryList',
        'timestamp' => 'Timestamp',
        'traceID' => 'TraceID',
    ];

    public function validate()
    {
        if (\is_array($this->children)) {
            Model::validateArray($this->children);
        }
        if (\is_array($this->logEventList)) {
            Model::validateArray($this->logEventList);
        }
        if (\is_array($this->tagEntryList)) {
            Model::validateArray($this->tagEntryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->children) {
            if (\is_array($this->children)) {
                $res['Children'] = [];
                $n1 = 0;
                foreach ($this->children as $item1) {
                    if (\is_array($item1)) {
                        $res['Children'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Children'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->haveStack) {
            $res['HaveStack'] = $this->haveStack;
        }

        if (null !== $this->logEventList) {
            if (\is_array($this->logEventList)) {
                $res['LogEventList'] = [];
                $n1 = 0;
                foreach ($this->logEventList as $item1) {
                    $res['LogEventList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->tagEntryList)) {
                $res['TagEntryList'] = [];
                $n1 = 0;
                foreach ($this->tagEntryList as $item1) {
                    $res['TagEntryList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = [];
                $n1 = 0;
                foreach ($map['Children'] as $item1) {
                    if (!empty($item1)) {
                        $model->children[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->children[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['LogEventList'] as $item1) {
                    $model->logEventList[$n1] = logEventList::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['TagEntryList'] as $item1) {
                    $model->tagEntryList[$n1] = tagEntryList::fromMap($item1);
                    ++$n1;
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
