<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRestorePlansResponseBody;

use AlibabaCloud\Tea\Model;

class restorePlans extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $restorePoint;

    /**
     * @var int
     */
    public $updatedTime;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $targetInstanceName;

    /**
     * @var string
     */
    public $targetDatabaseName;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var int
     */
    public $policyId;

    /**
     * @var string
     */
    public $targetInstanceId;

    /**
     * @var int
     */
    public $createdTime;
    protected $_name = [
        'status'             => 'Status',
        'restorePoint'       => 'RestorePoint',
        'updatedTime'        => 'UpdatedTime',
        'databaseName'       => 'DatabaseName',
        'instanceName'       => 'InstanceName',
        'targetInstanceName' => 'TargetInstanceName',
        'targetDatabaseName' => 'TargetDatabaseName',
        'policyName'         => 'PolicyName',
        'policyId'           => 'PolicyId',
        'targetInstanceId'   => 'TargetInstanceId',
        'createdTime'        => 'CreatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->restorePoint) {
            $res['RestorePoint'] = $this->restorePoint;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->targetInstanceName) {
            $res['TargetInstanceName'] = $this->targetInstanceName;
        }
        if (null !== $this->targetDatabaseName) {
            $res['TargetDatabaseName'] = $this->targetDatabaseName;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return restorePlans
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RestorePoint'])) {
            $model->restorePoint = $map['RestorePoint'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['TargetInstanceName'])) {
            $model->targetInstanceName = $map['TargetInstanceName'];
        }
        if (isset($map['TargetDatabaseName'])) {
            $model->targetDatabaseName = $map['TargetDatabaseName'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        return $model;
    }
}
