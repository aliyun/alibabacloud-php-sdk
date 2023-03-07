<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListInvocationStatusResponseBody\invokeInstances;

use AlibabaCloud\Tea\Model;

class invokeInstance extends Model
{
    /**
     * @description The ID of the node.
     *
     * @example i-uf6abz34m2714bp4****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The status of the node. Valid values:
     *
     *   Finished
     *   Running
     *   Failed
     *   Stopped
     *
     * @example Finished
     *
     * @var string
     */
    public $instanceInvokeStatus;
    protected $_name = [
        'instanceId'           => 'InstanceId',
        'instanceInvokeStatus' => 'InstanceInvokeStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return invokeInstance
     */
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
