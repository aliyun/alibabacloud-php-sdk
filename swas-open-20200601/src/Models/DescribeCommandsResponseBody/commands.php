<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCommandsResponseBody;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCommandsResponseBody\commands\parameterDefinitions;
use AlibabaCloud\Tea\Model;

class commands extends Model
{
    /**
     * @example cat /etc/ssh/sshd_config
     *
     * @var string
     */
    public $commandContent;

    /**
     * @example c-gov1k1tqwi9****
     *
     * @var string
     */
    public $commandId;

    /**
     * @example 2023-01-05T06:38:53Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableParameter;

    /**
     * @example testName
     *
     * @var string
     */
    public $name;

    /**
     * @var parameterDefinitions[]
     */
    public $parameterDefinitions;

    /**
     * @var string[]
     */
    public $parameterNames;

    /**
     * @example User
     *
     * @var string
     */
    public $provider;

    /**
     * @example 60
     *
     * @var int
     */
    public $timeout;

    /**
     * @example RunShellScript
     *
     * @var string
     */
    public $type;

    /**
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
