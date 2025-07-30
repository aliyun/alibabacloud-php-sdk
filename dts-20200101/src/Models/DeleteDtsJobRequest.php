<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DeleteDtsJobRequest extends Model
{
    /**
     * @description The dynamic part in the error message. This parameter is used to replace the **%s** variable in the **ErrMessage** parameter.
     *
     * >  If the return value of the **ErrMessage** parameter is **The Value of Input Parameter %s is not valid** and the return value of the **DynamicMessage** parameter is **DtsJobId**, the specified **DtsJobId** parameter is invalid.
     *
     * @example dtsl3m1213ye7l****
     *
     * @var string
     */
    public $dtsInstanceId;

    /**
     * @description The ID of the data migration, data synchronization, or change tracking task.
     *
     * @example l3m1213ye7l****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The type of the Data Transmission Service (DTS) task. Valid values:
     *
     *   **MIGRATION**: data migration task
     *   **SYNC**: data synchronization task
     *   **SUBSCRIBE**: change tracking task
     *
     * @example MIGRATION
     *
     * @var string
     */
    public $jobType;

    /**
     * @description The error code returned if the call failed.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Resource group ID.
     *
     * @example rg-aek26lwshijfk3q
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The dynamic error code. This parameter will be removed in the future.
     *
     * @example Forward
     *
     * @var string
     */
    public $synchronizationDirection;

    /**
     * @description Whether it is a seamless integration (Zero-ETL) task, the value can be:
     * - **false**: No. - **true**: Yes.
     *
     * @example true
     *
     * @var bool
     */
    public $zeroEtlJob;
    protected $_name = [
        'dtsInstanceId' => 'DtsInstanceId',
        'dtsJobId' => 'DtsJobId',
        'jobType' => 'JobType',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'synchronizationDirection' => 'SynchronizationDirection',
        'zeroEtlJob' => 'ZeroEtlJob',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }
        if (null !== $this->zeroEtlJob) {
            $res['ZeroEtlJob'] = $this->zeroEtlJob;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDtsJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }
        if (isset($map['ZeroEtlJob'])) {
            $model->zeroEtlJob = $map['ZeroEtlJob'];
        }

        return $model;
    }
}
