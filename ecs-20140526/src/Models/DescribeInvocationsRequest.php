<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeInvocationsRequest extends Model
{
    /**
     * @description The command ID. You can call the [DescribeCommands](https://help.aliyun.com/document_detail/64843.html) operation to query all available command IDs.
     *
     * @example c-hz0jdfwcsr****
     *
     * @var string
     */
    public $commandId;

    /**
     * @description The command name. If you specify both this parameter and `InstanceId`, this parameter does not take effect.
     *
     * @example CommandTestName
     *
     * @var string
     */
    public $commandName;

    /**
     * @description The command type. Valid values:
     *
     *   RunBatScript: batch command, applicable to Windows instances.
     *   RunPowerShellScript: PowerShell command, applicable to Windows instances.
     *   RunShellScript: shell command, applicable to Linux instances.
     *
     * @example RunShellScript
     *
     * @var string
     */
    public $commandType;

    /**
     * @description The encoding mode of the `CommandContent` and `Output` response parameters. Valid values:
     *
     *   PlainText: returns the original command content and command outputs.
     *   Base64: returns the Base64-encoded command content and command outputs.
     *
     * Default value: Base64.
     * @example PlainText
     *
     * @var string
     */
    public $contentEncoding;

    /**
     * @description Specifies whether to return the command outputs in the response.
     *
     *   true: The command outputs are returned. When this parameter is set to true, you must specify `InvokeId`, `InstanceId`, or both.
     *   false: The command outputs are not returned.
     *
     * Default value: false
     * @example false
     *
     * @var bool
     */
    public $includeOutput;

    /**
     * @description The ID of instance N. When you specify this parameter, the system queries all the execution records of all the commands that run on the instance.
     *
     * @example i-bp1i7gg30r52z2em****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The command task ID.
     *
     * @example t-hz0jdfwd9f****
     *
     * @var string
     */
    public $invokeId;

    /**
     * @description The overall execution status of the command task. The value of this parameter depends on the execution states of the command task on all involved instances. Valid values:
     *
     *   Running:
     *
     *   Scheduled task: Before you stop the scheduled execution of the command, the overall execution state is always Running.
     *   One-time task: If the command is being run on instances, the overall execution state is Running.
     *
     *   Finished:
     *
     *   Scheduled task: The overall execution state can never be Finished.
     *   One-time task: The execution is complete on all instances, or the execution is stopped on some instances and is complete on the other instances.
     *
     *   Success: If the execution state on at least one instance is Success and the execution state on the other instances is Stopped or Success, the overall execution state is Success.
     *
     *   One-time task: The execution is complete, and the exit code is 0.
     *   Scheduled task: The last execution is complete, the exit code is 0, and the specified period ends.
     *
     *   Failed:
     *
     *   Scheduled task: The overall execution state can never be Failed.
     *   One-time task: The execution failed on all instances.
     *
     *   Stopped: The task is stopped.
     *
     *   Stopping: The task is being stopped.
     *
     *   PartialFailed: The task fails on some instances. If you specify both this parameter and `InstanceId`, this parameter does not take effect.
     *
     *   Pending: The command is being verified or sent. If the execution state on at least one instance is Pending, the overall execution state is Pending.
     *
     *   Scheduled: The command that is set to run on a schedule is sent and waiting to be run. If the execution state on at least one instance is Scheduled, the overall execution state is Scheduled.
     *
     * @example Finished
     *
     * @var string
     */
    public $invokeStatus;

    /**
     * @description The maximum number of entries per page.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example AAAAAdDWBF2
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description >  This parameter will be removed in the future. We recommend that you use NextToken and MaxResults for a paged query.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description >  This parameter will be removed in the future. We recommend that you use NextToken and MaxResults for a paged query.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent list of regions.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The execution mode of the command. If you specify both this parameter and `InstanceId`, this parameter does not take effect. Valid values:
     *
     *   Once: The command is immediately run.
     *   Period: The command is run on a schedule.
     *   NextRebootOnly: The command is run the next time the instances start.
     *   EveryReboot: The command is run every time the instances start.
     *
     * This parameter is empty by default, which indicates that commands run in all modes are queried.
     * @example Once
     *
     * @var string
     */
    public $repeatMode;

    /**
     * @description The ID of the resource group. After you set this parameter, command execution results in the specified resource group are queried.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The tags that are added to the command.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description Specifies whether the command is to be automatically run. Valid values:
     *
     *   true: The command is run by calling the `RunCommand` or `InvokeCommand` operation with `RepeatMode` set to `Period`, `NextRebootOnly`, or `EveryReboot`.
     *
     *   false: The command meets one of the following requirements:
     *
     *   The command is run by calling the `RunCommand` or `InvokeCommand` operation with `RepeatMode` set to `Once`.
     *   The command task is canceled, stopped, or completed.
     *
     * Default value: false.
     * @example true
     *
     * @var bool
     */
    public $timed;
    protected $_name = [
        'commandId'            => 'CommandId',
        'commandName'          => 'CommandName',
        'commandType'          => 'CommandType',
        'contentEncoding'      => 'ContentEncoding',
        'includeOutput'        => 'IncludeOutput',
        'instanceId'           => 'InstanceId',
        'invokeId'             => 'InvokeId',
        'invokeStatus'         => 'InvokeStatus',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'repeatMode'           => 'RepeatMode',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'tag'                  => 'Tag',
        'timed'                => 'Timed',
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
        if (null !== $this->contentEncoding) {
            $res['ContentEncoding'] = $this->contentEncoding;
        }
        if (null !== $this->includeOutput) {
            $res['IncludeOutput'] = $this->includeOutput;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->invokeId) {
            $res['InvokeId'] = $this->invokeId;
        }
        if (null !== $this->invokeStatus) {
            $res['InvokeStatus'] = $this->invokeStatus;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->repeatMode) {
            $res['RepeatMode'] = $this->repeatMode;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timed) {
            $res['Timed'] = $this->timed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInvocationsRequest
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
        if (isset($map['ContentEncoding'])) {
            $model->contentEncoding = $map['ContentEncoding'];
        }
        if (isset($map['IncludeOutput'])) {
            $model->includeOutput = $map['IncludeOutput'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InvokeId'])) {
            $model->invokeId = $map['InvokeId'];
        }
        if (isset($map['InvokeStatus'])) {
            $model->invokeStatus = $map['InvokeStatus'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['RepeatMode'])) {
            $model->repeatMode = $map['RepeatMode'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Timed'])) {
            $model->timed = $map['Timed'];
        }

        return $model;
    }
}
