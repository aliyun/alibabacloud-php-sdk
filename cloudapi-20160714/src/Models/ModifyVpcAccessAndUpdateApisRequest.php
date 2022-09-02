<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyVpcAccessAndUpdateApisRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $needBatchWork;

    /**
     * @var int
     */
    public $port;

    /**
     * @var bool
     */
    public $refresh;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $vpcId;

    /**
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
