<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\GetCommonLogDetailResponseBody\logDetail;

use AlibabaCloud\Dara\Model;

class stages extends Model
{
    /**
     * @var string
     */
    public $logLevel;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $method;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $target;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
