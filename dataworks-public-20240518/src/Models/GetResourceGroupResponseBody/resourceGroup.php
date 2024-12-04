<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetResourceGroupResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetResourceGroupResponseBody\resourceGroup\spec;
use AlibabaCloud\Tea\Model;

class resourceGroup extends Model
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
     * @example vpc-m2et4f3oc8msfbccXXXXX
     *
     * @var string
     */
    public $defaultVpcId;

    /**
     * @example vsw-uf8usrhs7hjd9amsXXXXX
     *
     * @var string
     */
    public $defaultVswitchId;

    /**
     * @example Serverless_res_group_524257424564736_6831777003XXXXX
     *
     * @var string
     */
    public $id;

    /**
     * @example common_resource_group
     *
     * @var string
     */
    public $name;

    /**
     * @example c442b330-3b10-4584-959e-736e4edXXXXX
     *
     * @var string
     */
    public $orderInstanceId;

    /**
     * @example PrePaid
     *
     * @var string
     */
    public $paymentType;

    /**
     * @example 创建用于普通任务的通用资源组
     *
     * @var string
     */
    public $remark;

    /**
     * @description The type the resource group. Valid values:
     *
     *   CommonV2: serverless resource group
     *   ExclusiveDataIntegration: exclusive resource group for Data Integration
     *   ExclusiveScheduler: exclusive resource group for scheduling
     *   ExclusiveDataService: exclusive resource group for DataService Studio
     *
     * @example CommonV2
     *
     * @var string
     */
    public $resourceGroupType;

    /**
     * @description The specifications of the resource group.
     *
     * @var spec
     */
    public $spec;

    /**
     * @description The status of the resource group. Valid values:
     *
     *   Normal: The resource group is running or in use.
     *   Stop: The resource group is expired.
     *   Deleted: The resource group is released or destroyed.
     *   Creating: The resource group is being started.
     *   CreateFailed: The resource group fails to be started.
     *   Updating: The resource group is being scaled in or out, or the configurations of the resource group are being changed.
     *   UpdateFailed: The resource group fails to be scaled out or upgraded.
     *   Deleting: The resource group is being released or destroyed.
     *   DeleteFailed: The resource group fails to be released or destroyed.
     *   Timeout: The operations that are performed on the resource group time out.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime'        => 'CreateTime',
        'createUser'        => 'CreateUser',
        'defaultVpcId'      => 'DefaultVpcId',
        'defaultVswitchId'  => 'DefaultVswitchId',
        'id'                => 'Id',
        'name'              => 'Name',
        'orderInstanceId'   => 'OrderInstanceId',
        'paymentType'       => 'PaymentType',
        'remark'            => 'Remark',
        'resourceGroupType' => 'ResourceGroupType',
        'spec'              => 'Spec',
        'status'            => 'Status',
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
        if (null !== $this->defaultVpcId) {
            $res['DefaultVpcId'] = $this->defaultVpcId;
        }
        if (null !== $this->defaultVswitchId) {
            $res['DefaultVswitchId'] = $this->defaultVswitchId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->orderInstanceId) {
            $res['OrderInstanceId'] = $this->orderInstanceId;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->resourceGroupType) {
            $res['ResourceGroupType'] = $this->resourceGroupType;
        }
        if (null !== $this->spec) {
            $res['Spec'] = null !== $this->spec ? $this->spec->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceGroup
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
        if (isset($map['DefaultVpcId'])) {
            $model->defaultVpcId = $map['DefaultVpcId'];
        }
        if (isset($map['DefaultVswitchId'])) {
            $model->defaultVswitchId = $map['DefaultVswitchId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrderInstanceId'])) {
            $model->orderInstanceId = $map['OrderInstanceId'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['ResourceGroupType'])) {
            $model->resourceGroupType = $map['ResourceGroupType'];
        }
        if (isset($map['Spec'])) {
            $model->spec = spec::fromMap($map['Spec']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
