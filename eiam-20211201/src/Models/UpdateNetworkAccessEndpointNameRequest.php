<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Tea\Model;

class UpdateNetworkAccessEndpointNameRequest extends Model
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
     * @example nae_examplexxxx
     *
     * @var string
     */
    public $networkAccessEndpointId;

    /**
     * @description 专属网络端点名称。
     *
     * This parameter is required.
     * @example xx业务VPC访问端点
     *
     * @var string
     */
    public $networkAccessEndpointName;
    protected $_name = [
        'instanceId'                => 'InstanceId',
        'networkAccessEndpointId'   => 'NetworkAccessEndpointId',
        'networkAccessEndpointName' => 'NetworkAccessEndpointName',
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
        if (null !== $this->networkAccessEndpointName) {
            $res['NetworkAccessEndpointName'] = $this->networkAccessEndpointName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateNetworkAccessEndpointNameRequest
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
        if (isset($map['NetworkAccessEndpointName'])) {
            $model->networkAccessEndpointName = $map['NetworkAccessEndpointName'];
        }

        return $model;
    }
}
