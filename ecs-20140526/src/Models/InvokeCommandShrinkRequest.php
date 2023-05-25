<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\InvokeCommandShrinkRequest\tag;
use AlibabaCloud\Tea\Model;

class InvokeCommandShrinkRequest extends Model
{
    /**
     * @description 保证请求幂等性。从您的客户端生成一个参数值，确保不同请求间该参数值唯一。ClientToken只支持ASCII字符，且不能超过64个字符。更多详情，请参见[如何保证幂等性](~~25693~~)。
     *
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The command ID. You can call the [DescribeCommands](~~64843~~) operation to query all available command IDs.
     *
     * > Common Cloud Assistant commands can be run based on their names. For more information, see [View and run common Cloud Assistant commands](~~429635~~).
     * @example c-e996287206324975b5fbe1d****
     *
     * @var string
     */
    public $commandId;

    /**
     * @description The container ID. Only 64-bit hexadecimal strings are supported. Container IDs that are prefixed with `docker://`, `containerd://`, or `cri-o://` are allowed to specify container runtimes.
     *
     * Take note of the following items:
     *
     *   If this parameter is configured, Cloud Assistant runs scripts in the specified container of the instance.
     *
     *   If this parameter is configured, scripts can be run only on Linux instances on which Cloud Assistant clients whose versions are not earlier than 2.2.3.344 are installed.
     *
     *   For information about how to view the version of the Cloud Assistant client, see [Install the Cloud Assistant client](~~64921~~).
     *   For information about how to upgrade the version of the Cloud Assistant client, see [Upgrade or disable upgrades for the Cloud Assistant client](~~134383~~).
     *
     *   If this parameter is configured, the `Username` parameter configured in a request to this operation and the `WorkingDir` parameter configured in a request to the [CreateCommand](~~64844~~) operation do not take effect. You can run the command in the default working directory of the container by using only the default user of the container. For more information, see [Use Cloud Assistant to run commands in containers](~~456641~~).
     *
     *   If this parameter is configured, only shell scripts can be run in Linux containers. You cannot add a command in the format similar to `#!/usr/bin/python` at the beginning of a script to specify a script interpreter. For more information, see [Use Cloud Assistant to run commands in containers](~~456641~~).
     *
     * @example ab141ddfbacfe02d9dbc25966ed971536124527097398d419a6746873fea****
     *
     * @var string
     */
    public $containerId;

    /**
     * @description The name of the container.
     *
     * Take note of the following items:
     *
     *   If this parameter is configured, Cloud Assistant runs scripts in the specified container of the instance.
     *
     *   If this parameter is configured, scripts can be run only on Linux instances on which Cloud Assistant clients whose versions are not earlier than 2.2.3.344 are installed.
     *
     *   For information about how to view the version of the Cloud Assistant client, see [Install the Cloud Assistant client](~~64921~~).
     *   For information about how to upgrade the version of the Cloud Assistant client, see [Upgrade or disable upgrades for the Cloud Assistant client](~~134383~~).
     *
     *   If this parameter is configured, the `Username` parameter configured in a request to this operation and the `WorkingDir` parameter configured in a request to the [CreateCommand](~~64844~~) operation do not take effect. You can run the command in the default working directory of the container by using only the default user of the container. For more information, see [Use Cloud Assistant to run commands in containers](~~456641~~).
     *
     *   If this parameter is configured, only shell scripts can be run in Linux containers. You cannot add a command in the format similar to `#!/usr/bin/python` at the beginning of a script to specify a script interpreter. For more information, see [Use Cloud Assistant to run commands in containers](~~456641~~).
     *
     * @example test-container
     *
     * @var string
     */
    public $containerName;

    /**
     * @description The schedule based on which you want to run the command. This parameter is required if you set `Timed` to `true`. You can configure a command to run at a fixed interval based on a rate expression, run only once at a specified point in time, or run at designated points in time based on a cron expression.
     *
     *   To run a command at a fixed interval, use a rate expression to specify the interval. You can specify the interval in seconds, minutes, hours, or days. This option is applicable when tasks need to be executed at a fixed interval. Specify the interval in the following format: `rate(<Running interval value><Running interval unit>)`. For example, specify `rate(5m)` to run the command every 5 minutes. Take note of the following limits when you specify an interval:
     *
     *   The specified interval can range from 60 seconds to 7 days and must be longer than the timeout period of the scheduled task.
     *   The interval is the duration between two consecutive executions. The interval is irrelevant to the amount of time required to run the command once. For example, if you set the interval to 5 minutes and 2 minutes are required to run the command each time. Each time the command is run, the system waits 3 minutes before it runs the command again.
     *   A task is not run immediately after it is created. For example, if you set the interval to 5 minutes and create a task to run the command. The task begins to run 5 minutes after it is created.
     *
     *   To run a command only once at a specified point in time, specify a point in time and a time zone. Specify the point in time in the following format: `at(yyyy-MM-dd HH:mm:ss <Time zone>)`, which indicates `at(Year-Month-Day Hour:Minute:Second <Time zone>)`. If you do not specify a time zone, the UTC time zone is used by default. You can specify the time zone in the following forms:
     *
     *   The time zone name. Examples: `Asia/Shanghai` and `America/Los_Angeles`.
     *   The time offset from GMT. Examples: `GMT+8:00` (UTC+8) and `GMT-7:00` (UTC-7). If you use the GMT format, do not pad leading zeros to the hour value.
     *   The time zone abbreviation. Only UTC is supported.
     *
     * For example, to configure a command to run only once at 13:15:30 on June 06, 2022 (Shanghai time), set the time to `at(2022-06-06 13:15:30 Asia/Shanghai)`. To configure a command to run only once at 13:15:30 on June 06, 2022 (UTC-7), set the time to `at(2022-06-06 13:15:30 GMT-7:00)`.
     *
     *   To run a command at designated points in time, specify a cron expression. Specify the time in the following format: `<Cron expression> <Time zone>`, where the cron expression is in the format of `<seconds> <minutes> <hours> <day of the month> <month> <day of the week> <year (optional)>`. The system calculates the execution times of the command based on the specified cron expression and time zone and runs the command as scheduled. If you do not specify a time zone, the system time zone of the instance on which to run the command is used by default. For more information about cron expressions, see [Cron expressions](~~64769~~). You can specify the time zone in the following forms:
     *
     *   The time zone name. Examples: `Asia/Shanghai` and `America/Los_Angeles`.
     *   The time offset from GMT. Examples: `GMT+8:00` (UTC+8) and `GMT-7:00` (UTC-7). If you use the GMT format, do not pad leading zeros to the hour value.
     *   The time zone abbreviation. Only UTC is supported.
     *
     * For example, to configure a command to run at 10:15:00 every day in 2022 (Shanghai time), set the time to `0 15 10 ? * * 2022 Asia/Shanghai`. To configure a command to run every half an hour from 10:00:00 to 11:30:00 every day in 2022 (UTC+8), set the time to `0 0/30 10-11 * * ? 2022 GMT +8:00`. To configure a command to run every 5 minutes from 14:00:00 to 14:55:00 every October every two years since 2022 (UTC), set the time to `0 0/5 14 * 10 ? 2022/2 UTC`.
     *
     **
     *
     **Note**The minimum interval must be 10 seconds or more and cannot be shorter than the timeout period of scheduled executions.
     *
     * @example 0 *\/20 * * * ?
     *
     * @var string
     */
    public $frequency;

    /**
     * @description The IDs of the instances on which you want to run the command. You can specify a maximum of 50 instance IDs in each request. Valid values of N: 1 to 50.
     *
     * @example i-bp185dy2o3o6n****
     *
     * @var string[]
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The key-value pairs of custom parameters to pass in when the custom parameter feature is enabled. Supported number of custom parameters: 0 to 10.
     *
     *   Each key in a Map collection cannot be an empty string and can be a maximum of 64 characters in length.
     *   Values in a Map collection can be empty strings.
     *   The size of the command (including custom parameters and original command content) after Base64 encoding cannot exceed 18 KB.
     *   The custom parameter names specified in the value of Parameters must be included in the custom parameters specified when you created the command. You can use empty strings to represent the parameters that are not specified.
     *
     * You can leave this parameter empty to disable the custom parameter feature.
     * @example {"name":"Jack", "accessKey":"LTAIdyv******aRY"}
     *
     * @var string
     */
    public $parametersShrink;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The mode in which you want to run the command. Valid values:
     *
     *   Once: Immediately runs the command.
     *   Period: Runs the command on a schedule. If you set this parameter to `Period`, you must set `Timed` to true and configure `Frequency`.
     *   NextRebootOnly: Automatically runs the command the next time the instance starts.
     *   EveryReboot: Automatically runs the command every time the instance starts.
     *
     * Default value:
     *
     *   When `Timed` is set to false and `Frequency` is not configured, the default value of RepeatMode is `Once`.
     *   When `Timed` is set to true and `Frequency` is configured, `Period` is used as the value of RepeatMode regardless of whether RepeatMode is configured.
     *
     * Take note of the following items:
     *
     *   When this parameter is set to `Period`, `NextRebootOnly`, or `EveryReboot`, you can call the [StopInvocation](~~64838~~) operation to stop the pending or scheduled executions of the command.
     *   When this parameter is set to `Period` or `EveryReboot`, you can call the [DescribeInvocationResults](~~64845~~) operation and set `IncludeHistory` to true to view the results of historical scheduled executions.
     *
     * @example Once
     *
     * @var string
     */
    public $repeatMode;

    /**
     * @description The ID of the resource group on which you want to run the command. When you configure this parameter, take note of the following items:
     *
     *   The instances that are specified by the InstanceId parameter must belong to this resource group.
     *   After the command is run, you can call the [DescribeInvocations](~~64840~~) or [DescribeInvocationResults](~~64845~~) operation with ResourceGroupId configured to query the running results of the command.
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
     * @description The tags to add to the command.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description Specifies whether to run the command on a schedule. Valid values:
     *
     *   true: Runs the command on the schedule specified by `Frequency`. The results of each execution of a command do not affect the next execution of the command.
     *   false: Runs the command only once.
     *
     * Default value: false.
     * @example true
     *
     * @var bool
     */
    public $timed;

    /**
     * @description The timeout period for the command running. Unit: seconds.
     *
     *   The timeout period cannot be less than 10 seconds.
     *   A timeout error occurs when a command cannot be run because the process slows down or because a specific module or the Cloud Assistant client does not exist. When an execution times out, the command process is forcefully terminated.
     *   If this parameter is not configured, the timeout period specified when the command is created is used.
     *   The value of this parameter is used only as the timeout period for command execution. The timeout period of the command is not changed.
     *
     * @example 60
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The username to use to run the command on ECS instances.
     *
     *   For Linux instances, the root user is used.
     *   For Windows instances, the System user is used.
     *
     * You can also specify other usernames that already exist in the ECS instance to run the command. For security purposes, we recommend that you run Cloud Assistant commands as a regular user. For more information, see [Configure a regular user to run Cloud Assistant commands](~~203771~~).
     * @example root
     *
     * @var string
     */
    public $username;

    /**
     * @description The name of the password to use to run the command on a Windows instance.
     *
     * > When you use the root username for Linux instances or the System username for Windows instances to run the command, you do not need to configure the WindowsPasswordName parameter.
     * @example axtSecretPassword
     *
     * @var string
     */
    public $windowsPasswordName;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'commandId'            => 'CommandId',
        'containerId'          => 'ContainerId',
        'containerName'        => 'ContainerName',
        'frequency'            => 'Frequency',
        'instanceId'           => 'InstanceId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'parametersShrink'     => 'Parameters',
        'regionId'             => 'RegionId',
        'repeatMode'           => 'RepeatMode',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'tag'                  => 'Tag',
        'timed'                => 'Timed',
        'timeout'              => 'Timeout',
        'username'             => 'Username',
        'windowsPasswordName'  => 'WindowsPasswordName',
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
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }
        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
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
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->windowsPasswordName) {
            $res['WindowsPasswordName'] = $this->windowsPasswordName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvokeCommandShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }
        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }
        if (isset($map['InstanceId'])) {
            if (!empty($map['InstanceId'])) {
                $model->instanceId = $map['InstanceId'];
            }
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Parameters'])) {
            $model->parametersShrink = $map['Parameters'];
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
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['WindowsPasswordName'])) {
            $model->windowsPasswordName = $map['WindowsPasswordName'];
        }

        return $model;
    }
}
