<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class CreateAgenticDBBranchResponseBody extends Model
{
    /**
     * @var string
     */
    public $branchComputeClusterId;

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
    public $DBClusterId;

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
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'branchComputeClusterId' => 'BranchComputeClusterId',
        'branchId' => 'BranchId',
        'branchName' => 'BranchName',
        'DBClusterId' => 'DBClusterId',
        'parentBranchId' => 'ParentBranchId',
        'parentBranchName' => 'ParentBranchName',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'requestId' => 'RequestId',
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

        if (null !== $this->branchId) {
            $res['BranchId'] = $this->branchId;
        }

        if (null !== $this->branchName) {
            $res['BranchName'] = $this->branchName;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (isset($map['BranchId'])) {
            $model->branchId = $map['BranchId'];
        }

        if (isset($map['BranchName'])) {
            $model->branchName = $map['BranchName'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
