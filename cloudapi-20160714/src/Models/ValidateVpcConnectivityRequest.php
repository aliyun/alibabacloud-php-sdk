<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ValidateVpcConnectivityRequest extends Model
{
    /**
     * @description The ID of the API Gateway instance.
     *
     * @example apigateway-hz-72bc18******
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The ID of the VPC access authorization.
     *
     * @example 5f1b3216f9********e2c1297b6741dc
     *
     * @var string
     */
    public $vpcAccessId;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'securityToken' => 'SecurityToken',
        'vpcAccessId'   => 'VpcAccessId',
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
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->vpcAccessId) {
            $res['VpcAccessId'] = $this->vpcAccessId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateVpcConnectivityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['VpcAccessId'])) {
            $model->vpcAccessId = $map['VpcAccessId'];
        }

        return $model;
    }
}
