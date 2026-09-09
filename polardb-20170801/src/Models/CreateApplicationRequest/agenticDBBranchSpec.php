<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\CreateApplicationRequest;

use AlibabaCloud\Dara\Model;

class agenticDBBranchSpec extends Model
{
    /**
     * @var string
     */
    public $branchId;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $forkFromApplicationId;

    /**
     * @var bool
     */
    public $forkFromBranch;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'branchId' => 'BranchId',
        'DBClusterId' => 'DBClusterId',
        'forkFromApplicationId' => 'ForkFromApplicationId',
        'forkFromBranch' => 'ForkFromBranch',
        'projectId' => 'ProjectId',
        'tenantId' => 'TenantId',
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

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->forkFromApplicationId) {
            $res['ForkFromApplicationId'] = $this->forkFromApplicationId;
        }

        if (null !== $this->forkFromBranch) {
            $res['ForkFromBranch'] = $this->forkFromBranch;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['ForkFromApplicationId'])) {
            $model->forkFromApplicationId = $map['ForkFromApplicationId'];
        }

        if (isset($map['ForkFromBranch'])) {
            $model->forkFromBranch = $map['ForkFromBranch'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
