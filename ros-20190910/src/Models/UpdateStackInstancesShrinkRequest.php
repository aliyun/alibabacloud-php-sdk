<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackInstancesShrinkRequest\parameterOverrides;
use AlibabaCloud\Tea\Model;

class UpdateStackInstancesShrinkRequest extends Model
{
    /**
     * @description The IDs of the accounts within which the self-managed permission model is used to deploy stacks. You can specify up to 20 account IDs.
     *
     * >  This parameter is required if you use the self-managed permission model to update the stacks.
     * @example ["151266687691****","141261387191****"]
     *
     * @var string
     */
    public $accountIdsShrink;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that the value is unique among different requests.
     *
     * For more information, see [Ensure idempotence](~~134212~~).
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The folders in which the service-managed permission model is used to deploy stacks.
     *
     * >  This parameter is required if you use the service-managed permission model to update the stacks.
     * @var string
     */
    public $deploymentTargetsShrink;

    /**
     * @description The description of the operation that you want to perform to update the stacks.
     *
     * The description must be 1 to 256 characters in length.
     * @example Update stack instances in hangzhou and beijing
     *
     * @var string
     */
    public $operationDescription;

    /**
     * @description The custom preferences on how Resource Orchestration Service (ROS) updates the stacks.
     *
     * The following parameters are included:
     *
     *   {"FailureToleranceCount": N}
     *
     * If you do not specify the FailureToleranceCount parameter, the default value 0 is used.
     *
     *   {"FailureTolerancePercentage": N}
     *
     * If you do not specify a value for the FailureTolerancePercentage parameter, the default value 0 is used.
     *
     *   {"MaxConcurrentCount": N}
     *
     * If you do not specify the MaxConcurrentCount parameter, the default value 1 is used.
     *
     *   {"MaxConcurrentPercentage": N}
     *
     * If you do not specify the MaxConcurrentPercentage parameter, the default value 1 is used.
     *
     *   {"RegionConcurrencyType": N}
     *
     * The mode that you want to use to deploy stacks across regions. Default value: SEQUENTIAL. Valid values:
     *
     *   SEQUENTIAL: deploys stacks in each specified region based on the specified sequence of regions. ROS deploys stacks in one region at a time.
     *   PARALLEL: deploys stacks in parallel in all specified regions.
     *
     * >
     *   You can specify only one of the MaxConcurrentCount and MaxConcurrentPercentage parameters.
     *   You can specify one of the FailureToleranceCount and FailureTolerancePercentage parameters.
     *
     * @example {"FailureToleranceCount": 1,"MaxConcurrentCount": 2}
     *
     * @var string
     */
    public $operationPreferencesShrink;

    /**
     * @description test
     *
     * @var parameterOverrides[]
     */
    public $parameterOverrides;

    /**
     * @description The ID of the region to which the stack group belongs. You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IDs of the regions in which you want to update the stacks. You can specify up to 20 region IDs.
     *
     * @example ["cn-hangzhou", "cn-beijing"]
     *
     * @var string
     */
    public $regionIdsShrink;

    /**
     * @description The name of the stack group. The name must be unique in a region.
     *
     * The name can be up to 255 characters in length, and can contain digits, letters, hyphens (-), and underscores (\_). The name must start with a digit or letter.
     * @example MyStackGroup
     *
     * @var string
     */
    public $stackGroupName;

    /**
     * @description The timeout period for the update operation on the stack.
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
        'deploymentTargetsShrink'    => 'DeploymentTargets',
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
        if (null !== $this->deploymentTargetsShrink) {
            $res['DeploymentTargets'] = $this->deploymentTargetsShrink;
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
     * @return UpdateStackInstancesShrinkRequest
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
        if (isset($map['DeploymentTargets'])) {
            $model->deploymentTargetsShrink = $map['DeploymentTargets'];
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
