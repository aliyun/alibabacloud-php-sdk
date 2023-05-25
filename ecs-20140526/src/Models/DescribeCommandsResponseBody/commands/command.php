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
     * @description Indicates whether the common command is of the latest version. If multiple common commands from the same provider (`Provider`) belong to the same category and have the same name, these commands are different versions of the same command. This parameter is not returned for the Cloud Assistant commands that you created.
     *
     * @example “”
     *
     * @var string
     */
    public $category;

    /**
     * @description The category of the common command.
     *
     * @example Y2QgL3Jvb3Q=
     *
     * @var string
     */
    public $commandContent;

    /**
     * @description The working directory of the command on the Elastic Compute Service (ECS) instance.
     *
     * @example c-hz01272yr52****
     *
     * @var string
     */
    public $commandId;

    /**
     * @description The type of the command.
     *
     * @example 2020-11-17T06:52Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The version of the common command. If multiple common commands from the same provider (`Provider`) belong to the same category and have the same name, these commands are different versions of the same command. This parameter is not returned for the Cloud Assistant commands that you created.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The custom parameter names that are parsed from the command content specified when the command was created. If the custom parameter feature is not enabled, an empty list is returned.
     *
     * @example true
     *
     * @var bool
     */
    public $enableParameter;

    /**
     * @description The ID of the command.
     *
     * @example 2
     *
     * @var int
     */
    public $invokeTimes;

    /**
     * @description The name of the command.
     *
     * @example true
     *
     * @var bool
     */
    public $latest;

    /**
     * @description Indicates whether the custom parameter feature was enabled for the command.
     *
     * @example testName
     *
     * @var string
     */
    public $name;

    /**
     * @description Details about the custom parameters.
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
     * @description The Base64-encoded command content.
     *
     * @example AlibabaCloud.ECS.GuestOS
     *
     * @var string
     */
    public $provider;

    /**
     * @description The tags added to the command.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The number of tasks created by using the command.
     *
     * @example 3600
     *
     * @var int
     */
    public $timeout;

    /**
     * @description The timeout period.
     *
     * @example RunShellScript
     *
     * @var string
     */
    public $type;

    /**
     * @description The provider of the common command.
     *
     * @example 1
     *
     * @var int
     */
    public $version;

    /**
     * @description The description of the command.
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
        'name'                 => 'Name',
        'parameterDefinitions' => 'ParameterDefinitions',
        'parameterNames'       => 'ParameterNames',
        'provider'             => 'Provider',
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
