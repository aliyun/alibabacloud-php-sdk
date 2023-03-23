<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyVpcAccessAndUpdateApisRequest extends Model
{
    /**
     * @description The ID of the new instance.
     *
     * @example i-uf6bzcg1pr4oh5jjmxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the VPC authorization.
     *
     * >
     *
     *   The name of a VPC authorization cannot be changed. You cannot use this parameter to change the name of a VPC authorization.
     *
     *   You must set this parameter to the name of the current VPC authorization.
     *
     * @example VpcName
     *
     * @var string
     */
    public $name;

    /**
     * @description Specifies whether to update the associated API.
     *
     **
     *
     **Warning:** If you want to update the VPC authorization of a published API, you must set this parameter to true. Otherwise, the update will not be synchronized to the backend service of the API.
     *
     * @example true
     *
     * @var bool
     */
    public $needBatchWork;

    /**
     * @description The new port number.
     *
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description Specifies whether to update the VPC authorization.
     *
     * >
     *
     *   If the ID of the instance in your VPC is changed but the IP address of the instance remains unchanged, you can set this parameter to true to update the VPC authorization.
     *
     * @example false
     *
     * @var bool
     */
    public $refresh;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The token of the request.
     *
     * @example c20d86c4-1eb3-4d0b-afe9-c586df1e2136
     *
     * @var string
     */
    public $token;

    /**
     * @description The ID of the new VPC.
     *
     * @example vpc-m5e7jqfppv5wbvmdw5pg2
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The hostname of the backend service.
     *
     * @example iot.hu***ng.com
     *
     * @var string
     */
    public $vpcTargetHostName;
    protected $_name = [
        'instanceId'        => 'InstanceId',
        'name'              => 'Name',
        'needBatchWork'     => 'NeedBatchWork',
        'port'              => 'Port',
        'refresh'           => 'Refresh',
        'securityToken'     => 'SecurityToken',
        'token'             => 'Token',
        'vpcId'             => 'VpcId',
        'vpcTargetHostName' => 'VpcTargetHostName',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->needBatchWork) {
            $res['NeedBatchWork'] = $this->needBatchWork;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->refresh) {
            $res['Refresh'] = $this->refresh;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
     * @return ModifyVpcAccessAndUpdateApisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NeedBatchWork'])) {
            $model->needBatchWork = $map['NeedBatchWork'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Refresh'])) {
            $model->refresh = $map['Refresh'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
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
