<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\RunCommandShrinkRequest\tag;
use AlibabaCloud\Tea\Model;

class RunCommandShrinkRequest extends Model
{
    /**
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to retain the command after it is run. Valid values:
     *
     *   true: The command is retained. You can call the InvokeCommand operation to run the command again. The retained command counts against the quota of Cloud Assistant commands.
     *   false: The command is not retained. The command is automatically deleted after it is run and does not count against the quota of Cloud Assistant commands.
     *
     * Default value: false
     * @example ZWNobyAxMjM=
     *
     * @var string
     */
    public $commandContent;

    /**
     * @description The value of tag N of the command. You can specify 1 to 20 tag keys for the command. The tag value can be an empty string.
     *
     * It can be up to 128 characters in length and cannot contain `http://` or `https://`.
     * @example ab141ddfbacfe02d9dbc25966ed971536124527097398d419a6746873fea****
     *
     * @var string
     */
    public $containerId;

    /**
     * @description Runs a shell, PowerShell, or batch command on one or more Elastic Compute Service (ECS) instances.
     *
     * @example test-container
     *
     * @var string
     */
    public $containerName;

    /**
     * @description Specifies whether to run the command on a schedule. Valid values:
     *
     *   true: runs the command on the schedule specified by `Frequency`. The results of each execution of a command do not affect the subsequent executions of the command.
     *   false: runs the command only once.
     *
     * Default value: false.
     * @example Base64
     *
     * @var string
     */
    public $contentEncoding;

    /**
     * @description The content of the command. The command content can be plaintext or Base64-encoded. Take note of the following items:
     *
     *   If you want to retain the command, make sure that the Base64-encoded command content does not exceed 18 KB in size. If you do not want to retain the command, make sure that the Base64-encoded command content does not exceed 24 KB in size. You can set `KeepCommand` to specify whether to retain the command.
     *
     *   If the command content is Base64-encoded, set `ContentEncoding` to Base64.
     *
     *   When `EnableParameter` is set to true, the custom parameter feature is enabled and you can configure custom parameters based on the following rules:
     *
     *   Define custom parameters in the `{{}}` format. Within `{{}}`, the spaces and line feeds before and after the parameter names are ignored.
     *   The number of custom parameters cannot exceed 20.
     *   A custom parameter name can contain only letters, digits, underscores (\_), and hyphens (-). The name is case-insensitive.
     *   Each custom parameter name cannot exceed 64 bytes in length.
     *
     *   You can specify built-in environment parameters as custom parameters. Then, when you run the command, the parameters are automatically specified by Cloud Assistant. You can specify the following built-in environment parameters:
     *
     *   `{{ACS::RegionId}}`: the ID of the region.
     *
     *   `{{ACS::AccountId}}`: the UID of the Alibaba Cloud account.
     *
     *   `{{ACS::InstanceId}}`: the ID of the instance. If you want to run the command on multiple instances and specify `{{ACS::InstanceId}}` as a built-in environment parameter, make sure that your Cloud Assistant is of the following versions or later:
     *
     *   Linux: 2.2.3.309
     *   Windows: 2.1.3.309
     *
     *   `{{ACS::InstanceName}}`: the name of the instance. If you want to run the command on multiple instances and specify `{{ACS::InstanceName}}` as a built-in environment parameter, make sure that your Cloud Assistant is of the following versions or later:
     *
     *   Linux: 2.2.3.344
     *   Windows: 2.1.3.344
     *
     *   `{{ACS::InvokeId}}`: the ID of the command task. If you want to specify `{{ACS::InvokeId}}` as a built-in environment variable, make sure that your Cloud Assistant is of the following versions or later:
     *
     *   Linux: 2.2.3.309
     *   Windows: 2.1.3.309
     *
     *   `{{ACS::CommandId}}`: the ID of the command. If you want to specify `{{ACS::CommandId}}` as a built-in environment parameter, make sure that your Cloud Assistant is of the following versions or later:
     *
     *   Linux: 2.2.3.309
     *   Windows: 2.1.3.309
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the resource group to which you want to assign the command executions. When you set this parameter, take note of the following items:
     *
     *   The instances specified by the InstanceId.N parameter must belong to the specified resource group.
     *   You can set this parameter to call the [DescribeInvocations](~~64840~~) or [DescribeInvocationResults](~~64845~~) operation to query execution results in the specified resource group.
     *
     * @example false
     *
     * @var bool
     */
    public $enableParameter;

    /**
     * @description The name of the command. The name supports all character sets and can be up to 128 characters in length.
     *
     * @example 0 *\/20 * * * ?
     *
     * @var string
     */
    public $frequency;

    /**
     * @description The name of the password to use to run the command on Windows instances.
     *
     * >  If you use the root username for Linux instances or the System username for Windows instances to run the command, you do not need to specify the WindowsPasswordName parameter.
     * @example i-bp185dy2o3o6neg****
     *
     * @var string[]
     */
    public $instanceId;

    /**
     * @description The ID of instance N on which to run the command. Valid values of N: 1 to 50.
     *
     * If one of the specified instances does not meet the conditions for running the command, the call fails. To ensure that the call is successful, specify only the IDs of instances that meet the conditions.
     * @example false
     *
     * @var bool
     */
    public $keepCommand;

    /**
     * @description The ID of the command.
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
     * @description The working directory of the command on the instance.
     *
     * Default values:
     *
     *   For Linux instances, the default value is `/root`, which is the home directory of the administrator (the root user).
     *   For Windows instances, the default value is the directory where the Cloud Assistant client process resides. Example: `C:\Windows\System32`.
     *
     * @example {"name":"Jack", "accessKey":"LTAIdyvdIqaRY****"}
     *
     * @var string
     */
    public $parametersShrink;

    /**
     * @description The language type of the command. Valid values:
     *
     *   RunBatScript: batch command, applicable to Windows instances
     *   RunPowerShellScript: PowerShell command, applicable to Windows instances
     *   RunShellScript: shell command, applicable to Linux instances
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description root
     *
     * @example Once
     *
     * @var string
     */
    public $repeatMode;

    /**
     * @description The tags to add to the command.
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
     * @description The description of the command. The description supports all character sets and can be up to 512 characters in length.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The key-value pairs of custom parameters to pass in when the command includes custom parameters. For example, assume that the command content is `echo {{name}}`. You can use the `Parameter` parameter to pass in the `{"name":"Jack"}` key-value pair. The `name` key of the custom parameter is automatically replaced by the paired Jack value to generate a new command. As a result, the `echo Jack` command is actually run.
     *
     * Number of custom parameters: 0 to 10. Take note of the following items:
     *
     *   The key cannot be an empty string. It can be up to 64 characters in length.
     *   The value can be an empty string.
     *   If you want to retain the command, make sure that the size of the Base64-encoded command content (including custom parameters and original command content) does not exceed 18 KB. If you do not want to retain the command, make sure that the size of the Base64-encoded command content does not exceed 24 KB. You can set `KeepCommand` to specify whether to retain the command.
     *   The custom parameter names specified in the value of Parameters must all be included in the custom parameter names specified when you created the command. You can use empty strings to represent the parameters that are not passed in.
     *
     * This parameter is empty by default. You can leave this parameter empty to disable the custom parameter feature.
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
     * @description The region ID of the command. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example RunShellScript
     *
     * @var string
     */
    public $type;

    /**
     * @description Specifies whether to enable the the custom parameter feature.
     *
     * Default value: false
     * @example The user to use to run the command on instances.
     *
     *   For Linux instances, the root user is used.
     *   For Windows instances, the System user is used.
     *
     * You can also specify other user that already exist in the instances to run the command. For security purposes, we recommend that you run Cloud Assistant commands as a regular user. For more information, see [Run Cloud Assistant commands as a regular user](~~203771~~).
     * @var string
     */
    public $username;

    /**
     * @description The ID of instance N on which to run the command. Valid values of N: 1 to 50.
     *
     * If one of the specified instances does not meet the conditions for running the command, the call fails. To ensure that the call is successful, specify only the IDs of instances that meet the conditions.
     * @example axtSecretPassword
     *
     * @var string
     */
    public $windowsPasswordName;

    /**
     * @description The ID of the command task.
     *
     * @example The schedule on which to run the command. You must specify this parameter when you set `Timed` to `true`. You can configure a command to run at a fixed interval based on a rate expression, run only once at a specified time, or run at designated times based on a cron expression.
     *
     *   To run a command at a fixed interval, use a rate expression to specify the interval. You can specify the interval in seconds, minutes, hours, or days. This option is applicable when tasks need to be executed at a fixed interval. Specify the interval in the following format: `rate(<Execution interval value><Execution interval unit>)`. For example, specify `rate(5m)` to run the command every 5 minutes. Take note of the following limits when you set an interval:
     *
     *   The specified interval can be anywhere from 60 seconds to 7 days and must be longer than the timeout period of the scheduled task.
     *   The interval is the amount of time elapsed between two consecutive executions. The interval is irrelevant to the amount of time required to run the command once. For example, assume that you set the interval to 5 minutes and that it takes 2 minutes to run the command each time. Each time the command completes running, the system waits 3 minutes before it runs the command again.
     *   A task is not executed immediately after it is created. For example, assume that you set the interval to 5 minutes and create a task to run the command. The task begins to run 5 minutes after it is created.
     *
     *   To run a command only once at a specified time, specify a point in time and a time zone. Specify the point in time in the following format: `at(yyyy-MM-dd HH:mm:ss <Time zone>)`, which indicates `at(Year-Month-Day Hour:Minute:Second <Time zone>)`. If you do not specify a time zone, the default time zone is UTC. You can specify the time zone in the following forms:
     *
     *   The time zone name. Examples: `Asia/Shanghai` and `America/Los_Angeles`.
     *   The time offset from GMT. Examples: `GMT+8:00` (UTC+8) and `GMT-7:00` (UTC-7). If you use the GMT format, do not pad leading zeros to the hour value.
     *   The time zone abbreviation. Only UTC is supported.
     *
     * For example, to specify a command to run only once at 13:15:30 on June 06, 2022 (Shanghai time), set the time to `at(2022-06-06 13:15:30 Asia/Shanghai)`. To specify a command to run only once at 13:15:30 on June 06, 2022 (UTC-7), set the time to `at(2022-06-06 13:15:30 GMT-7:00)`.
     *
     *   To run a command at designated times, specify a cron expression. Specify the time in the following format: `<Cron expression> <Time zone>`, where the cron expression is in the format of `<seconds> <minutes> <hours> <day of the month> <month> <day of the week> <year (optional)>`. The system calculates the execution times of the command based on the specified cron expression and time zone and runs the command as scheduled. If you do not specify a time zone, the system time zone of the instance on which to run the command is used by default. For more information about cron expressions, see [Cron expressions](~~64769~~). You can specify the time zone in the following forms:
     *
     *   The time zone name. Examples: `Asia/Shanghai` and `America/Los_Angeles`.
     *   The time offset from GMT. Examples: `GMT+8:00` (UTC+8) and `GMT-7:00` (UTC-7). If you use the GMT format, do not pad leading zeros to the hour value.
     *   The time zone abbreviation. Only UTC is supported.
     *
     * For example, to specify a command to run at 10:15:00 every day in 2022 (Shanghai time), set the time to `0 15 10 ? * * 2022 Asia/Shanghai`. To specify a command to run every half an hour from 10:00:00 to 11:30:00 every day in 2022 (UTC+8), set the time to `0 0/30 10-11 * * ? 2022 GMT +8:00`. To specify a command to run every 5 minutes from 14:00:00 to 14:55:00 every October every two years since 2022 (UTC), set the time to `0 0/5 14 * 10 ? 2022/2 UTC`.
     *
     **
     *
     **Note**The minimum interval must be 10 seconds or more and cannot be shorter than the timeout period of scheduled executions.
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
        'tag'                  => 'Tag',
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
