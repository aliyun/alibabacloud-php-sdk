<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\ListDeploymentJobResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The domain names bound to the certificate of the deployment task.
     *
     * @example aliyundoc1.com,aliyundoc2.com,aliyundoc3.com
     *
     * @var string
     */
    public $certDomain;

    /**
     * @description The type of the certificate. Valid values:
     *
     *   **upload**: uploaded certificate
     *   **buy**: purchased certificate
     *   **free**: free certificate, available only on the China site (aliyun.com)
     *
     * @example upload
     *
     * @var string
     */
    public $certType;

    /**
     * @description Indicates whether the deployment task is deleted. Valid values:
     *
     *   **0**: not deleted
     *   **1**: deleted
     *
     * @example 1
     *
     * @var int
     */
    public $del;

    /**
     * @description The end time of the deployment task.
     *
     * @example 1606482979000
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The time when the deployment task was created.
     *
     * @example 1624343180000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the deployment task was last modified.
     *
     * @example 1606482979000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the deployment task. You can use the ID to query the details and status of the deployment task.
     *
     * @example 19975
     *
     * @var int
     */
    public $id;

    /**
     * @description The instance ID of the deployment task.
     *
     * @example cas-job-user-0gvntn
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the deployment task.
     *
     *   **cloud**: multi-cloud deployment task.
     *   **user**: cloud service deployment task. This type of task does not support ECS instances.
     *
     * @example user
     *
     * @var string
     */
    public $jobType;

    /**
     * @description The name of the deployment task.
     *
     * @example job-test
     *
     * @var string
     */
    public $name;

    /**
     * @description The cloud service included in the resources of the deployment task.
     *
     * @example NLB
     *
     * @var string
     */
    public $productName;

    /**
     * @description Indicates whether the rollback worker is included. For example, if a cloud service involved in a deployment task has been rolled back, **1** is returned. Valid values:
     *
     *   **0**: The rollback worker is not included.
     *   **1**: The rollback worker is included.
     *
     * @example 1
     *
     * @var int
     */
    public $rollback;

    /**
     * @description The time when the deployment task was scheduled.
     *
     * @example 1606482979000
     *
     * @var string
     */
    public $scheduleTime;

    /**
     * @description The start time of the deployment task.
     *
     * @example 1606482979000
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the deployment task. Valid values:
     *
     *   **pending**
     *   **editing**
     *   **scheduling**
     *   **processing**
     *   **error**
     *   **success**
     *
     * @example scheduling
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the user.
     *
     * @example 1666884372152785
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'certDomain' => 'CertDomain',
        'certType' => 'CertType',
        'del' => 'Del',
        'endTime' => 'EndTime',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'instanceId' => 'InstanceId',
        'jobType' => 'JobType',
        'name' => 'Name',
        'productName' => 'ProductName',
        'rollback' => 'Rollback',
        'scheduleTime' => 'ScheduleTime',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'userId' => 'UserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->certDomain) {
            $res['CertDomain'] = $this->certDomain;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->del) {
            $res['Del'] = $this->del;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->rollback) {
            $res['Rollback'] = $this->rollback;
        }
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertDomain'])) {
            $model->certDomain = $map['CertDomain'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['Del'])) {
            $model->del = $map['Del'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['Rollback'])) {
            $model->rollback = $map['Rollback'];
        }
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
