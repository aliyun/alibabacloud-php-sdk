<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAgenticDBProjectsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $defaultBranchId;

    /**
     * @var string
     */
    public $defaultBranchName;

    /**
     * @var string
     */
    public $description;

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
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'DBClusterId' => 'DBClusterId',
        'defaultBranchId' => 'DefaultBranchId',
        'defaultBranchName' => 'DefaultBranchName',
        'description' => 'Description',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'status' => 'Status',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->defaultBranchId) {
            $res['DefaultBranchId'] = $this->defaultBranchId;
        }

        if (null !== $this->defaultBranchName) {
            $res['DefaultBranchName'] = $this->defaultBranchName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['DefaultBranchId'])) {
            $model->defaultBranchId = $map['DefaultBranchId'];
        }

        if (isset($map['DefaultBranchName'])) {
            $model->defaultBranchName = $map['DefaultBranchName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
