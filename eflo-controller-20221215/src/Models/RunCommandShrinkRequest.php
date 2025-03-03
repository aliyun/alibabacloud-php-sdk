<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class RunCommandShrinkRequest extends Model
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
    public $commandId;
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
    public $launcher;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $nodeIdListShrink;
    /**
     * @var string
     */
    public $parametersShrink;
    /**
     * @var string
     */
    public $repeatMode;
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
    public $username;
    /**
     * @var string
     */
    public $workingDir;
    protected $_name = [
        'clientToken'      => 'ClientToken',
        'commandContent'   => 'CommandContent',
        'commandId'        => 'CommandId',
        'contentEncoding'  => 'ContentEncoding',
        'description'      => 'Description',
        'enableParameter'  => 'EnableParameter',
        'frequency'        => 'Frequency',
        'launcher'         => 'Launcher',
        'name'             => 'Name',
        'nodeIdListShrink' => 'NodeIdList',
        'parametersShrink' => 'Parameters',
        'repeatMode'       => 'RepeatMode',
        'terminationMode'  => 'TerminationMode',
        'timeout'          => 'Timeout',
        'username'         => 'Username',
        'workingDir'       => 'WorkingDir',
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

        if (null !== $this->commandId) {
            $res['CommandId'] = $this->commandId;
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

        if (null !== $this->launcher) {
            $res['Launcher'] = $this->launcher;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nodeIdListShrink) {
            $res['NodeIdList'] = $this->nodeIdListShrink;
        }

        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
        }

        if (null !== $this->repeatMode) {
            $res['RepeatMode'] = $this->repeatMode;
        }

        if (null !== $this->terminationMode) {
            $res['TerminationMode'] = $this->terminationMode;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
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

        if (isset($map['CommandId'])) {
            $model->commandId = $map['CommandId'];
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

        if (isset($map['Launcher'])) {
            $model->launcher = $map['Launcher'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NodeIdList'])) {
            $model->nodeIdListShrink = $map['NodeIdList'];
        }

        if (isset($map['Parameters'])) {
            $model->parametersShrink = $map['Parameters'];
        }

        if (isset($map['RepeatMode'])) {
            $model->repeatMode = $map['RepeatMode'];
        }

        if (isset($map['TerminationMode'])) {
            $model->terminationMode = $map['TerminationMode'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        if (isset($map['WorkingDir'])) {
            $model->workingDir = $map['WorkingDir'];
        }

        return $model;
    }
}
