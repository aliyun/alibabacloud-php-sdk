<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class RollbackApplicationRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * This parameter is required.
     * @example 017f39b8-dfa4-4e16-a84b-1dcee4b1****
     *
     * @var string
     */
    public $appId;

    /**
     * @description Specifies whether to automatically enable an auto scaling policy for the application. Take note of the following rules:
     *
     *   **true**: turns on Logon-free Sharing
     *   **false**: turns off Logon-free Sharing
     *
     * @example true
     *
     * @var string
     */
    public $autoEnableApplicationScalingRule;

    /**
     * @description The wait time between batches. Unit: seconds.
     *
     * @example 10
     *
     * @var int
     */
    public $batchWaitTime;

    /**
     * @description The percentage of the minimum number of available instances. Take note of the following rules:
     *
     *   If you set the value to **-1**, the minimum number of available instances is not determined based on this parameter. Default value: -1.
     *   If you set the value to a number **from 0 to 100**, the minimum number of available instances is calculated by using the following formula: Current number of instances × (Value of MinReadyInstanceRatio × 100%). The value is the nearest integer rounded up from the calculated result. For example, if the percentage is set to **50**% and five instances are available, the minimum number of available instances is 3.
     *
     * > When both **MinReadyInstance** and **MinReadyInstanceRatio** are specified and **MinReadyInstanceRatio** is set to a number from 0 to 100, the value of **MinReadyInstanceRatio** takes precedence.** For example, if **MinReadyInstances** is set to **5, and **MinReadyInstanceRatio** is set to **50**, the minimum number of available instances is set to the nearest integer rounded up from the calculated result of the following formula: Current number of instances × **50%**.
     * @example -1
     *
     * @var int
     */
    public $minReadyInstanceRatio;

    /**
     * @description The minimum number of available instances. Take note of the following rules:
     *
     *   If you set the value to **0**, business interruptions occur when the application is updated.
     *   If you set the value to \\*\\*-1\\*\\*, the minimum number of available instances is automatically set to a system-recommended value. The value is the nearest integer to which the calculated result of the following formula is rounded up: Current number of instances × 25%. For example, if five instances are available, the minimum number of available instances is calculated by using the following formula: 5 × 25% = 1.25. In this case, the minimum number of available instances is 2.
     *
     * > Make sure that at least one instance is available during application deployment and rollback to prevent business interruptions.
     * @example 1
     *
     * @var int
     */
    public $minReadyInstances;

    /**
     * @description The deployment policy. If the minimum number of available instances is 1, the value of the **UpdateStrategy** parameter is an empty string (""). If the minimum number of available instances is larger than 1, specify this parameter based on your requirements. Examples:
     *
     *   Perform canary release for one instance and release the remaining instances in two batches automatically with a one-minute interval between the deployment of each instance:
     *
     * `{"type":"GrayBatchUpdate","batchUpdate":{"batch":2,"releaseType":"auto","batchWaitTime":1},"grayUpdate":{"gray":1}}`
     *
     *   Perform canary release for one instance and release the remaining instances in two batches manually:
     *
     * `{"type":"GrayBatchUpdate","batchUpdate":{"batch":2,"releaseType":"manual"},"grayUpdate":{"gray":1}}`
     *
     *   Release the instances in two batches automatically with no interval between the deployment of each instance:
     *
     * The following table describes the parameters that are used in the preceding statements.
     *
     *   **type**: the type of the release policy. Valid values: **GrayBatchUpdate** and **BatchUpdate**.
     *
     *   **batchUpdate**: the phased release policy.
     *
     *   **batch**: the number of release batches.
     *   **releaseType**: the processing method for the batches. Valid values: **auto** and **manual**.
     *   **batchWaitTime**: the interval between release batches. Unit: seconds.
     *
     *   **grayUpdate**: the number of release batches in the phased release after a canary release. This parameter is returned only if the **type** parameter is set to **GrayBatchUpdate**.
     *
     * @example {"type":"GrayBatchUpdate","batchUpdate":{"batch":2,"releaseType":"auto","batchWaitTime":1},"grayUpdate":{"gray":1}}
     *
     * @var string
     */
    public $updateStrategy;

    /**
     * @description The ID of the application version. Call the [ListAppVersions](https://help.aliyun.com/document_detail/162054.html) operation to obtain the version ID.
     *
     * This parameter is required.
     * @example 0026ff7f-2b57-4127-bdd0-9bf202bb9****
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'appId'                            => 'AppId',
        'autoEnableApplicationScalingRule' => 'AutoEnableApplicationScalingRule',
        'batchWaitTime'                    => 'BatchWaitTime',
        'minReadyInstanceRatio'            => 'MinReadyInstanceRatio',
        'minReadyInstances'                => 'MinReadyInstances',
        'updateStrategy'                   => 'UpdateStrategy',
        'versionId'                        => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->autoEnableApplicationScalingRule) {
            $res['AutoEnableApplicationScalingRule'] = $this->autoEnableApplicationScalingRule;
        }
        if (null !== $this->batchWaitTime) {
            $res['BatchWaitTime'] = $this->batchWaitTime;
        }
        if (null !== $this->minReadyInstanceRatio) {
            $res['MinReadyInstanceRatio'] = $this->minReadyInstanceRatio;
        }
        if (null !== $this->minReadyInstances) {
            $res['MinReadyInstances'] = $this->minReadyInstances;
        }
        if (null !== $this->updateStrategy) {
            $res['UpdateStrategy'] = $this->updateStrategy;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RollbackApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AutoEnableApplicationScalingRule'])) {
            $model->autoEnableApplicationScalingRule = $map['AutoEnableApplicationScalingRule'];
        }
        if (isset($map['BatchWaitTime'])) {
            $model->batchWaitTime = $map['BatchWaitTime'];
        }
        if (isset($map['MinReadyInstanceRatio'])) {
            $model->minReadyInstanceRatio = $map['MinReadyInstanceRatio'];
        }
        if (isset($map['MinReadyInstances'])) {
            $model->minReadyInstances = $map['MinReadyInstances'];
        }
        if (isset($map['UpdateStrategy'])) {
            $model->updateStrategy = $map['UpdateStrategy'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
