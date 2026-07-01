<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAgenticDBComputeClustersResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $branchId;

    /**
     * @var string
     */
    public $branchName;

    /**
     * @var string
     */
    public $computeClusterId;

    /**
     * @var int
     */
    public $computeNodeCount;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $isDefaultBranch;

    /**
     * @var string
     */
    public $lastActivatedAt;

    /**
     * @var string
     */
    public $maxCU;

    /**
     * @var string
     */
    public $minCU;

    /**
     * @var string
     */
    public $operatorType;

    /**
     * @var string
     */
    public $parentBranchId;

    /**
     * @var string
     */
    public $parentBranchName;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $storageSize;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $tenantName;
    protected $_name = [
        'branchId' => 'BranchId',
        'branchName' => 'BranchName',
        'computeClusterId' => 'ComputeClusterId',
        'computeNodeCount' => 'ComputeNodeCount',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'isDefaultBranch' => 'IsDefaultBranch',
        'lastActivatedAt' => 'LastActivatedAt',
        'maxCU' => 'MaxCU',
        'minCU' => 'MinCU',
        'operatorType' => 'OperatorType',
        'parentBranchId' => 'ParentBranchId',
        'parentBranchName' => 'ParentBranchName',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'status' => 'Status',
        'storageSize' => 'StorageSize',
        'tenantId' => 'TenantId',
        'tenantName' => 'TenantName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->branchId) {
            $res['BranchId'] = $this->branchId;
        }

        if (null !== $this->branchName) {
            $res['BranchName'] = $this->branchName;
        }

        if (null !== $this->computeClusterId) {
            $res['ComputeClusterId'] = $this->computeClusterId;
        }

        if (null !== $this->computeNodeCount) {
            $res['ComputeNodeCount'] = $this->computeNodeCount;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->isDefaultBranch) {
            $res['IsDefaultBranch'] = $this->isDefaultBranch;
        }

        if (null !== $this->lastActivatedAt) {
            $res['LastActivatedAt'] = $this->lastActivatedAt;
        }

        if (null !== $this->maxCU) {
            $res['MaxCU'] = $this->maxCU;
        }

        if (null !== $this->minCU) {
            $res['MinCU'] = $this->minCU;
        }

        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
        }

        if (null !== $this->parentBranchId) {
            $res['ParentBranchId'] = $this->parentBranchId;
        }

        if (null !== $this->parentBranchName) {
            $res['ParentBranchName'] = $this->parentBranchName;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
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
        if (isset($map['BranchId'])) {
            $model->branchId = $map['BranchId'];
        }

        if (isset($map['BranchName'])) {
            $model->branchName = $map['BranchName'];
        }

        if (isset($map['ComputeClusterId'])) {
            $model->computeClusterId = $map['ComputeClusterId'];
        }

        if (isset($map['ComputeNodeCount'])) {
            $model->computeNodeCount = $map['ComputeNodeCount'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['IsDefaultBranch'])) {
            $model->isDefaultBranch = $map['IsDefaultBranch'];
        }

        if (isset($map['LastActivatedAt'])) {
            $model->lastActivatedAt = $map['LastActivatedAt'];
        }

        if (isset($map['MaxCU'])) {
            $model->maxCU = $map['MaxCU'];
        }

        if (isset($map['MinCU'])) {
            $model->minCU = $map['MinCU'];
        }

        if (isset($map['OperatorType'])) {
            $model->operatorType = $map['OperatorType'];
        }

        if (isset($map['ParentBranchId'])) {
            $model->parentBranchId = $map['ParentBranchId'];
        }

        if (isset($map['ParentBranchName'])) {
            $model->parentBranchName = $map['ParentBranchName'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }

        return $model;
    }
}
