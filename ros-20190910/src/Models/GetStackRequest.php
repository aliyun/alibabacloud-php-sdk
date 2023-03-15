<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetStackRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that it is unique among different requests.
     *
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
     *   Stack: returns the logs of the stack. This is the default value.
     *   Resource: returns the logs of resources in the stack.
     *   All: returns the logs of all resources.
     *
     * @example Stack
     *
     * @var string
     */
    public $logOption;

    /**
     * @description Specifies whether to return the output parameters of the stack. Valid values:
     *
     *   Enabled: returns the output parameters. This is the default value.
     *
     *   Disabled: does not return the output parameters.
     *
     * > The system takes a long period of time to calculate output parameters. If you do not want to query the output parameters, we recommend that you set the OutputOption parameter to Disabled to improve the response speed of the GetStack operation.
     * @example Disabled
     *
     * @var string
     */
    public $outputOption;

    /**
     * @description The ID of the region in which the stack resides. You can call the [DescribeRegions](~~131035~~) operation to query the most recent list of Alibaba Cloud regions.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to return the ResourceProgress parameter. Valid values:
     *
     *   Disabled: does not return the ResourceProgress parameter. This is the default value.
     *
     *   EnabledIfCreateStack: returns the ResourceProgress parameter only if a stack is created.
     *
     * > A stack is in one of the following states when it is created: CREATE_IN_PROGRESS, CREATE_COMPLETE, CREATE_FAILED, CREATE_ROLLBACK_IN_PROGRESS, CREATE_ROLLBACK_COMPLETE, or CREATE_ROLLBACK_FAILED.
     * @example Disabled
     *
     * @var string
     */
    public $showResourceProgress;

    /**
     * @description The ID of the stack.
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
