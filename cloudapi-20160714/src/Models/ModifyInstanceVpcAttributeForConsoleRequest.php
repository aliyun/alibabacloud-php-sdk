<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class ModifyInstanceVpcAttributeForConsoleRequest extends Model
{
    /**
     * @var bool
     */
    public $deleteVpcAccess;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var int
     */
    public $vpcOwnerId;

    /**
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'deleteVpcAccess' => 'DeleteVpcAccess',
        'instanceId' => 'InstanceId',
        'token' => 'Token',
        'vpcId' => 'VpcId',
        'vpcOwnerId' => 'VpcOwnerId',
        'vswitchId' => 'VswitchId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteVpcAccess) {
            $res['DeleteVpcAccess'] = $this->deleteVpcAccess;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcOwnerId) {
            $res['VpcOwnerId'] = $this->vpcOwnerId;
        }

        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteVpcAccess'])) {
            $model->deleteVpcAccess = $map['DeleteVpcAccess'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VpcOwnerId'])) {
            $model->vpcOwnerId = $map['VpcOwnerId'];
        }

        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
