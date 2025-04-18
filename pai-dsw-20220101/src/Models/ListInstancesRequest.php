<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\ListInstancesRequest\tag;

class ListInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $acceleratorType;

    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var string
     */
    public $createUserId;

    /**
     * @var string
     */
    public $gpuType;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var mixed[]
     */
    public $labels;

    /**
     * @var string
     */
    public $maxCpu;

    /**
     * @var string
     */
    public $maxGpu;

    /**
     * @var string
     */
    public $maxGpuMemory;

    /**
     * @var string
     */
    public $maxMemory;

    /**
     * @var string
     */
    public $minCpu;

    /**
     * @var string
     */
    public $minGpu;

    /**
     * @var string
     */
    public $minGpuMemory;

    /**
     * @var string
     */
    public $minMemory;

    /**
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
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tag[]
     */
    public $tag;

    /**
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

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                foreach ($this->labels as $key1 => $value1) {
                    $res['Labels'][$key1] = $value1;
                }
            }
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
            if (!empty($map['Labels'])) {
                $model->labels = [];
                foreach ($map['Labels'] as $key1 => $value1) {
                    $model->labels[$key1] = $value1;
                }
            }
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
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
