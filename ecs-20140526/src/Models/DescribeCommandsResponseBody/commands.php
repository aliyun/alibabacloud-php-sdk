<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCommandsResponseBody;

use AlibabaCloud\Tea\Model;

class commands extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $parameterNames;

    /**
     * @var int
     */
    public $invokeTimes;

    /**
     * @var string
     */
    public $workingDir;

    /**
     * @var string
     */
    public $description;

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
    public $name;

    /**
     * @var bool
     */
    public $enableParameter;
    protected $_name = [
        'creationTime'    => 'CreationTime',
        'timeout'         => 'Timeout',
        'type'            => 'Type',
        'parameterNames'  => 'ParameterNames',
        'invokeTimes'     => 'InvokeTimes',
        'workingDir'      => 'WorkingDir',
        'description'     => 'Description',
        'commandContent'  => 'CommandContent',
        'commandId'       => 'CommandId',
        'name'            => 'Name',
        'enableParameter' => 'EnableParameter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->parameterNames) {
            $res['ParameterNames'] = $this->parameterNames;
        }
        if (null !== $this->invokeTimes) {
            $res['InvokeTimes'] = $this->invokeTimes;
        }
        if (null !== $this->workingDir) {
            $res['WorkingDir'] = $this->workingDir;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
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
     * @return commands
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ParameterNames'])) {
            if (!empty($map['ParameterNames'])) {
                $model->parameterNames = $map['ParameterNames'];
            }
        }
        if (isset($map['InvokeTimes'])) {
            $model->invokeTimes = $map['InvokeTimes'];
        }
        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
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
