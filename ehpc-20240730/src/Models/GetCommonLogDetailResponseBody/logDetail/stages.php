<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\GetCommonLogDetailResponseBody\logDetail;

use AlibabaCloud\Tea\Model;

class stages extends Model
{
    /**
     * @example INFO
     *
     * @var string
     */
    public $logLevel;

    /**
     * @example Successfully created security group sg-bcd***
     *
     * @var string
     */
    public $message;

    /**
     * @example CreateSecurityGroup
     *
     * @var string
     */
    public $method;

    /**
     * @example 04F0F334-1335-436C-A1D7-6C044FE7****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example Finished
     *
     * @var string
     */
    public $status;

    /**
     * @example sg-bcd***
     *
     * @var string
     */
    public $target;

    /**
     * @example 2024-08-22 14:21:54
     *
     * @var string
     */
    public $time;
    protected $_name = [
        'logLevel'  => 'LogLevel',
        'message'   => 'Message',
        'method'    => 'Method',
        'requestId' => 'RequestId',
        'status'    => 'Status',
        'target'    => 'Target',
        'time'      => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logLevel) {
            $res['LogLevel'] = $this->logLevel;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogLevel'])) {
            $model->logLevel = $map['LogLevel'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
