<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListInstancePatchStatesResponseBody;

use AlibabaCloud\Tea\Model;

class instancePatchStates extends Model
{
    /**
     * @description The number of patches that have been installed but require a restart to take effect.
     *
     * @example pb-f9393021b7a049e1b34e
     *
     * @var string
     */
    public $baselineId;

    /**
     * @description The ID of the patch baseline.
     *
     * @example 0
     *
     * @var string
     */
    public $failedCount;

    /**
     * @description Queries patches of an instance.
     *
     * @example 0
     *
     * @var string
     */
    public $installedCount;

    /**
     * @description The ID of the ECS instance.
     *
     * @example 0
     *
     * @var string
     */
    public $installedOtherCount;

    /**
     * @description The number of patches that are rejected by the user.
     *
     * @example 0
     *
     * @var string
     */
    public $installedPendingRebootCount;

    /**
     * @description The patch group.
     *
     * @example 0
     *
     * @var string
     */
    public $installedRejectedCount;

    /**
     * @description The operation type.
     *
     * @example i-bp1jaxa2bs4bps7*****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The time when the operation ended.
     *
     * @example 0
     *
     * @var string
     */
    public $missingCount;

    /**
     * @description The information about the user.
     *
     * @example 2021-09-10T11:42:22Z
     *
     * @var string
     */
    public $operationEndTime;

    /**
     * @description The number of patches that failed to be installed.
     *
     * @example 2021-09-10T11:42:22Z
     *
     * @var string
     */
    public $operationStartTime;

    /**
     * @description The time when the operation was initiated.
     *
     * @example scan
     *
     * @var string
     */
    public $operationType;

    /**
     * @description The number of patches that do not meet the baseline.
     *
     * @example “”
     *
     * @var string
     */
    public $ownerInformation;

    /**
     * @description The number of installed patches.
     *
     * @example null
     *
     * @var string
     */
    public $patchGroup;
    protected $_name = [
        'baselineId'                  => 'BaselineId',
        'failedCount'                 => 'FailedCount',
        'installedCount'              => 'InstalledCount',
        'installedOtherCount'         => 'InstalledOtherCount',
        'installedPendingRebootCount' => 'InstalledPendingRebootCount',
        'installedRejectedCount'      => 'InstalledRejectedCount',
        'instanceId'                  => 'InstanceId',
        'missingCount'                => 'MissingCount',
        'operationEndTime'            => 'OperationEndTime',
        'operationStartTime'          => 'OperationStartTime',
        'operationType'               => 'OperationType',
        'ownerInformation'            => 'OwnerInformation',
        'patchGroup'                  => 'PatchGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baselineId) {
            $res['BaselineId'] = $this->baselineId;
        }
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }
        if (null !== $this->installedCount) {
            $res['InstalledCount'] = $this->installedCount;
        }
        if (null !== $this->installedOtherCount) {
            $res['InstalledOtherCount'] = $this->installedOtherCount;
        }
        if (null !== $this->installedPendingRebootCount) {
            $res['InstalledPendingRebootCount'] = $this->installedPendingRebootCount;
        }
        if (null !== $this->installedRejectedCount) {
            $res['InstalledRejectedCount'] = $this->installedRejectedCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->missingCount) {
            $res['MissingCount'] = $this->missingCount;
        }
        if (null !== $this->operationEndTime) {
            $res['OperationEndTime'] = $this->operationEndTime;
        }
        if (null !== $this->operationStartTime) {
            $res['OperationStartTime'] = $this->operationStartTime;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->ownerInformation) {
            $res['OwnerInformation'] = $this->ownerInformation;
        }
        if (null !== $this->patchGroup) {
            $res['PatchGroup'] = $this->patchGroup;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instancePatchStates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaselineId'])) {
            $model->baselineId = $map['BaselineId'];
        }
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }
        if (isset($map['InstalledCount'])) {
            $model->installedCount = $map['InstalledCount'];
        }
        if (isset($map['InstalledOtherCount'])) {
            $model->installedOtherCount = $map['InstalledOtherCount'];
        }
        if (isset($map['InstalledPendingRebootCount'])) {
            $model->installedPendingRebootCount = $map['InstalledPendingRebootCount'];
        }
        if (isset($map['InstalledRejectedCount'])) {
            $model->installedRejectedCount = $map['InstalledRejectedCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MissingCount'])) {
            $model->missingCount = $map['MissingCount'];
        }
        if (isset($map['OperationEndTime'])) {
            $model->operationEndTime = $map['OperationEndTime'];
        }
        if (isset($map['OperationStartTime'])) {
            $model->operationStartTime = $map['OperationStartTime'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['OwnerInformation'])) {
            $model->ownerInformation = $map['OwnerInformation'];
        }
        if (isset($map['PatchGroup'])) {
            $model->patchGroup = $map['PatchGroup'];
        }

        return $model;
    }
}
