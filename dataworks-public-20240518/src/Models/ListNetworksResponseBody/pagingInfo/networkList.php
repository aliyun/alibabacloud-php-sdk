<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNetworksResponseBody\pagingInfo;

use AlibabaCloud\Tea\Model;

class networkList extends Model
{
    /**
     * @example 1727055811000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 11075500042XXXXX
     *
     * @var string
     */
    public $createUser;

    /**
     * @example 1000
     *
     * @var int
     */
    public $id;

    /**
     * @example Serverless_res_group_524257424564736_6831777003XXXXX
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example sg-2ze13vamugr7jenXXXXX
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example vpc-m2et4f3oc8msfbccXXXXX
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example vsw-uf8usrhs7hjd9amsXXXXX
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'createUser'      => 'CreateUser',
        'id'              => 'Id',
        'resourceGroupId' => 'ResourceGroupId',
        'securityGroupId' => 'SecurityGroupId',
        'status'          => 'Status',
        'vpcId'           => 'VpcId',
        'vswitchId'       => 'VswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return networkList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
