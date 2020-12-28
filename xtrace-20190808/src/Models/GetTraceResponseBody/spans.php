<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody;

use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody\spans\logEventList;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody\spans\tagEntryList;
use AlibabaCloud\Tea\Model;

class spans extends Model
{
    /**
     * @var tagEntryList[]
     */
    public $tagEntryList;

    /**
     * @var logEventList[]
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
    public $operationName;

    /**
     * @var string
     */
    public $resultCode;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $rpcId;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $traceID;
    protected $_name = [
        'tagEntryList'  => 'TagEntryList',
        'logEventList'  => 'LogEventList',
        'haveStack'     => 'HaveStack',
        'serviceIp'     => 'ServiceIp',
        'operationName' => 'OperationName',
        'resultCode'    => 'ResultCode',
        'duration'      => 'Duration',
        'rpcId'         => 'RpcId',
        'timestamp'     => 'Timestamp',
        'serviceName'   => 'ServiceName',
        'traceID'       => 'TraceID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagEntryList) {
            $res['TagEntryList'] = [];
            if (null !== $this->tagEntryList && \is_array($this->tagEntryList)) {
                $n = 0;
                foreach ($this->tagEntryList as $item) {
                    $res['TagEntryList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->haveStack) {
            $res['HaveStack'] = $this->haveStack;
        }
        if (null !== $this->serviceIp) {
            $res['ServiceIp'] = $this->serviceIp;
        }
        if (null !== $this->operationName) {
            $res['OperationName'] = $this->operationName;
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->rpcId) {
            $res['RpcId'] = $this->rpcId;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
     * @return spans
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagEntryList'])) {
            if (!empty($map['TagEntryList'])) {
                $model->tagEntryList = [];
                $n                   = 0;
                foreach ($map['TagEntryList'] as $item) {
                    $model->tagEntryList[$n++] = null !== $item ? tagEntryList::fromMap($item) : $item;
                }
            }
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
        if (isset($map['HaveStack'])) {
            $model->haveStack = $map['HaveStack'];
        }
        if (isset($map['ServiceIp'])) {
            $model->serviceIp = $map['ServiceIp'];
        }
        if (isset($map['OperationName'])) {
            $model->operationName = $map['OperationName'];
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['RpcId'])) {
            $model->rpcId = $map['RpcId'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
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
