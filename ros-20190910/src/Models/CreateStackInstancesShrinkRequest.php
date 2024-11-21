<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\CreateStackInstancesShrinkRequest\parameterOverrides;
use AlibabaCloud\Tea\Model;

class CreateStackInstancesShrinkRequest extends Model
{
    /**
     * @description The IDs of the execution accounts within which you want to deploy stacks in self-managed mode. You can specify up to 20 execution account IDs.
     *
     * > You must specify one of the following parameters: `AccountIds` and `DeploymentTargets`.
     * @example ["151266687691****","141261387191****"]
     *
     * @var string
     */
    public $accountIdsShrink;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests.\\
     * For more information, see [How to ensure idempotence](https://help.aliyun.com/document_detail/134212.html).
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string[]
     */
    public $deploymentOptions;

    /**
     * @description The folders in which ROS deploy stacks in service-managed permission model.
     *
     * > You must specify one of the following parameters: `AccountIds` and `DeploymentTargets`.
     * @example {"RdFolderId": "fd-4PvlVLOL8v"}
     *
     * @var string
     */
    public $deploymentTargetsShrink;

    /**
     * @description Specifies whether to disable rollback when the stack fails to be created.
     *
     * Valid values:
     *
     *   true
     *   false (default)
     *
     * @example false
     *
     * @var bool
     */
    public $disableRollback;

    /**
     * @description The description of the stack creation operation.
     *
     * The description must be 1 to 256 characters in length.
     * @example Create stack instances in hangzhou and beijing
     *
     * @var string
     */
    public $operationDescription;

    /**
     * @description The preference settings of the stack creation operation.
     *
     * >-  You can specify only one of the following parameters: FailureToleranceCount and FailureTolerancePercentage.
     * @example {"FailureToleranceCount": 1, "MaxConcurrentCount": 2}
     *
     * @var string
     */
    public $operationPreferencesShrink;

    /**
     * @description The parameters that are used to override specific parameters.
     *
     * @var parameterOverrides[]
     */
    public $parameterOverrides;

    /**
     * @description The region ID of the stack group. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/131035.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IDs of the regions where you want to create the stacks. You can specify up to 20 region IDs.
     *
     * This parameter is required.
     * @example ["cn-hangzhou", "cn-beijing"]
     *
     * @var string
     */
    public $regionIdsShrink;

    /**
     * @description The name of the stack group. The name must be unique within a region.\\
     * This parameter is required.
     * @example MyStackGroup
     *
     * @var string
     */
    public $stackGroupName;

    /**
     * @description The timeout period within which you can create the stack.
     *
     *   Default value: 60.
     *   Unit: minutes.
     *
     * @example 10
     *
     * @var int
     */
    public $timeoutInMinutes;
    protected $_name = [
        'accountIdsShrink'           => 'AccountIds',
        'clientToken'                => 'ClientToken',
        'deploymentOptions'          => 'DeploymentOptions',
        'deploymentTargetsShrink'    => 'DeploymentTargets',
        'disableRollback'            => 'DisableRollback',
        'operationDescription'       => 'OperationDescription',
        'operationPreferencesShrink' => 'OperationPreferences',
        'parameterOverrides'         => 'ParameterOverrides',
        'regionId'                   => 'RegionId',
        'regionIdsShrink'            => 'RegionIds',
        'stackGroupName'             => 'StackGroupName',
        'timeoutInMinutes'           => 'TimeoutInMinutes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountIdsShrink) {
            $res['AccountIds'] = $this->accountIdsShrink;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deploymentOptions) {
            $res['DeploymentOptions'] = $this->deploymentOptions;
        }
        if (null !== $this->deploymentTargetsShrink) {
            $res['DeploymentTargets'] = $this->deploymentTargetsShrink;
        }
        if (null !== $this->disableRollback) {
            $res['DisableRollback'] = $this->disableRollback;
        }
        if (null !== $this->operationDescription) {
            $res['OperationDescription'] = $this->operationDescription;
        }
        if (null !== $this->operationPreferencesShrink) {
            $res['OperationPreferences'] = $this->operationPreferencesShrink;
        }
        if (null !== $this->parameterOverrides) {
            $res['ParameterOverrides'] = [];
            if (null !== $this->parameterOverrides && \is_array($this->parameterOverrides)) {
                $n = 0;
                foreach ($this->parameterOverrides as $item) {
                    $res['ParameterOverrides'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->regionIdsShrink) {
            $res['RegionIds'] = $this->regionIdsShrink;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }
        if (null !== $this->timeoutInMinutes) {
            $res['TimeoutInMinutes'] = $this->timeoutInMinutes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStackInstancesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountIds'])) {
            $model->accountIdsShrink = $map['AccountIds'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeploymentOptions'])) {
            if (!empty($map['DeploymentOptions'])) {
                $model->deploymentOptions = $map['DeploymentOptions'];
            }
        }
        if (isset($map['DeploymentTargets'])) {
            $model->deploymentTargetsShrink = $map['DeploymentTargets'];
        }
        if (isset($map['DisableRollback'])) {
            $model->disableRollback = $map['DisableRollback'];
        }
        if (isset($map['OperationDescription'])) {
            $model->operationDescription = $map['OperationDescription'];
        }
        if (isset($map['OperationPreferences'])) {
            $model->operationPreferencesShrink = $map['OperationPreferences'];
        }
        if (isset($map['ParameterOverrides'])) {
            if (!empty($map['ParameterOverrides'])) {
                $model->parameterOverrides = [];
                $n                         = 0;
                foreach ($map['ParameterOverrides'] as $item) {
                    $model->parameterOverrides[$n++] = null !== $item ? parameterOverrides::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionIds'])) {
            $model->regionIdsShrink = $map['RegionIds'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['TimeoutInMinutes'])) {
            $model->timeoutInMinutes = $map['TimeoutInMinutes'];
        }

        return $model;
    }
}
