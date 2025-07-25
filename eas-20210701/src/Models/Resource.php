<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class Resource extends Model
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
     * @var mixed[]
     */
    public $extraData;

    /**
     * @var string[]
     */
    public $features;

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
    public $instanceMaxAllocatableCPU;

    /**
     * @var float
     */
    public $instanceMaxAllocatableGPU;

    /**
     * @var int
     */
    public $instanceMaxAllocatableMemory;

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

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'cpuCount' => 'CpuCount',
        'cpuUsed' => 'CpuUsed',
        'createTime' => 'CreateTime',
        'extraData' => 'ExtraData',
        'features' => 'Features',
        'gpuCount' => 'GpuCount',
        'gpuUsed' => 'GpuUsed',
        'instanceCount' => 'InstanceCount',
        'instanceMaxAllocatableCPU' => 'InstanceMaxAllocatableCPU',
        'instanceMaxAllocatableGPU' => 'InstanceMaxAllocatableGPU',
        'instanceMaxAllocatableMemory' => 'InstanceMaxAllocatableMemory',
        'memory' => 'Memory',
        'memoryUsed' => 'MemoryUsed',
        'message' => 'Message',
        'postPaidInstanceCount' => 'PostPaidInstanceCount',
        'prePaidInstanceCount' => 'PrePaidInstanceCount',
        'resourceId' => 'ResourceId',
        'resourceName' => 'ResourceName',
        'resourceType' => 'ResourceType',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
        'vendor' => 'Vendor',
    ];

    public function validate() {}

    public function toMap()
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
        if (null !== $this->features) {
            $res['Features'] = $this->features;
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
        if (null !== $this->instanceMaxAllocatableCPU) {
            $res['InstanceMaxAllocatableCPU'] = $this->instanceMaxAllocatableCPU;
        }
        if (null !== $this->instanceMaxAllocatableGPU) {
            $res['InstanceMaxAllocatableGPU'] = $this->instanceMaxAllocatableGPU;
        }
        if (null !== $this->instanceMaxAllocatableMemory) {
            $res['InstanceMaxAllocatableMemory'] = $this->instanceMaxAllocatableMemory;
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
        if (null !== $this->postPaidInstanceCount) {
            $res['PostPaidInstanceCount'] = $this->postPaidInstanceCount;
        }
        if (null !== $this->prePaidInstanceCount) {
            $res['PrePaidInstanceCount'] = $this->prePaidInstanceCount;
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
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resource
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
        if (isset($map['CpuUsed'])) {
            $model->cpuUsed = $map['CpuUsed'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }
        if (isset($map['Features'])) {
            if (!empty($map['Features'])) {
                $model->features = $map['Features'];
            }
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
        if (isset($map['InstanceMaxAllocatableCPU'])) {
            $model->instanceMaxAllocatableCPU = $map['InstanceMaxAllocatableCPU'];
        }
        if (isset($map['InstanceMaxAllocatableGPU'])) {
            $model->instanceMaxAllocatableGPU = $map['InstanceMaxAllocatableGPU'];
        }
        if (isset($map['InstanceMaxAllocatableMemory'])) {
            $model->instanceMaxAllocatableMemory = $map['InstanceMaxAllocatableMemory'];
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
        if (isset($map['PostPaidInstanceCount'])) {
            $model->postPaidInstanceCount = $map['PostPaidInstanceCount'];
        }
        if (isset($map['PrePaidInstanceCount'])) {
            $model->prePaidInstanceCount = $map['PrePaidInstanceCount'];
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
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
