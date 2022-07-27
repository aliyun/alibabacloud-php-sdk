<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListInstancePatchStatesResponseBody;

use AlibabaCloud\Tea\Model;

class instancePatchStates extends Model
{
    /**
     * @var string
     */
    public $baselineId;

    /**
     * @var string
     */
    public $failedCount;

    /**
     * @var string
     */
    public $installedCount;

    /**
     * @var string
     */
    public $installedOtherCount;

    /**
     * @var string
     */
    public $installedPendingRebootCount;

    /**
     * @var string
     */
    public $installedRejectedCount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $missingCount;

    /**
     * @var string
     */
    public $operationEndTime;

    /**
     * @var string
     */
    public $operationStartTime;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $ownerInformation;

    /**
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
