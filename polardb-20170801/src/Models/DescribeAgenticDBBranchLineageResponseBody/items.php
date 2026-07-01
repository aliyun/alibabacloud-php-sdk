<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAgenticDBBranchLineageResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $branchComputeClusterId;

    /**
     * @var string
     */
    public $branchDescription;

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
    public $createTime;

    /**
     * @var int
     */
    public $depth;

    /**
     * @var int
     */
    public $directChildCount;

    /**
     * @var bool
     */
    public $hasMoreAncestors;

    /**
     * @var bool
     */
    public $hasMoreChildren;

    /**
     * @var bool
     */
    public $isAnchor;

    /**
     * @var bool
     */
    public $isDefaultBranch;

    /**
     * @var bool
     */
    public $isRoot;

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
    public $status;
    protected $_name = [
        'branchComputeClusterId' => 'BranchComputeClusterId',
        'branchDescription' => 'BranchDescription',
        'branchId' => 'BranchId',
        'branchName' => 'BranchName',
        'createTime' => 'CreateTime',
        'depth' => 'Depth',
        'directChildCount' => 'DirectChildCount',
        'hasMoreAncestors' => 'HasMoreAncestors',
        'hasMoreChildren' => 'HasMoreChildren',
        'isAnchor' => 'IsAnchor',
        'isDefaultBranch' => 'IsDefaultBranch',
        'isRoot' => 'IsRoot',
        'parentBranchId' => 'ParentBranchId',
        'parentBranchName' => 'ParentBranchName',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->branchComputeClusterId) {
            $res['BranchComputeClusterId'] = $this->branchComputeClusterId;
        }

        if (null !== $this->branchDescription) {
            $res['BranchDescription'] = $this->branchDescription;
        }

        if (null !== $this->branchId) {
            $res['BranchId'] = $this->branchId;
        }

        if (null !== $this->branchName) {
            $res['BranchName'] = $this->branchName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->depth) {
            $res['Depth'] = $this->depth;
        }

        if (null !== $this->directChildCount) {
            $res['DirectChildCount'] = $this->directChildCount;
        }

        if (null !== $this->hasMoreAncestors) {
            $res['HasMoreAncestors'] = $this->hasMoreAncestors;
        }

        if (null !== $this->hasMoreChildren) {
            $res['HasMoreChildren'] = $this->hasMoreChildren;
        }

        if (null !== $this->isAnchor) {
            $res['IsAnchor'] = $this->isAnchor;
        }

        if (null !== $this->isDefaultBranch) {
            $res['IsDefaultBranch'] = $this->isDefaultBranch;
        }

        if (null !== $this->isRoot) {
            $res['IsRoot'] = $this->isRoot;
        }

        if (null !== $this->parentBranchId) {
            $res['ParentBranchId'] = $this->parentBranchId;
        }

        if (null !== $this->parentBranchName) {
            $res['ParentBranchName'] = $this->parentBranchName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['BranchComputeClusterId'])) {
            $model->branchComputeClusterId = $map['BranchComputeClusterId'];
        }

        if (isset($map['BranchDescription'])) {
            $model->branchDescription = $map['BranchDescription'];
        }

        if (isset($map['BranchId'])) {
            $model->branchId = $map['BranchId'];
        }

        if (isset($map['BranchName'])) {
            $model->branchName = $map['BranchName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Depth'])) {
            $model->depth = $map['Depth'];
        }

        if (isset($map['DirectChildCount'])) {
            $model->directChildCount = $map['DirectChildCount'];
        }

        if (isset($map['HasMoreAncestors'])) {
            $model->hasMoreAncestors = $map['HasMoreAncestors'];
        }

        if (isset($map['HasMoreChildren'])) {
            $model->hasMoreChildren = $map['HasMoreChildren'];
        }

        if (isset($map['IsAnchor'])) {
            $model->isAnchor = $map['IsAnchor'];
        }

        if (isset($map['IsDefaultBranch'])) {
            $model->isDefaultBranch = $map['IsDefaultBranch'];
        }

        if (isset($map['IsRoot'])) {
            $model->isRoot = $map['IsRoot'];
        }

        if (isset($map['ParentBranchId'])) {
            $model->parentBranchId = $map['ParentBranchId'];
        }

        if (isset($map['ParentBranchName'])) {
            $model->parentBranchName = $map['ParentBranchName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
