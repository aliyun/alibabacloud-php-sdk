<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetStackRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests.\
     * For more information, see [Ensure idempotence](~~134212~~).
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The option for returning logs. Valid values:
     *
     *   None: does not return logs.
     *   Stack (default): returns the logs of the stack.
     *   Resource: returns the logs of resources in the stack.
     *   All: returns all logs.
     *
     * @example Stack
     *
     * @var string
     */
    public $logOption;

    /**
     * @description Specifies whether to return Outputs. Valid values:
     *
     *   Enabled (default)
     *   Disabled
     *
     * >  The Outputs parameter requires a long period of time to calculate. If you do not require Outputs of the stack, we recommend that you set OutputOption to Disabled to improve the response speed of the GetStack operation.
     * @example Disabled
     *
     * @var string
     */
    public $outputOption;

    /**
     * @description The region ID of the stack. You can call the [DescribeRegions](~~131035~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to return information about ResourceProgress. Valid values:
     *
     *   Disabled (default): does not return information about ResourceProgress.
     *   PercentageOnly: returns StackOperationProgress and StackActionProgress of ResourceProgress.
     *
     * >  ROS and Terraform stacks are supported. Creation, resumed creation, update, deletion, import, and rollback operations on stacks are supported.
     *
     *   EnabledIfCreateStack (not recommend): returns \*Count and InProgressResourceDetails of ResourceProgress only during a stack creation operation.
     *
     * >  During a creation operation, a stack is in one of the following states: CREATE_IN_PROGRESS, CREATE_COMPLETE, CREATE_FAILED, CREATE_ROLLBACK_IN_PROGRESS, CREATE_ROLLBACK_COMPLETE, and CREATE_ROLLBACK_FAILED.
     * @example Disabled
     *
     * @var string
     */
    public $showResourceProgress;

    /**
     * @description The stack ID.
     *
     * @example c754d2a4-28f1-46df-b557-9586173a****
     *
     * @var string
     */
    public $stackId;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'logOption'            => 'LogOption',
        'outputOption'         => 'OutputOption',
        'regionId'             => 'RegionId',
        'showResourceProgress' => 'ShowResourceProgress',
        'stackId'              => 'StackId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->logOption) {
            $res['LogOption'] = $this->logOption;
        }
        if (null !== $this->outputOption) {
            $res['OutputOption'] = $this->outputOption;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->showResourceProgress) {
            $res['ShowResourceProgress'] = $this->showResourceProgress;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['LogOption'])) {
            $model->logOption = $map['LogOption'];
        }
        if (isset($map['OutputOption'])) {
            $model->outputOption = $map['OutputOption'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ShowResourceProgress'])) {
            $model->showResourceProgress = $map['ShowResourceProgress'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }

        return $model;
    }
}
