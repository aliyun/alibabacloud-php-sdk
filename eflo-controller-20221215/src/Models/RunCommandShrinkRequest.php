<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class RunCommandShrinkRequest extends Model
{
    /**
     * @description Ensures idempotence of the request. Generate a unique parameter value from your client to ensure that the value is unique across different requests.
     * ClientToken supports only ASCII characters and cannot exceed 64 characters. For more information, see How to Ensure Idempotence.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Command content. Please note the following:
     *
     * - A single custom parameter name cannot exceed 64 bytes.
     * @example ZWNobyAxMjM=
     *
     * @var string
     */
    public $commandContent;

    /**
     * @example c-e996287206324975b5fbe1d***
     *
     * @var string
     */
    public $commandId;

    /**
     * @description Encoding method for the script content. Valid values:
     *
     * Default value: PlainText. If an invalid value is provided, it will be treated as PlainText.
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
     * @example false
     *
     * @var bool
     */
    public $enableParameter;

    /**
     * @description Execution time for scheduled commands. Currently, three types of scheduling methods are supported: fixed interval (based on Rate expression), one-time execution at a specific time, and clock-based scheduling (based on Cron expression).
     *
     * - Timezone abbreviation: Only UTC (Coordinated Universal Time) is supported.
     *
     * For example, to execute the command at 10:15 AM every day in 2022 in Shanghai, China, the format would be 0 15 10 ? * * 2022 Asia/Shanghai; to execute the command every 30 minutes between 10:00 AM and 11:30 AM every day in 2022 in the GMT+8:00 timezone, the format would be 0 0/30 10-11 * * ? 2022 GMT+8:00; to execute the command every 5 minutes between 2:00 PM and 2:55 PM every day in October every two years starting from 2022 in UTC, the format would be 0 0/5 14 * 10 ? 2022/2 UTC.
     * @var string
     */
    public $frequency;

    /**
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
     * @var string
     */
    public $nodeIdListShrink;

    /**
     * @description When the command contains custom parameters, you need to pass in key-value pairs of these custom parameters when executing the command. For example, if the command content is `echo {{name}}`, you can pass in the key-value pair `{"name":"Jack"}` through the `Parameter` parameter. The custom parameter will automatically replace the variable value `name`, resulting in a new command, which actually executes as `echo Jack`.
     *
     * The default value is empty, indicating that the parameter is not set, thus disabling custom parameters.
     * @example {"name":"Jack", "accessKey":"LTAIdyvdIqaRY****"}
     *
     * @var string
     */
    public $parametersShrink;

    /**
     * @description Set the command execution mode. Valid values:
     *
     * - If the `Frequency` parameter is specified, regardless of whether this parameter is already set, it will be processed as `Period`.
     * @example Once
     *
     * @var string
     */
    public $repeatMode;

    /**
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
     * @example root
     *
     * @var string
     */
    public $username;

    /**
     * @description You can customize the execution path of the command. The default paths are as follows:
     *
     * - Linux instances: The default execution path is under the /home directory of the root user.
     * @example /home/user
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'clientToken'      => 'ClientToken',
        'commandContent'   => 'CommandContent',
        'commandId'        => 'CommandId',
        'contentEncoding'  => 'ContentEncoding',
        'description'      => 'Description',
        'enableParameter'  => 'EnableParameter',
        'frequency'        => 'Frequency',
        'launcher'         => 'Launcher',
        'name'             => 'Name',
        'nodeIdListShrink' => 'NodeIdList',
        'parametersShrink' => 'Parameters',
        'repeatMode'       => 'RepeatMode',
        'terminationMode'  => 'TerminationMode',
        'timeout'          => 'Timeout',
        'username'         => 'Username',
        'workingDir'       => 'WorkingDir',
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
        if (null !== $this->nodeIdListShrink) {
            $res['NodeIdList'] = $this->nodeIdListShrink;
        }
        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
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
            $model->nodeIdListShrink = $map['NodeIdList'];
        }
        if (isset($map['Parameters'])) {
            $model->parametersShrink = $map['Parameters'];
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
