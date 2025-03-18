<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class AttachNetworkInterfaceRequest extends Model
{
    /**
     * @description The ID of the instance
     *
     * This parameter is required.
     *
     * @example i-5p67acfmxazb4p****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the ENI.
     *
     * This parameter is required.
     *
     * @example eni-58z57orgmt6d1****
     *
     * @var string
     */
    public $networkInterfaceId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'networkInterfaceId' => 'NetworkInterfaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachNetworkInterfaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }

        return $model;
    }
}
