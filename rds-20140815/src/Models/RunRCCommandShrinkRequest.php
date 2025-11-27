<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class RunRCCommandShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $commandContent;

    /**
     * @var string
     */
    public $containerId;

    /**
     * @var string
     */
    public $containerName;

    /**
     * @var string
     */
    public $contentEncoding;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableParameter;

    /**
     * @var string
     */
    public $frequency;

    /**
     * @var string
     */
    public $instanceIdsShrink;

    /**
     * @var bool
     */
    public $keepCommand;

    /**
     * @var string
     */
    public $launcher;

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
     * @var string
     */
    public $repeatMode;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceTagsShrink;

    /**
     * @var string
     */
    public $tagsShrink;

    /**
     * @var string
     */
    public $terminationMode;

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
    public $username;

    /**
     * @var string
     */
    public $windowsPasswordName;

    /**
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'commandContent' => 'CommandContent',
        'containerId' => 'ContainerId',
        'containerName' => 'ContainerName',
        'contentEncoding' => 'ContentEncoding',
        'description' => 'Description',
        'enableParameter' => 'EnableParameter',
        'frequency' => 'Frequency',
        'instanceIdsShrink' => 'InstanceIds',
        'keepCommand' => 'KeepCommand',
        'launcher' => 'Launcher',
        'name' => 'Name',
        'parametersShrink' => 'Parameters',
        'regionId' => 'RegionId',
        'repeatMode' => 'RepeatMode',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceTagsShrink' => 'ResourceTags',
        'tagsShrink' => 'Tags',
        'terminationMode' => 'TerminationMode',
        'timeout' => 'Timeout',
        'type' => 'Type',
        'username' => 'Username',
        'windowsPasswordName' => 'WindowsPasswordName',
        'workingDir' => 'WorkingDir',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }

        if (null !== $this->containerId) {
            $res['ContainerId'] = $this->containerId;
        }

        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
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

        if (null !== $this->instanceIdsShrink) {
            $res['InstanceIds'] = $this->instanceIdsShrink;
        }

        if (null !== $this->keepCommand) {
            $res['KeepCommand'] = $this->keepCommand;
        }

        if (null !== $this->launcher) {
            $res['Launcher'] = $this->launcher;
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

        if (null !== $this->repeatMode) {
            $res['RepeatMode'] = $this->repeatMode;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceTagsShrink) {
            $res['ResourceTags'] = $this->resourceTagsShrink;
        }

        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        if (null !== $this->terminationMode) {
            $res['TerminationMode'] = $this->terminationMode;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        if (null !== $this->windowsPasswordName) {
            $res['WindowsPasswordName'] = $this->windowsPasswordName;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }

        if (isset($map['ContainerId'])) {
            $model->containerId = $map['ContainerId'];
        }

        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
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

        if (isset($map['InstanceIds'])) {
            $model->instanceIdsShrink = $map['InstanceIds'];
        }

        if (isset($map['KeepCommand'])) {
            $model->keepCommand = $map['KeepCommand'];
        }

        if (isset($map['Launcher'])) {
            $model->launcher = $map['Launcher'];
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

        if (isset($map['RepeatMode'])) {
            $model->repeatMode = $map['RepeatMode'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceTags'])) {
            $model->resourceTagsShrink = $map['ResourceTags'];
        }

        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        if (isset($map['TerminationMode'])) {
            $model->terminationMode = $map['TerminationMode'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        if (isset($map['WindowsPasswordName'])) {
            $model->windowsPasswordName = $map['WindowsPasswordName'];
        }

        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
