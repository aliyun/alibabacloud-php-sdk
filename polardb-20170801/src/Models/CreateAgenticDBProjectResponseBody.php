<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class CreateAgenticDBProjectResponseBody extends Model
{
    /**
     * @var string
     */
    public $branchComputeClusterId;

    /**
     * @var string
     */
    public $createTime;

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
    public $tenantId;
    protected $_name = [
        'branchComputeClusterId' => 'BranchComputeClusterId',
        'createTime' => 'CreateTime',
        'defaultBranchId' => 'DefaultBranchId',
        'defaultBranchName' => 'DefaultBranchName',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'requestId' => 'RequestId',
        'tenantId' => 'TenantId',
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

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->defaultBranchId) {
            $res['DefaultBranchId'] = $this->defaultBranchId;
        }

        if (null !== $this->defaultBranchName) {
            $res['DefaultBranchName'] = $this->defaultBranchName;
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
        if (isset($map['BranchComputeClusterId'])) {
            $model->branchComputeClusterId = $map['BranchComputeClusterId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DefaultBranchId'])) {
            $model->defaultBranchId = $map['DefaultBranchId'];
        }

        if (isset($map['DefaultBranchName'])) {
            $model->defaultBranchName = $map['DefaultBranchName'];
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

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
