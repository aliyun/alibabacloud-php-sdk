<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class RemoveVpcAccessRequest extends Model
{
    /**
     * @description The ID of an ECS or SLB instance in the VPC.
     *
     * @example i-uf6bzcg1pr4oh5jjmxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Specifies whether batch work is required.
     *
     * @example true
     *
     * @var bool
     */
    public $needBatchWork;

    /**
     * @description The port number that corresponds to the instance.
     *
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-uf657qec7lx42paw3qxxx
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'needBatchWork' => 'NeedBatchWork',
        'port'          => 'Port',
        'securityToken' => 'SecurityToken',
        'vpcId'         => 'VpcId',
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
        if (null !== $this->needBatchWork) {
            $res['NeedBatchWork'] = $this->needBatchWork;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveVpcAccessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NeedBatchWork'])) {
            $model->needBatchWork = $map['NeedBatchWork'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
