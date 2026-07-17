<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class CreateSignalResponseBody extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $signal;

    /**
     * @var string
     */
    public $signalId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'jobId' => 'JobId',
        'requestId' => 'RequestId',
        'signal' => 'Signal',
        'signalId' => 'SignalId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->signal) {
            $res['Signal'] = $this->signal;
        }

        if (null !== $this->signalId) {
            $res['SignalId'] = $this->signalId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Signal'])) {
            $model->signal = $map['Signal'];
        }

        if (isset($map['SignalId'])) {
            $model->signalId = $map['SignalId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
