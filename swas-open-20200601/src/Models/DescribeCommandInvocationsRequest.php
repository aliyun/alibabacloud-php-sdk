<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class DescribeCommandInvocationsRequest extends Model
{
    /**
     * @description The command ID. You can call the [DescribeCommands](https://help.aliyun.com/document_detail/64843.html) operation to query all available command IDs.
     *
     * @example c-sh02yh0932w****
     *
     * @var string
     */
    public $commandId;

    /**
     * @description The command name. If both CommandName and InstanceId are specified, CommandName does not take effect.
     *
     * @example testName
     *
     * @var string
     */
    public $commandName;

    /**
     * @description The command type. Valid values:
     *
     *   RunBatScript: batch command, applicable to Windows instances
     *   RunPowerShellScript: PowerShell command, applicable to Windows instances
     *   RunShellScript: shell command, applicable to Linux instances
     *
     * @example RunPowerShellScript
     *
     * @var string
     */
    public $commandType;

    /**
     * @description The ID of the simple application server.
     *
     * @example ace0706b2ac4454d984295a94213****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The overall execution state of the command. The value of this parameter depends on the execution status of the command on all the involved instances. Valid values:
     *
     *   Pending: The command is being verified or sent. When the execution state on at least one instance is Pending, the overall execution state is Pending.
     *
     *   Running: The command is being run on the instances. When the execution state on at least one instance is Running, the overall execution state is Running.
     *
     *   Success: When the execution state on at least one instance is Success and the execution state on other instances is Stopped or Success, the overall execution state is Success.
     *
     *   Command that is set to run immediately: The command execution is complete, and the exit code is 0.
     *
     *   Failed: When the execution state on all instances is Stopped or Failed, the overall execution state is Failed. When the execution state on an instance is one of the following values, Failed is returned as the overall execution state:
     *
     *   Invalid: The command is invalid.
     *   Aborted: The command fails to be sent.
     *   Failed: The command execution is complete, and the exit code is not 0.
     *   Timeout: The command execution times out.
     *   Error: An error occurs when the command is being run.
     *
     *   Stopping: The command task is being stopped. When the execution state on at least one instance is Stopping, the overall execution state is Stopping.
     *
     *   Stopped: The command task is stopped. When the execution state on all instances is Stopped, the overall execution state is Stopped. When the execution state on an instance is one of the following values, Stopped is returned as the overall execution state:
     *
     *   Cancelled: The command task is canceled.
     *   Terminated: The command task is terminated.
     *
     *   PartialFailed: The command execution succeeds on some instances and fails on other instances. When the execution state on some instances is Success and the execution state on other instances is Failed or Stopped, the overall execution state is PartialFailed.
     *
     * >  The value of the `InvokeStatus` response parameter is similar to the value of InvocationStatus. We recommend that you ignore InvokeStatus and check the value of InvocationStatus.
     * @example Success
     *
     * @var string
     */
    public $invocationStatus;

    /**
     * @description The execution ID of the command.
     *
     * @example t-hz02p9545t6****
     *
     * @var string
     */
    public $invokeId;

    /**
     * @description The page number. Pages start from 1. Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * Default value: 10.
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The region ID. You can call the [ListRegions](https://help.aliyun.com/document_detail/189315.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'commandId'        => 'CommandId',
        'commandName'      => 'CommandName',
        'commandType'      => 'CommandType',
        'instanceId'       => 'InstanceId',
        'invocationStatus' => 'InvocationStatus',
        'invokeId'         => 'InvokeId',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }
        if (null !== $this->commandName) {
            $res['CommandName'] = $this->commandName;
        }
        if (null !== $this->commandType) {
            $res['CommandType'] = $this->commandType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->invocationStatus) {
            $res['InvocationStatus'] = $this->invocationStatus;
        }
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCommandInvocationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }
        if (isset($map['CommandName'])) {
            $model->commandName = $map['CommandName'];
        }
        if (isset($map['CommandType'])) {
            $model->commandType = $map['CommandType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InvocationStatus'])) {
            $model->invocationStatus = $map['InvocationStatus'];
        }
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
