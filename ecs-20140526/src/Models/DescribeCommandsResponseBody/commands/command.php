<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponseBody\commands;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponseBody\commands\command\parameterDefinitions;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponseBody\commands\command\parameterNames;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponseBody\commands\command\tags;

class command extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $commandContent;

    /**
     * @var string
     */
    public $commandId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableParameter;

    /**
     * @var int
     */
    public $invokeTimes;

    /**
     * @var bool
     */
    public $latest;

    /**
     * @var string
     */
    public $launcher;

    /**
     * @var string
     */
    public $name;

    /**
     * @var parameterDefinitions
     */
    public $parameterDefinitions;

    /**
     * @var parameterNames
     */
    public $parameterNames;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $version;

    /**
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'category' => 'Category',
        'commandContent' => 'CommandContent',
        'commandId' => 'CommandId',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'enableParameter' => 'EnableParameter',
        'invokeTimes' => 'InvokeTimes',
        'latest' => 'Latest',
        'launcher' => 'Launcher',
        'name' => 'Name',
        'parameterDefinitions' => 'ParameterDefinitions',
        'parameterNames' => 'ParameterNames',
        'provider' => 'Provider',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
        'timeout' => 'Timeout',
        'type' => 'Type',
        'version' => 'Version',
        'workingDir' => 'WorkingDir',
    ];

    public function validate()
    {
        if (null !== $this->parameterDefinitions) {
            $this->parameterDefinitions->validate();
        }
        if (null !== $this->parameterNames) {
            $this->parameterNames->validate();
        }
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['ParameterDefinitions'] = null !== $this->parameterDefinitions ? $this->parameterDefinitions->toArray($noStream) : $this->parameterDefinitions;
        }

        if (null !== $this->parameterNames) {
            $res['ParameterNames'] = null !== $this->parameterNames ? $this->parameterNames->toArray($noStream) : $this->parameterNames;
        }

        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
