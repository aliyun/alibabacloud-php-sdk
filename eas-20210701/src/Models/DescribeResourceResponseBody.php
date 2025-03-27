<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class DescribeResourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $cpuCount;

    /**
     * @var int
     */
    public $cpuUsed;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $extraData;

    /**
     * @var int
     */
    public $gpuCount;

    /**
     * @var float
     */
    public $gpuUsed;

    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var int
     */
    public $memoryUsed;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $ownerUid;

    /**
     * @var int
     */
    public $postPaidInstanceCount;

    /**
     * @var int
     */
    public $prePaidInstanceCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'cpuCount' => 'CpuCount',
        'cpuUsed' => 'CpuUsed',
        'createTime' => 'CreateTime',
        'extraData' => 'ExtraData',
        'gpuCount' => 'GpuCount',
        'gpuUsed' => 'GpuUsed',
        'instanceCount' => 'InstanceCount',
        'memory' => 'Memory',
        'memoryUsed' => 'MemoryUsed',
        'message' => 'Message',
        'ownerUid' => 'OwnerUid',
        'postPaidInstanceCount' => 'PostPaidInstanceCount',
        'prePaidInstanceCount' => 'PrePaidInstanceCount',
        'requestId' => 'RequestId',
        'resourceId' => 'ResourceId',
        'resourceName' => 'ResourceName',
        'resourceType' => 'ResourceType',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->cpuCount) {
            $res['CpuCount'] = $this->cpuCount;
        }

        if (null !== $this->cpuUsed) {
            $res['CpuUsed'] = $this->cpuUsed;
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

        if (null !== $this->gpuUsed) {
            $res['GpuUsed'] = $this->gpuUsed;
        }

        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->memoryUsed) {
            $res['MemoryUsed'] = $this->memoryUsed;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['CpuCount'])) {
            $model->cpuCount = $map['CpuCount'];
        }

        if (isset($map['CpuUsed'])) {
            $model->cpuUsed = $map['CpuUsed'];
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

        if (isset($map['GpuUsed'])) {
            $model->gpuUsed = $map['GpuUsed'];
        }

        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['MemoryUsed'])) {
            $model->memoryUsed = $map['MemoryUsed'];
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
