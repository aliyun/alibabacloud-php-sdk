<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListInvocationStatusResponseBody\invokeInstances;

class ListInvocationStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $commandId;

    /**
     * @var invokeInstances
     */
    public $invokeInstances;

    /**
     * @var string
     */
    public $invokeStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'commandId' => 'CommandId',
        'invokeInstances' => 'InvokeInstances',
        'invokeStatus' => 'InvokeStatus',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->invokeInstances) {
            $this->invokeInstances->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }

        if (null !== $this->invokeInstances) {
            $res['InvokeInstances'] = null !== $this->invokeInstances ? $this->invokeInstances->toArray($noStream) : $this->invokeInstances;
        }

        if (null !== $this->invokeStatus) {
            $res['InvokeStatus'] = $this->invokeStatus;
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
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }

        if (isset($map['InvokeInstances'])) {
            $model->invokeInstances = invokeInstances::fromMap($map['InvokeInstances']);
        }

        if (isset($map['InvokeStatus'])) {
            $model->invokeStatus = $map['InvokeStatus'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
