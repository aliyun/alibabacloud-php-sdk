<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\FindRegionResponseBody\resultObj;
use AlibabaCloud\Tea\Model;

class FindRegionResponseBody extends Model
{
    /**
     * @var bool
     */
    public $async;

    /**
     * @var string
     */
    public $asyncToken;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var float
     */
    public $errorMsg;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var resultObj
     */
    public $resultObj;

    /**
     * @var bool
     */
    public $retry;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $traceId;
    protected $_name = [
        'async'      => 'Async',
        'asyncToken' => 'AsyncToken',
        'errorCode'  => 'ErrorCode',
        'errorMsg'   => 'ErrorMsg',
        'requestId'  => 'RequestId',
        'resultObj'  => 'ResultObj',
        'retry'      => 'Retry',
        'success'    => 'Success',
        'traceId'    => 'TraceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }
        if (null !== $this->asyncToken) {
            $res['AsyncToken'] = $this->asyncToken;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resultObj) {
            $res['ResultObj'] = null !== $this->resultObj ? $this->resultObj->toMap() : null;
        }
        if (null !== $this->retry) {
            $res['Retry'] = $this->retry;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindRegionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }
        if (isset($map['AsyncToken'])) {
            $model->asyncToken = $map['AsyncToken'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultObj'])) {
            $model->resultObj = resultObj::fromMap($map['ResultObj']);
        }
        if (isset($map['Retry'])) {
            $model->retry = $map['Retry'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
