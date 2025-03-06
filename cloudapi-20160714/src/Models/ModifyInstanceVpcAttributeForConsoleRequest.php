<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceVpcAttributeForConsoleRequest extends Model
{
    /**
     * @description Whether delete instance client VPC.
     * - TRUE: delete instance client VPC
     * @example false
     *
     * @var bool
     */
    public $deleteVpcAccess;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example apigateway-bj-f28baxxxxb51
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The token of the request.
     *
     * @example 505959c38776d9324945dbff709582
     *
     * @var string
     */
    public $token;

    /**
     * @description The ID of the VPC.
     *
     * This parameter is required.
     * @example vpc-8vbnnd66xxxx2xb5oig4f
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the Alibaba Cloud account to which the VPC belongs.
     *
     * @example 1121011712128923
     *
     * @var int
     */
    public $vpcOwnerId;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bj9e2i8w3wz7shkvnuj9a
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'deleteVpcAccess' => 'DeleteVpcAccess',
        'instanceId'      => 'InstanceId',
        'token'           => 'Token',
        'vpcId'           => 'VpcId',
        'vpcOwnerId'      => 'VpcOwnerId',
        'vswitchId'       => 'VswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ModifyInstanceVpcAttributeForConsoleRequest
     */
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
