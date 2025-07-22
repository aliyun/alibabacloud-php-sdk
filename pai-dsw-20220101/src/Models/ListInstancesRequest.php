<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesRequest\tag;
use AlibabaCloud\Tea\Model;

class ListInstancesRequest extends Model
{
    /**
     * @description The accelerator type.
     *
     *   CPU: Only CPU computing is used.
     *   GPU: GPUs are used to accelerate computing.
     *
     * @example CPU
     *
     * @var string
     */
    public $acceleratorType;

    /**
     * @description The accessibility. Valid values:
     *
     *   PRIVATE (default): The instances are accessible only to you and the administrator of the workspace.
     *   PUBLIC: The instances are accessible only to all members in the workspace.
     *
     * @example PRIVATE
     *
     * @var string
     */
    public $accessibility;

    /**
     * @description The UID of the creator.
     *
     * @example 12345*****67890
     *
     * @var string
     */
    public $createUserId;

    /**
     * @description The GPU type.
     *
     * @example NVIDIA A10
     *
     * @var string
     */
    public $gpuType;

    /**
     * @description The image name.
     *
     * @example modelscope:1.9.4-pytorch2.0.1tensorflow2.13.0-cpu-py38-ubuntu20.04
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The instance ID. You can call [ListInstances](https://help.aliyun.com/document_detail/470439.html) to obtain the instance ID.
     *
     * @example dsw-730xxxxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name.
     *
     * @example training_data
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The labels. A maximum of four labels are supported.
     *
     * @example {
     * "key1": "value1",
     * "key2": "value2",
     * "key3": "value3"
     * }
     *
     * @var mixed[]
     */
    public $labels;

    /**
     * @description The maximum number of CPUs. Unit: 0.001 CPU. The value 1000 indicates one CPU.
     *
     * @example 30000
     *
     * @var string
     */
    public $maxCpu;

    /**
     * @description The maximum number of GPUs. Unit: 0.001 GPU. The value 1000 indicates one GPU.
     *
     * @example 8000
     *
     * @var string
     */
    public $maxGpu;

    /**
     * @description The maximum memory size per GPU card. Unit: GB.
     *
     * @example 16
     *
     * @var string
     */
    public $maxGpuMemory;

    /**
     * @description The maximum memory size. Unit: GB.
     *
     * @example 48
     *
     * @var string
     */
    public $maxMemory;

    /**
     * @description The minimum number of CPUs. Unit: 0.001 CPU. The value 1000 indicates one CPU.
     *
     * @example 2000
     *
     * @var string
     */
    public $minCpu;

    /**
     * @description The minimum number of GPUs. Unit: 0.001 GPU. The value 1000 indicates one GPU.
     *
     * @example 100
     *
     * @var string
     */
    public $minGpu;

    /**
     * @description The minimum memory size per GPU card. Unit: GB.
     *
     * @example 8
     *
     * @var string
     */
    public $minGpuMemory;

    /**
     * @description The minimum memory size. Unit: GB.
     *
     * @example 4
     *
     * @var string
     */
    public $minMemory;

    /**
     * @description The order that you use to sort the query results.
     *
     * Valid values:
     *
     *   ASC
     *   DESC
     *
     * @example DESC
     *
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $oversoldInfo;

    /**
     * @var string
     */
    public $oversoldType;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The billing method.
     *
     * Valid values:
     *
     *   PayAsYouGo
     *   Subscription
     *
     * @example PayAsYouGo
     *
     * @var string
     */
    public $paymentType;

    /**
     * @description The resource group ID. If you leave this parameter empty, the instances in the pay-as-you-go resource group are queried. If you set this parameter to ALL, all instances are queried.
     *
     * @example rg-123456789
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The field that you use to sort the query results.
     *
     * Valid values:
     *
     *   Priority
     *   GmtCreateTime
     *   GmtModifiedTime
     *
     * @example gmtCreate
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The instance status.
     *
     * Valid values:
     *
     *   Creating
     *   SaveFailed
     *   Stopped
     *   Failed
     *   ResourceAllocating
     *   Stopping
     *   Updating
     *   Saving
     *   Queuing
     *   Recovering
     *   Starting
     *   Running
     *   Saved
     *   Deleting
     *   EnvPreparing
     *
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The workspace ID. You can call [ListWorkspaces](https://help.aliyun.com/document_detail/449124.html) to obtain the workspace ID.
     *
     * @example 40823
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'acceleratorType' => 'AcceleratorType',
        'accessibility' => 'Accessibility',
        'createUserId' => 'CreateUserId',
        'gpuType' => 'GpuType',
        'imageName' => 'ImageName',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'labels' => 'Labels',
        'maxCpu' => 'MaxCpu',
        'maxGpu' => 'MaxGpu',
        'maxGpuMemory' => 'MaxGpuMemory',
        'maxMemory' => 'MaxMemory',
        'minCpu' => 'MinCpu',
        'minGpu' => 'MinGpu',
        'minGpuMemory' => 'MinGpuMemory',
        'minMemory' => 'MinMemory',
        'order' => 'Order',
        'oversoldInfo' => 'OversoldInfo',
        'oversoldType' => 'OversoldType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'paymentType' => 'PaymentType',
        'resourceId' => 'ResourceId',
        'sortBy' => 'SortBy',
        'status' => 'Status',
        'tag' => 'Tag',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorType) {
            $res['AcceleratorType'] = $this->acceleratorType;
        }
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->gpuType) {
            $res['GpuType'] = $this->gpuType;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->maxCpu) {
            $res['MaxCpu'] = $this->maxCpu;
        }
        if (null !== $this->maxGpu) {
            $res['MaxGpu'] = $this->maxGpu;
        }
        if (null !== $this->maxGpuMemory) {
            $res['MaxGpuMemory'] = $this->maxGpuMemory;
        }
        if (null !== $this->maxMemory) {
            $res['MaxMemory'] = $this->maxMemory;
        }
        if (null !== $this->minCpu) {
            $res['MinCpu'] = $this->minCpu;
        }
        if (null !== $this->minGpu) {
            $res['MinGpu'] = $this->minGpu;
        }
        if (null !== $this->minGpuMemory) {
            $res['MinGpuMemory'] = $this->minGpuMemory;
        }
        if (null !== $this->minMemory) {
            $res['MinMemory'] = $this->minMemory;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->oversoldInfo) {
            $res['OversoldInfo'] = $this->oversoldInfo;
        }
        if (null !== $this->oversoldType) {
            $res['OversoldType'] = $this->oversoldType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorType'])) {
            $model->acceleratorType = $map['AcceleratorType'];
        }
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['GpuType'])) {
            $model->gpuType = $map['GpuType'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['MaxCpu'])) {
            $model->maxCpu = $map['MaxCpu'];
        }
        if (isset($map['MaxGpu'])) {
            $model->maxGpu = $map['MaxGpu'];
        }
        if (isset($map['MaxGpuMemory'])) {
            $model->maxGpuMemory = $map['MaxGpuMemory'];
        }
        if (isset($map['MaxMemory'])) {
            $model->maxMemory = $map['MaxMemory'];
        }
        if (isset($map['MinCpu'])) {
            $model->minCpu = $map['MinCpu'];
        }
        if (isset($map['MinGpu'])) {
            $model->minGpu = $map['MinGpu'];
        }
        if (isset($map['MinGpuMemory'])) {
            $model->minGpuMemory = $map['MinGpuMemory'];
        }
        if (isset($map['MinMemory'])) {
            $model->minMemory = $map['MinMemory'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['OversoldInfo'])) {
            $model->oversoldInfo = $map['OversoldInfo'];
        }
        if (isset($map['OversoldType'])) {
            $model->oversoldType = $map['OversoldType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
