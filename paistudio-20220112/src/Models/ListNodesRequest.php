<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class ListNodesRequest extends Model
{
    /**
     * @var string
     */
    public $acceleratorType;

    /**
     * @var string
     */
    public $availabilityZone;

    /**
     * @var string
     */
    public $cliqueID;

    /**
     * @var string
     */
    public $filterByQuotaId;

    /**
     * @var string
     */
    public $filterByResourceGroupIds;

    /**
     * @var string
     */
    public $GPUType;

    /**
     * @var string
     */
    public $hyperNode;

    /**
     * @var string
     */
    public $hyperZone;

    /**
     * @var string
     */
    public $machineGroupIds;

    /**
     * @var string
     */
    public $nodeNames;

    /**
     * @var string
     */
    public $nodeStatuses;

    /**
     * @var string
     */
    public $nodeTypes;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $orderInstanceIds;

    /**
     * @var string
     */
    public $orderStatuses;

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
    public $quotaId;

    /**
     * @var string
     */
    public $reasonCodes;

    /**
     * @var string
     */
    public $resourceGroupIds;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var bool
     */
    public $verbose;
    protected $_name = [
        'acceleratorType' => 'AcceleratorType',
        'availabilityZone' => 'AvailabilityZone',
        'cliqueID' => 'CliqueID',
        'filterByQuotaId' => 'FilterByQuotaId',
        'filterByResourceGroupIds' => 'FilterByResourceGroupIds',
        'GPUType' => 'GPUType',
        'hyperNode' => 'HyperNode',
        'hyperZone' => 'HyperZone',
        'machineGroupIds' => 'MachineGroupIds',
        'nodeNames' => 'NodeNames',
        'nodeStatuses' => 'NodeStatuses',
        'nodeTypes' => 'NodeTypes',
        'order' => 'Order',
        'orderInstanceIds' => 'OrderInstanceIds',
        'orderStatuses' => 'OrderStatuses',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'paymentType' => 'PaymentType',
        'quotaId' => 'QuotaId',
        'reasonCodes' => 'ReasonCodes',
        'resourceGroupIds' => 'ResourceGroupIds',
        'sortBy' => 'SortBy',
        'verbose' => 'Verbose',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceleratorType) {
            $res['AcceleratorType'] = $this->acceleratorType;
        }

        if (null !== $this->availabilityZone) {
            $res['AvailabilityZone'] = $this->availabilityZone;
        }

        if (null !== $this->cliqueID) {
            $res['CliqueID'] = $this->cliqueID;
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

        if (null !== $this->hyperNode) {
            $res['HyperNode'] = $this->hyperNode;
        }

        if (null !== $this->hyperZone) {
            $res['HyperZone'] = $this->hyperZone;
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

        if (null !== $this->orderInstanceIds) {
            $res['OrderInstanceIds'] = $this->orderInstanceIds;
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

        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }

        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
        }

        if (null !== $this->reasonCodes) {
            $res['ReasonCodes'] = $this->reasonCodes;
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

        if (isset($map['AvailabilityZone'])) {
            $model->availabilityZone = $map['AvailabilityZone'];
        }

        if (isset($map['CliqueID'])) {
            $model->cliqueID = $map['CliqueID'];
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

        if (isset($map['HyperNode'])) {
            $model->hyperNode = $map['HyperNode'];
        }

        if (isset($map['HyperZone'])) {
            $model->hyperZone = $map['HyperZone'];
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

        if (isset($map['OrderInstanceIds'])) {
            $model->orderInstanceIds = $map['OrderInstanceIds'];
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

        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }

        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
        }

        if (isset($map['ReasonCodes'])) {
            $model->reasonCodes = $map['ReasonCodes'];
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
