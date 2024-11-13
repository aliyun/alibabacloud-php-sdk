<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponseBody\commands;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponseBody\commands\command\parameterDefinitions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponseBody\commands\command\parameterNames;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponseBody\commands\command\tags;
use AlibabaCloud\Tea\Model;

class command extends Model
{
    /**
     * @description The category of the common command.
     *
     * @example “”
     *
     * @var string
     */
    public $category;

    /**
     * @description The content of the command, which is Base64-encoded.
     *
     *   If ContentEncoding is set to PlainText in the request, the original command content is returned.
     *   If ContentEncoding is set to Base64 in the request, the Base64-encoded command content is returned.
     *
     * @example Y2QgL3Jvb3Q=
     *
     * @var string
     */
    public $commandContent;

    /**
     * @description The command ID.
     *
     * @example c-hz01272yr52****
     *
     * @var string
     */
    public $commandId;

    /**
     * @description The time when the command was created.
     *
     * @example 2020-11-17T06:52Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the command.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the custom parameter feature is enabled for the command.
     *
     * @example true
     *
     * @var bool
     */
    public $enableParameter;

    /**
     * @description The number of tasks created by using the command.
     *
     * @example 2
     *
     * @var int
     */
    public $invokeTimes;

    /**
     * @description Indicates whether the common command is of the latest version. If multiple common commands from the same provider (`Provider`) belong to the same category and have the same name, these commands are different versions of the same command. This parameter is not returned for the Cloud Assistant commands that you created.
     *
     * @example true
     *
     * @var bool
     */
    public $latest;

    /**
     * @description The launcher for script execution. The value cannot exceed 1 KB in length.
     *
     * >  This parameter is not publicly available.
     * @example python3 -u {{ACS::ScriptFileName|Ext(".py")}}
     *
     * @var string
     */
    public $launcher;

    /**
     * @description The name of the command.
     *
     * @example testName
     *
     * @var string
     */
    public $name;

    /**
     * @description The custom parameters.
     *
     * @var parameterDefinitions
     */
    public $parameterDefinitions;

    /**
     * @description The custom parameter names that are parsed from the command content specified when the command was created. If the custom parameter feature is disabled, an empty list is returned.
     *
     * @var parameterNames
     */
    public $parameterNames;

    /**
     * @description The provider of the common command.
     *
     * @example AlibabaCloud.ECS.GuestOS
     *
     * @var string
     */
    public $provider;

    /**
     * @description The ID of the resource group to which the command belongs.
     *
     * @example rg-123******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags of the command.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The timeout period. Unit: seconds.
     *
     * @example 3600
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The type of the command.
     *
     * @example RunShellScript
     *
     * @var string
     */
    public $type;

    /**
     * @description The version of the common command. If multiple common commands from the same provider (`Provider`) belong to the same category and have the same name, these commands are different versions of the same command. This parameter is not returned for the Cloud Assistant commands that you created.
     *
     * @example 1
     *
     * @var int
     */
    public $version;

    /**
     * @description The execution path of the command.
     *
     * @example /home/
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'category'             => 'Category',
        'commandContent'       => 'CommandContent',
        'commandId'            => 'CommandId',
        'creationTime'         => 'CreationTime',
        'description'          => 'Description',
        'enableParameter'      => 'EnableParameter',
        'invokeTimes'          => 'InvokeTimes',
        'latest'               => 'Latest',
        'launcher'             => 'Launcher',
        'name'                 => 'Name',
        'parameterDefinitions' => 'ParameterDefinitions',
        'parameterNames'       => 'ParameterNames',
        'provider'             => 'Provider',
        'resourceGroupId'      => 'ResourceGroupId',
        'tags'                 => 'Tags',
        'timeout'              => 'Timeout',
        'type'                 => 'Type',
        'version'              => 'Version',
        'workingDir'           => 'WorkingDir',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enableParameter) {
            $res['EnableParameter'] = $this->enableParameter;
        }
        if (null !== $this->invokeTimes) {
            $res['InvokeTimes'] = $this->invokeTimes;
        }
        if (null !== $this->latest) {
            $res['Latest'] = $this->latest;
        }
        if (null !== $this->launcher) {
            $res['Launcher'] = $this->launcher;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parameterDefinitions) {
            $res['ParameterDefinitions'] = null !== $this->parameterDefinitions ? $this->parameterDefinitions->toMap() : null;
        }
        if (null !== $this->parameterNames) {
            $res['ParameterNames'] = null !== $this->parameterNames ? $this->parameterNames->toMap() : null;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return command
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnableParameter'])) {
            $model->enableParameter = $map['EnableParameter'];
        }
        if (isset($map['InvokeTimes'])) {
            $model->invokeTimes = $map['InvokeTimes'];
        }
        if (isset($map['Latest'])) {
            $model->latest = $map['Latest'];
        }
        if (isset($map['Launcher'])) {
            $model->launcher = $map['Launcher'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParameterDefinitions'])) {
            $model->parameterDefinitions = parameterDefinitions::fromMap($map['ParameterDefinitions']);
        }
        if (isset($map['ParameterNames'])) {
            $model->parameterNames = parameterNames::fromMap($map['ParameterNames']);
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
