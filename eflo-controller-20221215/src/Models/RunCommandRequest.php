<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class RunCommandRequest extends Model
{
    /**
     * @description Ensures idempotence of the request. Generate a unique parameter value from your client to ensure that the value is unique across different requests.
     * ClientToken supports only ASCII characters and cannot exceed 64 characters. For more information, see How to Ensure Idempotence.
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Command content. Please note the following:
     *
     * - Specify `EnableParameter=true` to enable custom parameters in the command content.
     * - Define custom parameters using the {{}} format; spaces and newlines within `{{}}` will be ignored.
     * - The number of custom parameters cannot exceed 20.
     * - Custom parameter names can only contain a-zA-Z0-9-_, and are case-insensitive.
     * - A single custom parameter name cannot exceed 64 bytes.
     *
     * @example ZWNobyAxMjM=
     *
     * @var string
     */
    public $commandContent;

    /**
     * @description Command ID
     *
     * @example c-e996287206324975b5fbe1d***
     *
     * @var string
     */
    public $commandId;

    /**
     * @description Encoding method for the script content. Valid values:
     *
     * - PlainText: No encoding, transmitted in plain text.
     * - Base64: Base64 encoding.
     *
     * Default value: PlainText. If an invalid value is provided, it will be treated as PlainText.
     *
     * @example Base64
     *
     * @var string
     */
    public $contentEncoding;

    /**
     * @description Command description.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description Whether the command contains custom parameters.
     *
     * Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $enableParameter;

    /**
     * @description Execution time for scheduled commands. Currently, three types of scheduling methods are supported: fixed interval (based on Rate expression), one-time execution at a specific time, and clock-based scheduling (based on Cron expression).
     *
     * Fixed interval execution: Based on the Rate expression, the command is executed at the set interval. The interval can be set in seconds (s), minutes (m), hours (h), and days (d), suitable for scenarios where tasks need to be executed at fixed intervals. The format is rate(<interval value><interval unit>), such as rate(5m) for every 5 minutes. The following restrictions apply to fixed interval execution:
     * - The interval should not exceed 7 days and should be no less than 60 seconds, and it must be greater than the timeout of the scheduled task.
     * - The interval is based on a fixed frequency and is independent of the actual execution time of the task. For example, if the command is set to execute every 5 minutes and the task takes 2 minutes to complete, the next round will start 3 minutes after the completion of the task.
     * - The task will not be executed immediately upon creation. For example, if the command is set to execute every 5 minutes, it will not be executed immediately upon creation but will start 5 minutes after the task is created.
     * One-time execution at a specific time: Executes the command once at the specified time and timezone. The format is at(yyyy-MM-dd HH:mm:ss <timezone>), which is at(year-month-day hour:minute:second <timezone>). If no timezone is specified, UTC is used by default. Timezones support the following three formats:
     * - Full timezone name: e.g., Asia/Shanghai (China/Shanghai time), America/Los_Angeles (America/Los Angeles time), etc.
     * - Timezone offset from GMT: e.g., GMT+8:00 (UTC+8:00), GMT-7:00 (UTC-7:00). When using the GMT format, leading zeros are not allowed in the hour position.
     * - Timezone abbreviation: Only UTC (Coordinated Universal Time) is supported.
     *
     * For example, to execute once at 13:15:30 on June 6, 2022, in Shanghai, China, the format would be: at(2022-06-06 13:15:30 Asia/Shanghai); to execute once at 13:15:30 on June 6, 2022, in the GMT-7:00 timezone, the format would be: at(2022-06-06 13:15:30 GMT-7:00).
     *
     * Clock-based scheduling (based on Cron expression): Based on the Cron expression, the command is executed according to the set schedule. The format is <second> <minute> <hour> <day> <month> <weekday> <year (optional)> <timezone>, i.e., <Cron expression> <timezone>. In the specified timezone, the scheduled task execution time is calculated based on the Cron expression and then executed. If no timezone is specified, the system\\"s internal timezone of the instance running the scheduled task is used by default. For more information about Cron expressions, see Cron Expressions. Timezones support the following three formats:
     * - Full timezone name: e.g., Asia/Shanghai (China/Shanghai time), America/Los_Angeles (America/Los Angeles time), etc.
     * - Timezone offset from GMT: e.g., GMT+8:00 (UTC+8:00), GMT-7:00 (UTC-7:00). When using the GMT format, leading zeros are not allowed in the hour position.
     * - Timezone abbreviation: Only UTC (Coordinated Universal Time) is supported.
     *
     * For example, to execute the command at 10:15 AM every day in 2022 in Shanghai, China, the format would be 0 15 10 ? * * 2022 Asia/Shanghai; to execute the command every 30 minutes between 10:00 AM and 11:30 AM every day in 2022 in the GMT+8:00 timezone, the format would be 0 0/30 10-11 * * ? 2022 GMT+8:00; to execute the command every 5 minutes between 2:00 PM and 2:55 PM every day in October every two years starting from 2022 in UTC, the format would be 0 0/5 14 * 10 ? 2022/2 UTC.
     *
     * @var string
     */
    public $frequency;

    /**
     * @description Bootstrap for script execution. The length must not exceed 1 KB.
     *
     * @example python3 -u {{ACS::ScriptFileName|Ext(".py")}}
     *
     * @var string
     */
    public $launcher;

    /**
     * @description Command name.
     *
     * @example testName
     *
     * @var string
     */
    public $name;

    /**
     * @description List of nodes.
     *
     * @var string[]
     */
    public $nodeIdList;

    /**
     * @description When the command contains custom parameters, you need to pass in key-value pairs of these custom parameters when executing the command. For example, if the command content is `echo {{name}}`, you can pass in the key-value pair `{"name":"Jack"}` through the `Parameter` parameter. The custom parameter will automatically replace the variable value `name`, resulting in a new command, which actually executes as `echo Jack`.
     *
     * The number of custom parameters ranges from 0 to 10, and you should note:
     *
     * - Keys cannot be empty strings and support up to 64 characters at most.
     * - Values can be empty strings.
     * - When combined with the original command content and Base64 encoded, if the command is saved, the size after Base64 encoding must not exceed 18 KB; if the command is not saved, the size after Base64 encoding must not exceed 24 KB. You can set whether to keep the command via `KeepCommand`.
     * - The set of custom parameter names must be a subset of the parameter set defined during command creation. For parameters that are not passed in, you can use an empty string as a substitute.
     *
     * The default value is empty, indicating that the parameter is not set, thus disabling custom parameters.
     *
     * @example {"name":"Jack", "accessKey":"LTAIdyvdIqaRY****"}
     *
     * @var mixed[]
     */
    public $parameters;

    /**
     * @description Set the command execution mode. Valid values:
     *
     * - Once: Execute the command immediately.
     * - Period: Execute the command at a scheduled time. When this parameter is set to `Period`, you must also specify the `Frequency` parameter.
     * - NextRebootOnly: Automatically execute the command when the instance starts next time.
     * - EveryReboot: Automatically execute the command every time the instance starts.
     *
     * Default value:
     * - If the `Frequency` parameter is not specified, the default value is `Once`.
     * - If the `Frequency` parameter is specified, regardless of whether this parameter is already set, it will be processed as `Period`.
     *
     * @example Once
     *
     * @var string
     */
    public $repeatMode;

    /**
     * @description The mode when stopping a task (manually or due to execution timeout). Possible values:
     * Process: Stops the current script process. ProcessTree: Stops the current process tree (a collection of the script process and all its child processes).
     *
     * @example ProcessTree
     *
     * @var string
     */
    public $terminationMode;

    /**
     * @description Timeout for executing the command, in seconds. If the command cannot run due to process issues, missing modules, or the absence of the Cloud Assistant Agent, a timeout will occur. After a timeout, the command process will be forcibly terminated. Default value: 60.
     *
     * @example 3600
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The username to execute the command in the instance. The length must not exceed 255 characters.
     * For Linux systems, the command is executed by the root user by default.
     *
     * @example root
     *
     * @var string
     */
    public $username;

    /**
     * @description You can customize the execution path of the command. The default paths are as follows:
     *
     * - Linux instances: The default execution path is under the /home directory of the root user.
     *
     * @example /home/user
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'commandContent' => 'CommandContent',
        'commandId' => 'CommandId',
        'contentEncoding' => 'ContentEncoding',
        'description' => 'Description',
        'enableParameter' => 'EnableParameter',
        'frequency' => 'Frequency',
        'launcher' => 'Launcher',
        'name' => 'Name',
        'nodeIdList' => 'NodeIdList',
        'parameters' => 'Parameters',
        'repeatMode' => 'RepeatMode',
        'terminationMode' => 'TerminationMode',
        'timeout' => 'Timeout',
        'username' => 'Username',
        'workingDir' => 'WorkingDir',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
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
        if (null !== $this->launcher) {
            $res['Launcher'] = $this->launcher;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nodeIdList) {
            $res['NodeIdList'] = $this->nodeIdList;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->repeatMode) {
            $res['RepeatMode'] = $this->repeatMode;
        }
        if (null !== $this->terminationMode) {
            $res['TerminationMode'] = $this->terminationMode;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunCommandRequest
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
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
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
        if (isset($map['Launcher'])) {
            $model->launcher = $map['Launcher'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NodeIdList'])) {
            if (!empty($map['NodeIdList'])) {
                $model->nodeIdList = $map['NodeIdList'];
            }
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['RepeatMode'])) {
            $model->repeatMode = $map['RepeatMode'];
        }
        if (isset($map['TerminationMode'])) {
            $model->terminationMode = $map['TerminationMode'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
