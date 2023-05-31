<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRestorePlansResponseBody;

use AlibabaCloud\Tea\Model;

class restorePlans extends Model
{
    /**
     * @description The timestamp when the restoration task was created. Unit: milliseconds.
     *
     * @example 1655174753****
     *
     * @var int
     */
    public $createdTime;

    /**
     * @description The name of the database.
     *
     * @example Bankup****
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The name of the server on which the database resides.
     *
     * @example sql-test-001
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The ID of the anti-ransomware policy.
     *
     * @example 123
     *
     * @var int
     */
    public $policyId;

    /**
     * @description The name of the anti-ransomware policy.
     *
     * @example KtDataBase
     *
     * @var string
     */
    public $policyName;

    /**
     * @description The point in time to which data is restored.
     *
     * @example 165875100****
     *
     * @var int
     */
    public $restorePoint;

    /**
     * @description The status of the restoration task. Valid values:
     *
     *   **init**: initializing
     *   **created**: creating
     *   **running**: running
     *   **completed**: complete
     *   **error**: failed
     *   **restoring**: restoring
     *
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @description The name of the destination database.
     *
     * @example OABak
     *
     * @var string
     */
    public $targetDatabaseName;

    /**
     * @description The ID of the destination server.
     *
     * @example i-2zehqflgbl9ep2he****
     *
     * @var string
     */
    public $targetInstanceId;

    /**
     * @description The name of the destination server.
     *
     * @example hbr-detection-hh
     *
     * @var string
     */
    public $targetInstanceName;

    /**
     * @description The timestamp when the restoration task was last updated. Unit: milliseconds.
     *
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
