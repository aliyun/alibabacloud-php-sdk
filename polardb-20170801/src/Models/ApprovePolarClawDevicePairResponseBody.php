<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ApprovePolarClawDevicePairResponseBody\device;

class ApprovePolarClawDevicePairResponseBody extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var device
     */
    public $device;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $pairRequestId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'code' => 'Code',
        'device' => 'Device',
        'message' => 'Message',
        'pairRequestId' => 'PairRequestId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->device) {
            $this->device->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->device) {
            $res['Device'] = null !== $this->device ? $this->device->toArray($noStream) : $this->device;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->pairRequestId) {
            $res['PairRequestId'] = $this->pairRequestId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Device'])) {
            $model->device = device::fromMap($map['Device']);
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['PairRequestId'])) {
            $model->pairRequestId = $map['PairRequestId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
