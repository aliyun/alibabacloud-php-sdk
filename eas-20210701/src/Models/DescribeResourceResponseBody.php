<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourceResponseBody extends Model
{
    /**
     * @description The ID of the cluster to which the resource group belongs.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The total number of CPU cores.
     *
     * @example 16
     *
     * @var int
     */
    public $cpuCount;

    /**
     * @description The time when the resource group was created.
     *
     * @example 2020-05-19T14:19:42Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The additional information, such as the connection status of a virtual private cloud (VPC) and the log status of Log Service.
     *
     * @example {"vswitch_id":"vsw-bp17uo6xebcusy****","gpu_share":true,"aux_vswitch_id_list":["vsw-bp13b3pvjap3vxn****","vsw-bp1nls8o5hk8mt8*****"],"security_group_id":"sg-bp1j1z7297hcink*****","vpc_id":"vpc-bp1kjr3rfyhx01*****","destination_cidr":"172.16.0.12/28","role_arn":"acs:ram::1157703270*****:role/AliyunServiceRoleForPaiEas","sls_project":"","sls_logstore":"","sls_status":"ResourceReady","sls_message":"","update_time":""}
     *
     * @var string
     */
    public $extraData;

    /**
     * @description The total number of GPUs.
     *
     * @example 1
     *
     * @var int
     */
    public $gpuCount;

    /**
     * @description The total number of instances in the resource group.
     *
     * @example 4
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @description The returned message.
     *
     * @example Resource is ready
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the resource group owner.
     *
     * @example 14401087478****
     *
     * @var string
     */
    public $ownerUid;

    /**
     * @description The total number of pay-as-you-go instances in the resource group.
     *
     * @example 3
     *
     * @var int
     */
    public $postPaidInstanceCount;

    /**
     * @description The total number of subscription instances in the resource group.
     *
     * @example 1
     *
     * @var int
     */
    public $prePaidInstanceCount;

    /**
     * @description The request ID.
     *
     * @example 902976F2-6FAF-5404-8A4D-6CC223***
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the Elastic Algorithm Service (EAS) resource.
     *
     * @example eas-r-glkfpsxuw57x1h*****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The name of the EAS resource.
     *
     * @example my-resouce****
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The type of the resource group. Valid values:
     *
     *   Dedicated: the dedicated resource group.
     *   SelfManaged: the self-managed resource group.
     *
     * @example Dedicated
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The state of the resource group.
     *
     * @example ResourceReady
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the resource group was last updated.
     *
     * @example 2021-02-24T11:52:17Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'clusterId'             => 'ClusterId',
        'cpuCount'              => 'CpuCount',
        'createTime'            => 'CreateTime',
        'extraData'             => 'ExtraData',
        'gpuCount'              => 'GpuCount',
        'instanceCount'         => 'InstanceCount',
        'message'               => 'Message',
        'ownerUid'              => 'OwnerUid',
        'postPaidInstanceCount' => 'PostPaidInstanceCount',
        'prePaidInstanceCount'  => 'PrePaidInstanceCount',
        'requestId'             => 'RequestId',
        'resourceId'            => 'ResourceId',
        'resourceName'          => 'ResourceName',
        'resourceType'          => 'ResourceType',
        'status'                => 'Status',
        'updateTime'            => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->cpuCount) {
            $res['CpuCount'] = $this->cpuCount;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->extraData) {
            $res['ExtraData'] = $this->extraData;
        }
        if (null !== $this->gpuCount) {
            $res['GpuCount'] = $this->gpuCount;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
        }
        if (null !== $this->postPaidInstanceCount) {
            $res['PostPaidInstanceCount'] = $this->postPaidInstanceCount;
        }
        if (null !== $this->prePaidInstanceCount) {
            $res['PrePaidInstanceCount'] = $this->prePaidInstanceCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CpuCount'])) {
            $model->cpuCount = $map['CpuCount'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }
        if (isset($map['GpuCount'])) {
            $model->gpuCount = $map['GpuCount'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }
        if (isset($map['PostPaidInstanceCount'])) {
            $model->postPaidInstanceCount = $map['PostPaidInstanceCount'];
        }
        if (isset($map['PrePaidInstanceCount'])) {
            $model->prePaidInstanceCount = $map['PrePaidInstanceCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
