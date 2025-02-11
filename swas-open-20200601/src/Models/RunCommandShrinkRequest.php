<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Dara\Model;

class RunCommandShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $commandContent;
    /**
     * @var bool
     */
    public $enableParameter;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $parametersShrink;
    /**
     * @var string
     */
    public $regionId;
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
    public $windowsPasswordName;
    /**
     * @var string
     */
    public $workingDir;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
