<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class RemoveVpcAccessRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $port;

    /**
     * @var bool
     */
    public $needBatchWork;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'vpcId'         => 'VpcId',
        'instanceId'    => 'InstanceId',
        'port'          => 'Port',
        'needBatchWork' => 'NeedBatchWork',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->needBatchWork) {
            $res['NeedBatchWork'] = $this->needBatchWork;
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
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['NeedBatchWork'])) {
            $model->needBatchWork = $map['NeedBatchWork'];
        }

        return $model;
    }
}
