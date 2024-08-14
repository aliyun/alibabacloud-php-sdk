<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Tea\Model;

class ListInstancesRequest extends Model
{
    /**
     * @example AcceleratorType
     *
     * @var string
     */
    public $acceleratorType;

    /**
     * @example PRIVATE
     *
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
     * @example dsw-730xxxxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example training_data
     *
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
     * @example DESC
     *
     * @var string
     */
    public $order;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example PayAsYouGo
     *
     * @var string
     */
    public $paymentType;

    /**
     * @example rg-123456789
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example gmtCreate
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example 40823
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'acceleratorType' => 'AcceleratorType',
        'accessibility'   => 'Accessibility',
        'createUserId'    => 'CreateUserId',
        'gpuType'         => 'GpuType',
        'imageName'       => 'ImageName',
        'instanceId'      => 'InstanceId',
        'instanceName'    => 'InstanceName',
        'labels'          => 'Labels',
        'maxCpu'          => 'MaxCpu',
        'maxGpu'          => 'MaxGpu',
        'maxGpuMemory'    => 'MaxGpuMemory',
        'maxMemory'       => 'MaxMemory',
        'minCpu'          => 'MinCpu',
        'minGpu'          => 'MinGpu',
        'minGpuMemory'    => 'MinGpuMemory',
        'minMemory'       => 'MinMemory',
        'order'           => 'Order',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'paymentType'     => 'PaymentType',
        'resourceId'      => 'ResourceId',
        'sortBy'          => 'SortBy',
        'status'          => 'Status',
        'workspaceId'     => 'WorkspaceId',
    ];

    public function validate()
    {
    }

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
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
