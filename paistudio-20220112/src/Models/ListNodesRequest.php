<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class ListNodesRequest extends Model
{
    /**
     * @example CPU
     *
     * @var string
     */
    public $acceleratorType;

    /**
     * @example quotamtl37ge7gkvdz
     *
     * @var string
     */
    public $filterByQuotaId;

    /**
     * @example rg69rj0leslwdnbe
     *
     * @var string
     */
    public $filterByResourceGroupIds;

    /**
     * @example T4
     *
     * @var string
     */
    public $GPUType;

    /**
     * @var string
     */
    public $machineGroupIds;

    /**
     * @example lingjxxxx
     *
     * @var string
     */
    public $nodeNames;

    /**
     * @example Ready
     *
     * @var string
     */
    public $nodeStatuses;

    /**
     * @example ecs.c6.xlarge
     *
     * @var string
     */
    public $nodeTypes;

    /**
     * @example desc
     *
     * @var string
     */
    public $order;

    /**
     * @example Ready
     *
     * @var string
     */
    public $orderStatuses;

    /**
     * @example 2
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
     * @example quotamtl37ge7gkvdz
     *
     * @var string
     */
    public $quotaId;

    /**
     * @example rg69rj0leslwdnbe
     *
     * @var string
     */
    public $resourceGroupIds;

    /**
     * @example GmtCreateTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example false
     *
     * @var bool
     */
    public $verbose;
    protected $_name = [
        'acceleratorType' => 'AcceleratorType',
        'filterByQuotaId' => 'FilterByQuotaId',
        'filterByResourceGroupIds' => 'FilterByResourceGroupIds',
        'GPUType' => 'GPUType',
        'machineGroupIds' => 'MachineGroupIds',
        'nodeNames' => 'NodeNames',
        'nodeStatuses' => 'NodeStatuses',
        'nodeTypes' => 'NodeTypes',
        'order' => 'Order',
        'orderStatuses' => 'OrderStatuses',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'quotaId' => 'QuotaId',
        'resourceGroupIds' => 'ResourceGroupIds',
        'sortBy' => 'SortBy',
        'verbose' => 'Verbose',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorType) {
            $res['AcceleratorType'] = $this->acceleratorType;
        }
        if (null !== $this->filterByQuotaId) {
            $res['FilterByQuotaId'] = $this->filterByQuotaId;
        }
        if (null !== $this->filterByResourceGroupIds) {
            $res['FilterByResourceGroupIds'] = $this->filterByResourceGroupIds;
        }
        if (null !== $this->GPUType) {
            $res['GPUType'] = $this->GPUType;
        }
        if (null !== $this->machineGroupIds) {
            $res['MachineGroupIds'] = $this->machineGroupIds;
        }
        if (null !== $this->nodeNames) {
            $res['NodeNames'] = $this->nodeNames;
        }
        if (null !== $this->nodeStatuses) {
            $res['NodeStatuses'] = $this->nodeStatuses;
        }
        if (null !== $this->nodeTypes) {
            $res['NodeTypes'] = $this->nodeTypes;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->orderStatuses) {
            $res['OrderStatuses'] = $this->orderStatuses;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
        }
        if (null !== $this->resourceGroupIds) {
            $res['ResourceGroupIds'] = $this->resourceGroupIds;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->verbose) {
            $res['Verbose'] = $this->verbose;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorType'])) {
            $model->acceleratorType = $map['AcceleratorType'];
        }
        if (isset($map['FilterByQuotaId'])) {
            $model->filterByQuotaId = $map['FilterByQuotaId'];
        }
        if (isset($map['FilterByResourceGroupIds'])) {
            $model->filterByResourceGroupIds = $map['FilterByResourceGroupIds'];
        }
        if (isset($map['GPUType'])) {
            $model->GPUType = $map['GPUType'];
        }
        if (isset($map['MachineGroupIds'])) {
            $model->machineGroupIds = $map['MachineGroupIds'];
        }
        if (isset($map['NodeNames'])) {
            $model->nodeNames = $map['NodeNames'];
        }
        if (isset($map['NodeStatuses'])) {
            $model->nodeStatuses = $map['NodeStatuses'];
        }
        if (isset($map['NodeTypes'])) {
            $model->nodeTypes = $map['NodeTypes'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['OrderStatuses'])) {
            $model->orderStatuses = $map['OrderStatuses'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
        }
        if (isset($map['ResourceGroupIds'])) {
            $model->resourceGroupIds = $map['ResourceGroupIds'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['Verbose'])) {
            $model->verbose = $map['Verbose'];
        }

        return $model;
    }
}
