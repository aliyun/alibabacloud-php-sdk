<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourceGroupsResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourceGroupsResponseBody\pagingInfo\resourceGroupList\aliyunResourceTags;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListResourceGroupsResponseBody\pagingInfo\resourceGroupList\spec;
use AlibabaCloud\Tea\Model;

class resourceGroupList extends Model
{
    /**
     * @description Alibaba Cloud Resource Group ID
     *
     * @example rg-aek2kqofrgXXXXX
     *
     * @var string
     */
    public $aliyunResourceGroupId;

    /**
     * @description Alibaba Cloud tag list
     *
     * @var aliyunResourceTags[]
     */
    public $aliyunResourceTags;

    /**
     * @description The creation time, which is a 64-bit timestamp.
     *
     * @example 1727055811000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the user who created the resource group.
     *
     * @example 11075500042XXXXX
     *
     * @var string
     */
    public $createUser;

    /**
     * @description Default VPC ID bound to a common resource group
     *
     * @example vpc-m2et4f3oc8msfbccXXXXX
     *
     * @var string
     */
    public $defaultVpcId;

    /**
     * @description The default switch ID bound to the common resource group.
     *
     * @example vsw-uf8usrhs7hjd9amsXXXXX
     *
     * @var string
     */
    public $defaultVswicthId;

    /**
     * @description Unique identifier of a resource group
     *
     * @example Serverless_res_group_524257424564736_6831777003XXXXX
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the resource group.
     *
     * @example common_resource_group
     *
     * @var string
     */
    public $name;

    /**
     * @description The order instance ID of the resource group.
     *
     * @example c442b330-3b10-4584-959e-736e4edXXXXX
     *
     * @var string
     */
    public $orderInstanceId;

    /**
     * @description The billing method of the resource group. Valid values: PrePaid and PostPaid. The value PrePaid indicates the subscription billing method, and the value PostPaid indicates the pay-as-you-go billing method.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description Remarks for resource groups
     *
     * @example Create a common resource group for common tasks
     *
     * @var string
     */
    public $remark;

    /**
     * @description Resource group types:
     *
     *   CommonV2: Serverless resource group
     *   ExclusiveDataIntegration: Exclusive resource group for Data Integration
     *   ExclusiveScheduler: Exclusive resource group for scheduling
     *   ExclusiveDataService: Exclusive resource group for DataService Studio
     *
     * @example CommonV2
     *
     * @var string
     */
    public $resourceGroupType;

    /**
     * @description Resource Group specifications
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
     *   Creating: The resource group is being created.
     *   CreateFailed: The resource group fails to be created.
     *   Updating: The resource group is being scaled in or out, or the configurations of the resource group are being changed.
     *   UpdateFailed: The resource group fails to be scaled out or upgraded.
     *   Deleting: The resource group is being released or destroyed.
     *   DeleteFailed: The resource group fails to be released or destroyed.
     *   Timeout: The operations that are performed on the resource group time out.
     *   Freezed: The resource group is frozen.
     *   Starting: The resource group is being started.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'aliyunResourceGroupId' => 'AliyunResourceGroupId',
        'aliyunResourceTags' => 'AliyunResourceTags',
        'createTime' => 'CreateTime',
        'createUser' => 'CreateUser',
        'defaultVpcId' => 'DefaultVpcId',
        'defaultVswicthId' => 'DefaultVswicthId',
        'id' => 'Id',
        'name' => 'Name',
        'orderInstanceId' => 'OrderInstanceId',
        'paymentType' => 'PaymentType',
        'remark' => 'Remark',
        'resourceGroupType' => 'ResourceGroupType',
        'spec' => 'Spec',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunResourceGroupId) {
            $res['AliyunResourceGroupId'] = $this->aliyunResourceGroupId;
        }
        if (null !== $this->aliyunResourceTags) {
            $res['AliyunResourceTags'] = [];
            if (null !== $this->aliyunResourceTags && \is_array($this->aliyunResourceTags)) {
                $n = 0;
                foreach ($this->aliyunResourceTags as $item) {
                    $res['AliyunResourceTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->defaultVpcId) {
            $res['DefaultVpcId'] = $this->defaultVpcId;
        }
        if (null !== $this->defaultVswicthId) {
            $res['DefaultVswicthId'] = $this->defaultVswicthId;
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
     * @return resourceGroupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunResourceGroupId'])) {
            $model->aliyunResourceGroupId = $map['AliyunResourceGroupId'];
        }
        if (isset($map['AliyunResourceTags'])) {
            if (!empty($map['AliyunResourceTags'])) {
                $model->aliyunResourceTags = [];
                $n = 0;
                foreach ($map['AliyunResourceTags'] as $item) {
                    $model->aliyunResourceTags[$n++] = null !== $item ? aliyunResourceTags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['DefaultVpcId'])) {
            $model->defaultVpcId = $map['DefaultVpcId'];
        }
        if (isset($map['DefaultVswicthId'])) {
            $model->defaultVswicthId = $map['DefaultVswicthId'];
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
