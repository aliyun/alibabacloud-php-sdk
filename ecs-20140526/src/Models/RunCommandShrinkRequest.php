<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\RunCommandShrinkRequest\resourceTag;
use AlibabaCloud\SDK\Ecs\V20140526\Models\RunCommandShrinkRequest\tag;
use AlibabaCloud\Tea\Model;

class RunCommandShrinkRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The **token** can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotence](https://help.aliyun.com/document_detail/25693.html).
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The content of the command. The command content can be plaintext or Base64-encoded. Take note of the following items:
     *
     *   If you want to retain the command, make sure that the Base64-encoded command content does not exceed 18 KB in size. If you do not want to retain the command, make sure that the Base64-encoded command content does not exceed 24 KB in size. You can set the `KeepCommand` parameter to specify whether to retain the command.
     *
     *   If the command content is encoded in Base6, set `ContentEncoding` to Base64.
     *
     *   If you set the `EnableParameter` parameter to true, the custom parameter feature is enabled and you can configure custom parameters based on the following rules:
     *
     *   Specify custom parameters in the `{{}}` format. Within `{{}}`, the spaces and line feeds before and after the parameter names are ignored.
     *   You can specify up to 20 custom parameters.
     *   A custom parameter name can contain only letters, digits, underscores (_), and hyphens (-). The name is case-insensitive. The ACS:: prefix cannot be used to specify non-built-in environment parameters.
     *   Each custom parameter name cannot exceed 64 bytes in length.
     *
     *   You can specify built-in environment parameters as custom parameters. Then, when you run a command, the parameters are automatically specified by Cloud Assistant. You can specify the following built-in environment parameters:
     *
     *   `{{ACS::RegionId}}`: the region ID.
     *
     *   `{{ACS::AccountId}}`: the UID of the Alibaba Cloud account.
     *
     *   `{{ACS::InstanceId}}`: the instance ID. If you want to run the command on multiple instances and specify `{{ACS::InstanceId}}` as a built-in environment parameter, make sure that the Cloud Assistant Agent version is not earlier than the following ones:
     *
     *   Linux: 2.2.3.309
     *   Windows: 2.1.3.309
     *
     *   `{{ACS::InstanceName}}`: the instance name. If you want to run the command on multiple instances and specify `{{ACS::InstanceName}}` as a built-in environment parameter, make sure that the Cloud Assistant Agent version is not earlier than the following ones:
     *
     *   Linux: 2.2.3.344
     *   Windows: 2.1.3.344
     *
     *   `{{ACS::InvokeId}}`: the ID of the task. If you want to specify `{{ACS::InvokeId}}` as a built-in environment parameter, make sure that the Cloud Assistant Agent version is not earlier than the following ones:
     *
     *   Linux: 2.2.3.309
     *   Windows: 2.1.3.309
     *
     *   `{{ACS::CommandId}}`: the ID of the command. If you want to specify `{{ACS::CommandId}}` as a built-in environment parameter, make sure that the Cloud Assistant Agent version is not earlier than the following ones:
     *
     *   Linux: 2.2.3.309
     *   Windows: 2.1.3.309
     *
     * This parameter is required.
     * @example ZWNobyAxMjM=
     *
     * @var string
     */
    public $commandContent;

    /**
     * @description The ID of the container. Only 64-bit hexadecimal strings are supported. `docker://`, `containerd://`, or `cri-o://` can be used as the prefix to the container ID to specify the container runtime.
     *
     * Take note of the following items:
     *
     *   If this parameter is specified, Cloud Assistant runs the command in the specified container of the instance.
     *   If this parameter is specified, the command can run only on Linux instances on which Cloud Assistant Agent 2.2.3.344 or later is installed.
     *   If this parameter is specified, the specified `Username` and `WorkingDir` parameters do not take effect. You can run the command in the default working directory of the container only by using the default user of the container. For more information, see [Use Cloud Assistant to run commands in containers](https://help.aliyun.com/document_detail/456641.html).
     *   If this parameter is specified, only shell scripts can be run in Linux containers. You cannot add a command in the format similar to `#!/usr/bin/python` at the beginning of a script to specify a script interpreter. For more information, see [Use Cloud Assistant to run commands in containers](https://help.aliyun.com/document_detail/456641.html).
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
     *   If this parameter is specified, Cloud Assistant runs the command in the specified container of the instance.
     *   If this parameter is specified, the command can run only on Linux instances on which Cloud Assistant Agent 2.2.3.344 or later is installed.
     *   If this parameter is specified, the specified `Username` and `WorkingDir` parameters do not take effect. You can run the command in the default working directory of the container only by using the default user of the container. For more information, see [Use Cloud Assistant to run commands in containers](https://help.aliyun.com/document_detail/456641.html).
     *   If this parameter is specified, only shell scripts can be run in Linux containers. You cannot add a command in the format similar to `#!/usr/bin/python` at the beginning of a script to specify a script interpreter. For more information, see [Use Cloud Assistant to run commands in containers](https://help.aliyun.com/document_detail/456641.html).
     *
     * @example test-container
     *
     * @var string
     */
    public $containerName;

    /**
     * @description The encoding mode of command content (`CommandContent`). The valid values are case-insensitive. Valid values:
     *
     *   PlainText: The command content is not encoded.
     *   Base64: The command content is encoded in Base64.
     *
     * Default value: PlainText. If the specified value of this parameter is invalid, PlainText is used by default.
     * @example Base64
     *
     * @var string
     */
    public $contentEncoding;

    /**
     * @description The description of the command. The description supports all character sets and can be up to 512 characters in length.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description Specifies whether to include custom parameters in the command.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $enableParameter;

    /**
     * @description The schedule on which to run the command. You can configure a command to run at a fixed interval based on a rate expression, run only once at a specified time, or run at designated times based on a cron expression.
     *
     *   To run a command at a fixed interval, use a rate expression to specify the interval. You can specify the interval in seconds, minutes, hours, or days. This option is suitable for scenarios in which tasks need to be executed at a fixed interval. Specify the interval in the following format: `rate(<Execution interval value> <Execution interval unit>)`. For example, specify `rate(5m)` to run the command every 5 minutes. When you specify an interval, take note of the following limits:
     *
     *   The interval can be anywhere from 60 seconds to 7 days, but must be longer than the timeout period of the scheduled task.
     *   The interval is the amount of time that elapses between two consecutive executions. The interval is irrelevant to the amount of time that is required to run the command once. For example, assume that you set the interval to 5 minutes and that it takes 2 minutes to run the command each time. Each time the command is run, the system waits 3 minutes before the system runs the command again.
     *   A task is not immediately executed after the task is created. For example, assume that you set the interval to 5 minutes for a task. The task begins to be executed 5 minutes after it is created.
     *
     *   To run a command only once at a specific time, specify a point in time and a time zone. Specify the point in time in the `at(yyyy-MM-dd HH:mm:ss <Time zone>)` format, which indicates `at(Year-Month-Day Hour:Minute:Second <Time zone>)`. If you do not specify a time zone, the UTC time zone is used by default. You can specify the time zone in the following forms:
     *
     *   The time zone name. Examples: `Asia/Shanghai` and `America/Los_Angeles`.
     *   The time offset from GMT. Examples: `GMT+8:00` (UTC+8) and `GMT-7:00` (UTC-7). If you use the GMT format, you cannot add leading zeros to the hour value.
     *   The time zone abbreviation. Only UTC is supported.
     *
     * For example, to configure a command to run only once at 13:15:30 on June 6, 2022 (Shanghai time), set the time to `at(2022-06-06 13:15:30 Asia/Shanghai)`. To configure a command to run only once at 13:15:30 on June 6, 2022 (UTC-7), set the time to `at(2022-06-06 13:15:30 GMT-7:00)`.
     *
     *   To run a command at specific times, use a cron expression to define the schedule. Specify a schedule in the `<Cron expression> <Time zone>` format. The cron expression is in the `<seconds> <minutes> <hours> <day of the month> <month> <day of the week> <year (optional)>` format. The system calculates the execution times of the command based on the specified cron expression and time zone and runs the command as scheduled. If you do not specify a time zone, the system time zone of the instance on which you want to run the command is used by default. For more information about cron expressions, see [Cron expressions](https://help.aliyun.com/document_detail/64769.html). You can specify the time zone in the following forms:
     *
     *   The time zone name. Examples: `Asia/Shanghai` and `America/Los_Angeles`.
     *   The time offset from GMT. Examples: `GMT+8:00` (UTC+8) and `GMT-7:00` (UTC-7). If you use the GMT format, you cannot add leading zeros to the hour value.
     *   The time zone abbreviation. Only UTC is supported. For example, to configure a command to run at 10:15:00 every day in 2022 (Shanghai time), set the schedule to `0 15 10 ? * * 2022 Asia/Shanghai`. To configure a command to run every half an hour from 10:00:00 to 11:30:00 every day in 2022 (UTC+8), set the schedule to `0 0/30 10-11 * * ? 2022 GMT+8:00`. To configure a command to run every 5 minutes from 14:00:00 to 14:55:00 every October every two years from 2022 in UTC, set the schedule to `0 0/5 14 * 10 ? 2022/2 UTC`.
     *
     **
     *
     **Note** The minimum interval must be 10 seconds or more and cannot be shorter than the timeout period of scheduled executions.
     *
     * @var string
     */
    public $frequency;

    /**
     * @description The IDs of instances on which to run the command. N indicates that you can specify multiple instance IDs at the same time. Valid values of N: 1 to 100.
     *
     * You can apply for a quota increase in the Quota Center console. The quota name is Maximum number of instances supported for command execution.
     * @example i-bp185dy2o3o6neg****
     *
     * @var string[]
     */
    public $instanceId;

    /**
     * @description Specifies whether to retain the command after the command is run. Valid values:
     *
     *   true: retains the command. Then, you can call the InvokeCommand operation to rerun the command. The retained command counts against the quota of Cloud Assistant commands.
     *   false: does not retain the command. The command is automatically deleted after it is run and does not count against the quota of Cloud Assistant commands.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $keepCommand;

    /**
     * @description The name of the command. The name supports all character sets and can be up to 128 characters in length.
     *
     * @example testName
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The key-value pairs of the custom parameters that are passed in when the command that can include custom parameters is run. For example, assume that the command content is `echo {{name}}`. The `Parameter` parameter can be used to pass in the `{"name":"Jack"}` key-value pair. The `name` key of the custom parameter is automatically replaced by the paired Jack value to generate a new command. As a result, the `echo Jack` command is run.
     *
     * You can specify up to 10 custom parameters. Take note of the following items:
     *
     *   The key cannot be an empty string. It can be up to 64 characters in length.
     *   The value can be an empty string.
     *   If you want to retain the command, make sure that the command after Base64 encoding, including custom parameters and original command content, does not exceed 18 KB in size. If you do not want to retain the command, make sure that the command after Base64-encoding does not exceed 24 KB in size. You can set `KeepCommand` to specify whether to retain the command.
     *   The custom parameter names that are specified by Parameters must be included in the custom parameter names that you specified when you created the command. You can use empty strings to represent the parameters that are not passed in.
     *
     * This parameter is empty by default. You can leave this parameter empty to disable the custom parameter feature.
     * @example {"name":"Jack", "accessKey":"LTAIdyvdIqaRY****"}
     *
     * @var string
     */
    public $parametersShrink;

    /**
     * @description The region ID of the command. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies how to run the command. Valid values:
     *
     *   Once: immediately runs the command.
     *   Period: runs the command on a schedule. If you set this parameter to `Period`, you must specify `Frequency`.
     *   NextRebootOnly: runs the command the next time the instance is started.
     *   EveryReboot: runs the command every time the instance is started.
     *
     * Default values:
     *
     *   If you do not specify the `Frequency` parameter, the default value is `Once`.
     *   If you specify the `Frequency` parameter, `Period` is used as the value of RepeatMode regardless of whether RepeatMode is set to Period.
     *
     * Take note of the following items:
     *
     *   You can call the [StopInvocation](https://help.aliyun.com/document_detail/64838.html) operation to stop the pending or scheduled executions of the command.
     *   If you set this parameter to `Period` or `EveryReboot`, you can call the [DescribeInvocationResults](https://help.aliyun.com/document_detail/64845.html) operation with `IncludeHistory` set to true to query the results of historical scheduled executions.
     *
     * @example Once
     *
     * @var string
     */
    public $repeatMode;

    /**
     * @description The ID of the resource group to which to assign the command executions. When you set this parameter, take note of the following items:
     *
     *   The instances specified by InstanceId.N must belong to the specified resource group.
     *   After the command is run, you can set this parameter to call the [DescribeInvocations](https://help.aliyun.com/document_detail/64840.html) or [DescribeInvocationResults](https://help.aliyun.com/document_detail/64845.html) operation to query the execution results in the specified resource group.
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
     * @description The tags of the instance. If you do not specify InstanceId.N, the command is run on the instances that have the specified tags.
     *
     * @var resourceTag[]
     */
    public $resourceTag;

    /**
     * @description The description of the command. The description supports all character sets and can be up to 512 characters in length.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description Specifies how to stop the command task when a command execution is manually stopped or times out. Valid values:
     *
     *   Process: stops the process of the command.
     *   ProcessTree: stops the process tree of the command. In this case, the process of the command and all subprocesses of the process are stopped.
     *
     * @example ProcessTree
     *
     * @var string
     */
    public $terminationMode;

    /**
     * @description >  This parameter is no longer used and does not take effect.
     *
     * @example true
     *
     * @var bool
     */
    public $timed;

    /**
     * @description The timeout period for the command execution. Unit: seconds.
     *
     * Default value: 60.
     * @example 3600
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The language type of the command. Valid values:
     *
     *   RunBatScript: batch command, applicable to Windows instances.
     *   RunPowerShellScript: PowerShell command, applicable to Windows instances.
     *   RunShellScript: shell command, applicable to Linux instances.
     *
     * This parameter is required.
     * @example RunShellScript
     *
     * @var string
     */
    public $type;

    /**
     * @description The username to use to run the command on the ECS instances. The username cannot exceed 255 characters in length.
     *
     *   For Linux instances, the root username is used by default.
     *   For Windows instances, the System username is used by default.
     *
     * You can also specify other usernames that already exist in the instances to run the command. For security purposes, we recommend that you run Cloud Assistant commands as a regular user. For more information, see [Run Cloud Assistant commands as a regular user](https://help.aliyun.com/document_detail/203771.html).
     * @example test
     *
     * @var string
     */
    public $username;

    /**
     * @description The name of the password to use to run the command on a Windows instance. The name cannot exceed 255 characters in length.
     *
     * >  If you use the root username for Linux instances or the System username for Windows instances to run the command, you do not need to specify WindowsPasswordName.
     * @example axtSecretPassword
     *
     * @var string
     */
    public $windowsPasswordName;

    /**
     * @description The working directory of the command on the instance. The value can be up to 200 characters in length.
     *
     * Default values:
     *
     *   For Linux instances, the default value is `/root`, which is the home directory of the administrator (the root user).
     *   For Windows instances, the default value is the directory where the Cloud Assistant Agent process resides, such as `C:\\Windows\\System32`.
     *
     * @example /home/user
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'commandContent'       => 'CommandContent',
        'containerId'          => 'ContainerId',
        'containerName'        => 'ContainerName',
        'contentEncoding'      => 'ContentEncoding',
        'description'          => 'Description',
        'enableParameter'      => 'EnableParameter',
        'frequency'            => 'Frequency',
        'instanceId'           => 'InstanceId',
        'keepCommand'          => 'KeepCommand',
        'name'                 => 'Name',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'parametersShrink'     => 'Parameters',
        'regionId'             => 'RegionId',
        'repeatMode'           => 'RepeatMode',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'resourceTag'          => 'ResourceTag',
        'tag'                  => 'Tag',
        'terminationMode'      => 'TerminationMode',
        'timed'                => 'Timed',
        'timeout'              => 'Timeout',
        'type'                 => 'Type',
        'username'             => 'Username',
        'windowsPasswordName'  => 'WindowsPasswordName',
        'workingDir'           => 'WorkingDir',
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
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }
        if (null !== $this->contentEncoding) {
            $res['ContentEncoding'] = $this->contentEncoding;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enableParameter) {
            $res['EnableParameter'] = $this->enableParameter;
        }
        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->keepCommand) {
            $res['KeepCommand'] = $this->keepCommand;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (null !== $this->resourceTag) {
            $res['ResourceTag'] = [];
            if (null !== $this->resourceTag && \is_array($this->resourceTag)) {
                $n = 0;
                foreach ($this->resourceTag as $item) {
                    $res['ResourceTag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->terminationMode) {
            $res['TerminationMode'] = $this->terminationMode;
        }
        if (null !== $this->timed) {
            $res['Timed'] = $this->timed;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->windowsPasswordName) {
            $res['WindowsPasswordName'] = $this->windowsPasswordName;
        }
        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunCommandShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }
        if (isset($map['ContentEncoding'])) {
            $model->contentEncoding = $map['ContentEncoding'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnableParameter'])) {
            $model->enableParameter = $map['EnableParameter'];
        }
        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }
        if (isset($map['InstanceId'])) {
            if (!empty($map['InstanceId'])) {
                $model->instanceId = $map['InstanceId'];
            }
        }
        if (isset($map['KeepCommand'])) {
            $model->keepCommand = $map['KeepCommand'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
        if (isset($map['ResourceTag'])) {
            if (!empty($map['ResourceTag'])) {
                $model->resourceTag = [];
                $n                  = 0;
                foreach ($map['ResourceTag'] as $item) {
                    $model->resourceTag[$n++] = null !== $item ? resourceTag::fromMap($item) : $item;
                }
            }
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
        if (isset($map['TerminationMode'])) {
            $model->terminationMode = $map['TerminationMode'];
        }
        if (isset($map['Timed'])) {
            $model->timed = $map['Timed'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['WindowsPasswordName'])) {
            $model->windowsPasswordName = $map['WindowsPasswordName'];
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
