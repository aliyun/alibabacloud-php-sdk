<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\DeleteStackInstancesRequest\deploymentTargets;
use AlibabaCloud\Tea\Model;

class DeleteStackInstancesRequest extends Model
{
    /**
     * @description The IDs of the accounts within the self-managed permission model is used to deploy stacks. You can specify up to 20 account IDs.
     *
     * @example ["151266687691****"]
     *
     * @var string[]
     */
    public $accountIds;

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
     * @var deploymentTargets
     */
    public $deploymentTargets;

    /**
     * @description The description of the operation that you want to perform to delete the stacks.
     *
     * The description must be 1 to 256 characters in length.
     * @example Delete stack instances in hangzhou and beijing
     *
     * @var string
     */
    public $operationDescription;

    /**
     * @description The settings that you configure to delete the stacks.
     *
     * The following parameters are included:
     *
     *   {"FailureToleranceCount": N}
     *
     * If you do not specify the FailureToleranceCount parameter, the default value 0 is used.
     *
     *   {"FailureTolerancePercentage": N}
     *
     * If you do not specify the FailureTolerancePercentage parameter, the default value 0 is used.
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
     *   You can specify only one of the FailureToleranceCount and FailureTolerancePercentage parameters.
     *
     * @example {"FailureToleranceCount": 1, "MaxConcurrentCount": 2}
     *
     * @var mixed[]
     */
    public $operationPreferences;

    /**
     * @description The ID of the region to which the stack group belongs. You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The IDs of the regions from which you want to delete the stacks. You can specify up to 20 region IDs.
     *
     * @example ["cn-hangzhou", "cn-beijing"]
     *
     * @var string[]
     */
    public $regionIds;

    /**
     * @description Specifies whether to retain the stacks.
     *
     * Valid values:
     *
     *   true: retains the stacks.
     *   false: deletes the stacks.
     *
     * @example false
     *
     * @var bool
     */
    public $retainStacks;

    /**
     * @description The name of the stack group. The name must be unique in a region.
     *
     * The name can be up to 255 characters in length, and can contain digits, letters, hyphens (-), and underscores (\_). The name must start with a digit or letter.
     * @example MyStackGroup
     *
     * @var string
     */
    public $stackGroupName;
    protected $_name = [
        'accountIds'           => 'AccountIds',
        'clientToken'          => 'ClientToken',
        'deploymentTargets'    => 'DeploymentTargets',
        'operationDescription' => 'OperationDescription',
        'operationPreferences' => 'OperationPreferences',
        'regionId'             => 'RegionId',
        'regionIds'            => 'RegionIds',
        'retainStacks'         => 'RetainStacks',
        'stackGroupName'       => 'StackGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountIds) {
            $res['AccountIds'] = $this->accountIds;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deploymentTargets) {
            $res['DeploymentTargets'] = null !== $this->deploymentTargets ? $this->deploymentTargets->toMap() : null;
        }
        if (null !== $this->operationDescription) {
            $res['OperationDescription'] = $this->operationDescription;
        }
        if (null !== $this->operationPreferences) {
            $res['OperationPreferences'] = $this->operationPreferences;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->regionIds) {
            $res['RegionIds'] = $this->regionIds;
        }
        if (null !== $this->retainStacks) {
            $res['RetainStacks'] = $this->retainStacks;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteStackInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = $map['AccountIds'];
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeploymentTargets'])) {
            $model->deploymentTargets = deploymentTargets::fromMap($map['DeploymentTargets']);
        }
        if (isset($map['OperationDescription'])) {
            $model->operationDescription = $map['OperationDescription'];
        }
        if (isset($map['OperationPreferences'])) {
            $model->operationPreferences = $map['OperationPreferences'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RegionIds'])) {
            if (!empty($map['RegionIds'])) {
                $model->regionIds = $map['RegionIds'];
            }
        }
        if (isset($map['RetainStacks'])) {
            $model->retainStacks = $map['RetainStacks'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }

        return $model;
    }
}
