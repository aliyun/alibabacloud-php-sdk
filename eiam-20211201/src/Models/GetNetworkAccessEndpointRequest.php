<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Tea\Model;

class GetNetworkAccessEndpointRequest extends Model
{
    /**
     * @description IDaaS EIAM实例的ID。
     *
     * This parameter is required.
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 专属网络端点ID。
     *
     * This parameter is required.
     * @example nae-examplexxxx
     *
     * @var string
     */
    public $networkAccessEndpointId;
    protected $_name = [
        'instanceId'              => 'InstanceId',
        'networkAccessEndpointId' => 'NetworkAccessEndpointId',
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
        if (null !== $this->networkAccessEndpointId) {
            $res['NetworkAccessEndpointId'] = $this->networkAccessEndpointId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNetworkAccessEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NetworkAccessEndpointId'])) {
            $model->networkAccessEndpointId = $map['NetworkAccessEndpointId'];
        }

        return $model;
    }
}
