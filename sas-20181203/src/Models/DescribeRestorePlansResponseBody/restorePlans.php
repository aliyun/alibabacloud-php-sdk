<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRestorePlansResponseBody;

use AlibabaCloud\Tea\Model;

class restorePlans extends Model
{
    /**
     * @example 1655174753****
     *
     * @var int
     */
    public $createdTime;

    /**
     * @example Bankup****
     *
     * @var string
     */
    public $databaseName;

    /**
     * @example sql-test-001
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 123
     *
     * @var int
     */
    public $policyId;

    /**
     * @example KtDataBase
     *
     * @var string
     */
    public $policyName;

    /**
     * @example 165875100****
     *
     * @var int
     */
    public $restorePoint;

    /**
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @example OABak
     *
     * @var string
     */
    public $targetDatabaseName;

    /**
     * @example i-2zehqflgbl9ep2he****
     *
     * @var string
     */
    public $targetInstanceId;

    /**
     * @example hbr-detection-hh
     *
     * @var string
     */
    public $targetInstanceName;

    /**
     * @example 166849080****
     *
     * @var int
     */
    public $updatedTime;
    protected $_name = [
        'createdTime'        => 'CreatedTime',
        'databaseName'       => 'DatabaseName',
        'instanceName'       => 'InstanceName',
        'policyId'           => 'PolicyId',
        'policyName'         => 'PolicyName',
        'restorePoint'       => 'RestorePoint',
        'status'             => 'Status',
        'targetDatabaseName' => 'TargetDatabaseName',
        'targetInstanceId'   => 'TargetInstanceId',
        'targetInstanceName' => 'TargetInstanceName',
        'updatedTime'        => 'UpdatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->restorePoint) {
            $res['RestorePoint'] = $this->restorePoint;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targetDatabaseName) {
            $res['TargetDatabaseName'] = $this->targetDatabaseName;
        }
        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }
        if (null !== $this->targetInstanceName) {
            $res['TargetInstanceName'] = $this->targetInstanceName;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
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
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['RestorePoint'])) {
            $model->restorePoint = $map['RestorePoint'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetDatabaseName'])) {
            $model->targetDatabaseName = $map['TargetDatabaseName'];
        }
        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }
        if (isset($map['TargetInstanceName'])) {
            $model->targetInstanceName = $map['TargetInstanceName'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
