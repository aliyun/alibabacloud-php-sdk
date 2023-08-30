<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class RunCommandShrinkRequest extends Model
{
    /**
     * @description The content of the command. Take note of the following items:
     *
     *   If you set `EnableParameter` to true, the custom parameter feature is enabled in the command content and you can configure custom parameters based on the following rules:
     *   Define custom parameters in the {{}} format. Within `{{}}`, the spaces and line feeds before and after the parameter names are ignored.
     *   The number of custom parameters cannot be greater than 20.
     *   A custom parameter name can contain only letters, digits, underscores (\_), and hyphens (-). The name is case-insensitive.
     *   Each custom parameter name cannot exceed 64 bytes in length.
     *
     * @example ifconfig -s
     *
     * @var string
     */
    public $commandContent;

    /**
     * @description Specifies whether to enable the custom parameter feature.
     *
     * Default value: false.
     * @example false
     *
     * @var bool
     */
    public $enableParameter;

    /**
     * @description The ID of the simple application server.
     *
     * @example ace0706b2ac4454d984295a94213****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the command.
     *
     * @example testName
     *
     * @var string
     */
    public $name;

    /**
     * @description The custom parameters in the key-value pair format that are to be passed in when the command includes custom parameters. For example, if the command content is `echo {{name}}`, you can use `Parameters` to pass in the `{"name":"Jack"}` key-value pair. The `name` key of the custom parameter is automatically replaced with the paired Jack value to generate a new command. As a result, the `echo Jack` command is executed.
     *
     * Number of custom parameters ranges from 0 to 20. Take note of the following items:
     *
     *   The key cannot be an empty string. It can be up to 64 characters in length.
     *   The value can be an empty string.
     *   After custom parameters and original command content are encoded in Base64, the command cannot exceed 16 KB in size.
     *   The custom parameter names that are specified by Parameters must be included in the custom parameter names that you specified when you created the command. You can use empty strings to represent the parameters that are not passed in.
     *
     * This parameter is empty by default, which indicates to disable the custom parameter feature.
     * @example {"name":"Jack", "accessKey":"LTAIdyvdIqaRY****"}
     *
     * @var string
     */
    public $parametersShrink;

    /**
     * @description The region ID of the simple application server. You can call the [ListRegions](~~189315~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The timeout period of the command on the server.
     *
     * Default value: 60.
     * @example 60
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The language type of the command. Valid values:
     *
     *   RunBatScript: batch commands (applicable to Windows servers).
     *   RunPowerShellScript: PowerShell commands (applicable to Windows servers).
     *   RunShellScript: shell commands (applicable to Linux servers).
     *
     * @example RunShellScript
     *
     * @var string
     */
    public $type;

    /**
     * @description The name of the password to be used to run the command on a Windows server.
     *
     * If you want to use a username other than the default "system" username to run the command on a Windows server, you must specify both the WindowsPasswordName and WorkingUser parameters. To mitigate the risk of password leaks, the password is stored in plaintext in Operation Orchestration Service (OOS) Parameter Store, and only the name of the password is passed in by using WindowsPasswordName.
     * @example axtSecretPassword
     *
     * @var string
     */
    public $windowsPasswordName;

    /**
     * @description The execution path of the command. You can specify a value for the parameter. Default execution paths vary based on the operating systems of the servers.
     *
     *   For Linux servers, the default execution path is the /home directory of the root user.
     *   For Windows servers, the default execution path is C:\Windows\system32.
     *
     * @example /home/
     *
     * @var string
     */
    public $workingDir;

    /**
     * @description A user of the server who runs the command. We recommend that you run the command as a regular user to reduce security risks. Default values:
     *
     *   For Linux servers, the default value is root.
     *   For Windows servers, the default value is system.
     *
     * @example root
     *
     * @var string
     */
    public $workingUser;
    protected $_name = [
        'commandContent'      => 'CommandContent',
        'enableParameter'     => 'EnableParameter',
        'instanceId'          => 'InstanceId',
        'name'                => 'Name',
        'parametersShrink'    => 'Parameters',
        'regionId'            => 'RegionId',
        'timeout'             => 'Timeout',
        'type'                => 'Type',
        'windowsPasswordName' => 'WindowsPasswordName',
        'workingDir'          => 'WorkingDir',
        'workingUser'         => 'WorkingUser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->enableParameter) {
            $res['EnableParameter'] = $this->enableParameter;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->windowsPasswordName) {
            $res['WindowsPasswordName'] = $this->windowsPasswordName;
        }
        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
        }
        if (null !== $this->workingUser) {
            $res['WorkingUser'] = $this->workingUser;
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
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['EnableParameter'])) {
            $model->enableParameter = $map['EnableParameter'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Parameters'])) {
            $model->parametersShrink = $map['Parameters'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WindowsPasswordName'])) {
            $model->windowsPasswordName = $map['WindowsPasswordName'];
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }
        if (isset($map['WorkingUser'])) {
            $model->workingUser = $map['WorkingUser'];
        }

        return $model;
    }
}
