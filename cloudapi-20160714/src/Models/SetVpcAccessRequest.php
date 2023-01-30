<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SetVpcAccessRequest extends Model
{
    /**
     * @description The description.
     *
     * @example The description of the VPC.
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of an ECS or SLB instance in the VPC.
     *
     * @example i-uf6bzcg1pr4oh5jjmxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The unique custom name for authorization.
     *
     * @example test
     *
     * @var string
     */
    public $name;

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
     * @description The ID of the VPC. The VPC must be an available one that belongs to the same account as the API.
     *
     * @example vpc-uf657qec7lx42paw3qxxx
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The host of the backend service.
     *
     * @example iot.hu***ng.com
     *
     * @var string
     */
    public $vpcTargetHostName;
    protected $_name = [
        'description'       => 'Description',
        'instanceId'        => 'InstanceId',
        'name'              => 'Name',
        'port'              => 'Port',
        'securityToken'     => 'SecurityToken',
        'vpcId'             => 'VpcId',
        'vpcTargetHostName' => 'VpcTargetHostName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->vpcTargetHostName) {
            $res['VpcTargetHostName'] = $this->vpcTargetHostName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetVpcAccessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['VpcTargetHostName'])) {
            $model->vpcTargetHostName = $map['VpcTargetHostName'];
        }

        return $model;
    }
}
