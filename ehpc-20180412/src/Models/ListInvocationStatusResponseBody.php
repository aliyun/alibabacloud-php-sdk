<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListInvocationStatusResponseBody\invokeInstances;
use AlibabaCloud\Tea\Model;

class ListInvocationStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $invokeStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $commandId;

    /**
     * @var invokeInstances[]
     */
    public $invokeInstances;
    protected $_name = [
        'invokeStatus'    => 'InvokeStatus',
        'requestId'       => 'RequestId',
        'commandId'       => 'CommandId',
        'invokeInstances' => 'InvokeInstances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invokeStatus) {
            $res['InvokeStatus'] = $this->invokeStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }
        if (null !== $this->invokeInstances) {
            $res['InvokeInstances'] = [];
            if (null !== $this->invokeInstances && \is_array($this->invokeInstances)) {
                $n = 0;
                foreach ($this->invokeInstances as $item) {
                    $res['InvokeInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInvocationStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvokeStatus'])) {
            $model->invokeStatus = $map['InvokeStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }
        if (isset($map['InvokeInstances'])) {
            if (!empty($map['InvokeInstances'])) {
                $model->invokeInstances = [];
                $n                      = 0;
                foreach ($map['InvokeInstances'] as $item) {
                    $model->invokeInstances[$n++] = null !== $item ? invokeInstances::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
