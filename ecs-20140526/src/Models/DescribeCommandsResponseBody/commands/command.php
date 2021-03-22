<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponseBody\commands;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponseBody\commands\command\parameterNames;
use AlibabaCloud\Tea\Model;

class command extends Model
{
    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var parameterNames
     */
    public $parameterNames;

    /**
     * @var int
     */
    public $invokeTimes;

    /**
     * @var string
     */
    public $commandId;

    /**
     * @var string
     */
    public $workingDir;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $version;

    /**
     * @var string
     */
    public $commandContent;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $category;

    /**
     * @var bool
     */
    public $latest;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $enableParameter;
    protected $_name = [
        'timeout'         => 'Timeout',
        'type'            => 'Type',
        'creationTime'    => 'CreationTime',
        'parameterNames'  => 'ParameterNames',
        'invokeTimes'     => 'InvokeTimes',
        'commandId'       => 'CommandId',
        'workingDir'      => 'WorkingDir',
        'description'     => 'Description',
        'version'         => 'Version',
        'commandContent'  => 'CommandContent',
        'provider'        => 'Provider',
        'category'        => 'Category',
        'latest'          => 'Latest',
        'name'            => 'Name',
        'enableParameter' => 'EnableParameter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->parameterNames) {
            $res['ParameterNames'] = null !== $this->parameterNames ? $this->parameterNames->toMap() : null;
        }
        if (null !== $this->invokeTimes) {
            $res['InvokeTimes'] = $this->invokeTimes;
        }
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
        }
        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->latest) {
            $res['Latest'] = $this->latest;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->enableParameter) {
            $res['EnableParameter'] = $this->enableParameter;
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
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ParameterNames'])) {
            $model->parameterNames = parameterNames::fromMap($map['ParameterNames']);
        }
        if (isset($map['InvokeTimes'])) {
            $model->invokeTimes = $map['InvokeTimes'];
        }
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Latest'])) {
            $model->latest = $map['Latest'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['EnableParameter'])) {
            $model->enableParameter = $map['EnableParameter'];
        }

        return $model;
    }
}
