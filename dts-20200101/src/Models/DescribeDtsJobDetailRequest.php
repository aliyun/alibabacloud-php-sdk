<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeDtsJobDetailRequest extends Model
{
    /**
     * @description DescribeDtsJobDetail
     *
     * @example dtsta7w132u12h****
     *
     * @var string
     */
    public $dtsInstanceID;

    /**
     * @description The state of the data migration or data synchronization task.
     *
     * Valid values for a data migration task:
     *
     *   **NotStarted**: The migration is not started.
     *   **Migrating**: The migration is in progress.
     *   **Failed**: The migration failed.
     *   **Finished**: The migration is complete.
     *
     * Valid values for a data synchronization task:
     *
     *   **NotStarted**: The task is not started.
     *   **Prechecking**: The task is in precheck.
     *   **PrecheckFailed**: The task failed to pass the precheck.
     *   **Initializing**: The task is performing initial synchronization.
     *   **InitializeFailed**: Initial synchronization failed.
     *   **Synchronizing**: The task is in progress.
     *   **Failed**: The task failed to synchronize data.
     *   **Suspending**: The task is paused.
     *   **Modifying**: The objects in the task are being modified.
     *   **Finished**: The task is complete.
     *
     * @example ta7w132u12h****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The ID of the data migration, data synchronization, or change tracking task.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 默认为false，返回最近的一个同步子任务
     *
     * @var bool
     */
    public $syncSubJobHistory;

    /**
     * @description Queries the details of a data migration, data synchronization, or change tracking task.
     *
     * @example Forward
     *
     * @var string
     */
    public $synchronizationDirection;
    protected $_name = [
        'dtsInstanceID'            => 'DtsInstanceID',
        'dtsJobId'                 => 'DtsJobId',
        'regionId'                 => 'RegionId',
        'syncSubJobHistory'        => 'SyncSubJobHistory',
        'synchronizationDirection' => 'SynchronizationDirection',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dtsInstanceID) {
            $res['DtsInstanceID'] = $this->dtsInstanceID;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->syncSubJobHistory) {
            $res['SyncSubJobHistory'] = $this->syncSubJobHistory;
        }
        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDtsJobDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsInstanceID'])) {
            $model->dtsInstanceID = $map['DtsInstanceID'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SyncSubJobHistory'])) {
            $model->syncSubJobHistory = $map['SyncSubJobHistory'];
        }
        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }

        return $model;
    }
}
