<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateNetworkRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * This parameter is required.
     *
     * @example eb870033-74c8-4b1b-9664-04c4e7cc3465
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the serverless resource group.
     *
     * This parameter is required.
     *
     * @example Serverless_res_group_524257424564736_6831777003XXXXX
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * This parameter is required.
     *
     * @example vpc-m2et4f3oc8msfbccXXXXX
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The VSwitch ID.
     *
     * This parameter is required.
     *
     * @example vsw-uf8usrhs7hjd9amsXXXXX
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'resourceGroupId' => 'ResourceGroupId',
        'vpcId' => 'VpcId',
        'vswitchId' => 'VswitchId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNetworkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
