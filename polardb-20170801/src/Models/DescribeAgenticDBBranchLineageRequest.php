<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribeAgenticDBBranchLineageRequest extends Model
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
     * @var bool
     */
    public $includeDestroying;

    /**
     * @var int
     */
    public $maxViewDepth;

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
        'branchId' => 'BranchId',
        'DBClusterId' => 'DBClusterId',
        'includeDestroying' => 'IncludeDestroying',
        'maxViewDepth' => 'MaxViewDepth',
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
        if (null !== $this->branchId) {
            $res['BranchId'] = $this->branchId;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->includeDestroying) {
            $res['IncludeDestroying'] = $this->includeDestroying;
        }

        if (null !== $this->maxViewDepth) {
            $res['MaxViewDepth'] = $this->maxViewDepth;
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
        if (isset($map['BranchId'])) {
            $model->branchId = $map['BranchId'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['IncludeDestroying'])) {
            $model->includeDestroying = $map['IncludeDestroying'];
        }

        if (isset($map['MaxViewDepth'])) {
            $model->maxViewDepth = $map['MaxViewDepth'];
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
