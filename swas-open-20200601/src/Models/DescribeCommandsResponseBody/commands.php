<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCommandsResponseBody;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCommandsResponseBody\commands\parameterDefinitions;
use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCommandsResponseBody\commands\tags;
use AlibabaCloud\Tea\Model;

class commands extends Model
{
    /**
     * @description The content of the command.
     *
     * @example cat /etc/ssh/sshd_config
     *
     * @var string
     */
    public $commandContent;

    /**
     * @description The command ID.
     *
     * @example c-gov1k1tqwi9****
     *
     * @var string
     */
    public $commandId;

    /**
     * @description The time when the command was created.
     *
     * @example 2023-01-05T06:38:53Z
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
     * @example false
     *
     * @var bool
     */
    public $enableParameter;

    /**
     * @description The name of the command.
     *
     * @example testName
     *
     * @var string
     */
    public $name;

    /**
     * @description Details of the custom parameter.
     *
     * @var parameterDefinitions[]
     */
    public $parameterDefinitions;

    /**
     * @description The custom parameter names that are parsed from the command content specified when the command was created. The custom parameter names are returned in the list format. If the custom parameter feature is disabled, an empty list is returned.
     *
     * @var string[]
     */
    public $parameterNames;

    /**
     * @description The provider of the command.
     *
     * @example User
     *
     * @var string
     */
    public $provider;

    /**
     * @description The resource group ID.
     *
     * @example rg-aek2bti7cf7****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags that are bound to the command.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The timeout period of the command.
     *
     * @example 60
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
     * @description The execution path of the command.
     *
     * @example /home
     *
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'commandContent'       => 'CommandContent',
        'commandId'            => 'CommandId',
        'creationTime'         => 'CreationTime',
        'description'          => 'Description',
        'enableParameter'      => 'EnableParameter',
        'name'                 => 'Name',
        'parameterDefinitions' => 'ParameterDefinitions',
        'parameterNames'       => 'ParameterNames',
        'provider'             => 'Provider',
        'resourceGroupId'      => 'ResourceGroupId',
        'tags'                 => 'Tags',
        'timeout'              => 'Timeout',
        'type'                 => 'Type',
        'workingDir'           => 'WorkingDir',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parameterDefinitions) {
            $res['ParameterDefinitions'] = [];
            if (null !== $this->parameterDefinitions && \is_array($this->parameterDefinitions)) {
                $n = 0;
                foreach ($this->parameterDefinitions as $item) {
                    $res['ParameterDefinitions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->parameterNames) {
            $res['ParameterNames'] = $this->parameterNames;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commands
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParameterDefinitions'])) {
            if (!empty($map['ParameterDefinitions'])) {
                $model->parameterDefinitions = [];
                $n                           = 0;
                foreach ($map['ParameterDefinitions'] as $item) {
                    $model->parameterDefinitions[$n++] = null !== $item ? parameterDefinitions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ParameterNames'])) {
            if (!empty($map['ParameterNames'])) {
                $model->parameterNames = $map['ParameterNames'];
            }
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
