<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class CreateAgenticDBBranchRequest extends Model
{
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
    public $description;

    /**
     * @var string
     */
    public $parentBranchId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'branchName' => 'BranchName',
        'DBClusterId' => 'DBClusterId',
        'description' => 'Description',
        'parentBranchId' => 'ParentBranchId',
        'projectId' => 'ProjectId',
        'regionId' => 'RegionId',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->branchName) {
            $res['BranchName'] = $this->branchName;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->parentBranchId) {
            $res['ParentBranchId'] = $this->parentBranchId;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['BranchName'])) {
            $model->branchName = $map['BranchName'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ParentBranchId'])) {
            $model->parentBranchId = $map['ParentBranchId'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
