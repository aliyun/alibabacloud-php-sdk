<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetExplorerTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetExplorerTaskResponseBody\task\uploadSignature;

class task extends Model
{
    /**
     * @var bool
     */
    public $autoApply;

    /**
     * @var bool
     */
    public $autoDestroy;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $currentJobId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $explorerTaskId;

    /**
     * @var bool
     */
    public $initModuleState;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $skipPropertyValidation;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskOutputPath;

    /**
     * @var string
     */
    public $terraformVersion;

    /**
     * @var string
     */
    public $triggerValue;

    /**
     * @var uploadSignature
     */
    public $uploadSignature;
    protected $_name = [
        'autoApply' => 'autoApply',
        'autoDestroy' => 'autoDestroy',
        'createTime' => 'createTime',
        'currentJobId' => 'currentJobId',
        'description' => 'description',
        'explorerTaskId' => 'explorerTaskId',
        'initModuleState' => 'initModuleState',
        'moduleId' => 'moduleId',
        'moduleVersion' => 'moduleVersion',
        'name' => 'name',
        'skipPropertyValidation' => 'skipPropertyValidation',
        'status' => 'status',
        'taskOutputPath' => 'taskOutputPath',
        'terraformVersion' => 'terraformVersion',
        'triggerValue' => 'triggerValue',
        'uploadSignature' => 'uploadSignature',
    ];

    public function validate()
    {
        if (null !== $this->uploadSignature) {
            $this->uploadSignature->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoApply) {
            $res['autoApply'] = $this->autoApply;
        }

        if (null !== $this->autoDestroy) {
            $res['autoDestroy'] = $this->autoDestroy;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->currentJobId) {
            $res['currentJobId'] = $this->currentJobId;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->explorerTaskId) {
            $res['explorerTaskId'] = $this->explorerTaskId;
        }

        if (null !== $this->initModuleState) {
            $res['initModuleState'] = $this->initModuleState;
        }

        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }

        if (null !== $this->moduleVersion) {
            $res['moduleVersion'] = $this->moduleVersion;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->skipPropertyValidation) {
            $res['skipPropertyValidation'] = $this->skipPropertyValidation;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskOutputPath) {
            $res['taskOutputPath'] = $this->taskOutputPath;
        }

        if (null !== $this->terraformVersion) {
            $res['terraformVersion'] = $this->terraformVersion;
        }

        if (null !== $this->triggerValue) {
            $res['triggerValue'] = $this->triggerValue;
        }

        if (null !== $this->uploadSignature) {
            $res['uploadSignature'] = null !== $this->uploadSignature ? $this->uploadSignature->toArray($noStream) : $this->uploadSignature;
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
        if (isset($map['autoApply'])) {
            $model->autoApply = $map['autoApply'];
        }

        if (isset($map['autoDestroy'])) {
            $model->autoDestroy = $map['autoDestroy'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['currentJobId'])) {
            $model->currentJobId = $map['currentJobId'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['explorerTaskId'])) {
            $model->explorerTaskId = $map['explorerTaskId'];
        }

        if (isset($map['initModuleState'])) {
            $model->initModuleState = $map['initModuleState'];
        }

        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }

        if (isset($map['moduleVersion'])) {
            $model->moduleVersion = $map['moduleVersion'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['skipPropertyValidation'])) {
            $model->skipPropertyValidation = $map['skipPropertyValidation'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskOutputPath'])) {
            $model->taskOutputPath = $map['taskOutputPath'];
        }

        if (isset($map['terraformVersion'])) {
            $model->terraformVersion = $map['terraformVersion'];
        }

        if (isset($map['triggerValue'])) {
            $model->triggerValue = $map['triggerValue'];
        }

        if (isset($map['uploadSignature'])) {
            $model->uploadSignature = uploadSignature::fromMap($map['uploadSignature']);
        }

        return $model;
    }
}
