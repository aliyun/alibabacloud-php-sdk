<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListInvocationStatusResponseBody\invokeInstances;

use AlibabaCloud\Tea\Model;

class invokeInstance extends Model
{
    /**
     * @var string
     */
    public $instanceInvokeStatus;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'instanceInvokeStatus' => 'InstanceInvokeStatus',
        'instanceId'           => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceInvokeStatus) {
            $res['InstanceInvokeStatus'] = $this->instanceInvokeStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invokeInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceInvokeStatus'])) {
            $model->instanceInvokeStatus = $map['InstanceInvokeStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
