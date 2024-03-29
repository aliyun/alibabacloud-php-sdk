<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class CountJobByConditionRequest extends Model
{
    /**
     * @description The type of the destination database.
     *
     * @example MongoDB
     *
     * @var string
     */
    public $destDbType;

    /**
     * @description The ID of the DTS task.
     *
     * @example pk13r731m****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The type of the DTS task. Valid values:
     *
     *   **MIGRATION**: data migration task
     *   **SYNC**: data synchronization task
     *   **SUBSCRIBE**: change tracking task
     *
     * @example SYNC
     *
     * @var string
     */
    public $jobType;

    /**
     * @description The content of the query condition, which corresponds to the value of the JobType parameter.
     *
     * @example dtspk3f13r731m****
     *
     * @var string
     */
    public $params;

    /**
     * @description One of the query conditions. The ID of the region. For more information, see [Supported regions](~~141033~~).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the region in which the DTS instance resides. For more information, see [Supported regions](~~141033~~).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The type of the source database.
     *
     * @example MongoDB
     *
     * @var string
     */
    public $srcDbType;

    /**
     * @description The status of the DTS task.
     *
     * Valid values for a data migration task:
     *
     *   **NotStarted**: The task is not started.
     *   **Prechecking**: The task is in precheck.
     *   **PrecheckFailed**: The task failed to pass the precheck.
     *   **PreCheckPass**: The task passed the precheck.
     *   **NotConfigured**: The task is not configured.
     *   **Migrating**: The task is in progress.
     *   **Suspending**: The task is paused.
     *   **MigrationFailed**: The task failed to migrate data.
     *   **Finished**: The task is complete.
     *   **Retrying**: The task is being retried.
     *   **Upgrade**: The task is being upgraded.
     *   **Locked**: The task is locked.
     *   **Downgrade**: The task is being downgraded.
     *
     * Valid values for a data synchronization task:
     *
     *   **NotStarted**: The task is not started.
     *   **Prechecking**: The task is in precheck.
     *   **PrecheckFailed**: The task failed to pass the precheck.
     *   **PreCheckPass**: The task passed the precheck.
     *   **NotConfigured**: The task is not configured.
     *   **Initializing**: The task is performing initial synchronization.
     *   **InitializeFailed**: Initial synchronization failed.
     *   **Synchronizing**: The task is in progress.
     *   **Failed**: The task failed to synchronize data.
     *   **Suspending**: The task is paused.
     *   **Modifying**: The objects in the task are being modified.
     *   **Finished**: The task is complete.
     *   **Retrying**: The task is being retried.
     *   **Upgrade**: The task is being upgraded.
     *   **Locked**: The task is locked.
     *   **Downgrade**: The task is being downgraded.
     *
     * Valid values for a change tracking task:
     *
     *   **NotConfigured**: The task is not configured.
     *   **NotStarted**: The task is not started.
     *   **Prechecking**: The task is in precheck.
     *   **PrecheckFailed**: The task failed to pass the precheck.
     *   **PreCheckPass**: The task passed the precheck.
     *   **Starting**: The task is being started.
     *   **Normal**: The task is running as expected.
     *   **Retrying**: The task is being retried.
     *   **Abnormal**: The task is not running as expected.
     *   **Upgrade**: The task is being upgraded.
     *   **Locked**: The task is locked.
     *   **Downgrade**: The task is being downgraded.
     *
     * @example Finished
     *
     * @var string
     */
    public $status;

    /**
     * @description The content of the query condition. Valid values:
     *
     *   **name**: the name of the task
     *   **rds**: the ID of the destination instance
     *   **instance**: the ID of the Data Transmission Service (DTS) instance
     *   **srcRds**: the ID of the source instance
     *
     * > The value of this parameter corresponds to the value of the **JobType** parameter.
     * @example name/instance
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'destDbType'      => 'DestDbType',
        'groupId'         => 'GroupId',
        'jobType'         => 'JobType',
        'params'          => 'Params',
        'region'          => 'Region',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'srcDbType'       => 'SrcDbType',
        'status'          => 'Status',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destDbType) {
            $res['DestDbType'] = $this->destDbType;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->srcDbType) {
            $res['SrcDbType'] = $this->srcDbType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CountJobByConditionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestDbType'])) {
            $model->destDbType = $map['DestDbType'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SrcDbType'])) {
            $model->srcDbType = $map['SrcDbType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
