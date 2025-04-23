<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListInvocationStatusResponseBody\invokeInstances;

use AlibabaCloud\Dara\Model;

class invokeInstance extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceInvokeStatus;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'instanceInvokeStatus' => 'InstanceInvokeStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceInvokeStatus) {
            $res['InstanceInvokeStatus'] = $this->instanceInvokeStatus;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceInvokeStatus'])) {
            $model->instanceInvokeStatus = $map['InstanceInvokeStatus'];
        }

        return $model;
    }
}
