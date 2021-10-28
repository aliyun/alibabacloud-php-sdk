<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class CreateRunShrinkRequest extends Model
{
    /**
     * @description 应用名称
     *
     * @var string
     */
    public $appName;

    /**
     * @description 应用版本号
     *
     * @var string
     */
    public $appRevision;

    /**
     * @description 任务幂等token
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 默认运行时
     *
     * @var string
     */
    public $defaultRuntime;

    /**
     * @description 任务描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 任务执行目录
     *
     * @var string
     */
    public $executeDirectory;

    /**
     * @description 任务配置
     *
     * @var string
     */
    public $executeOptionsShrink;

    /**
     * @description 任务输入
     *
     * @var string
     */
    public $inputs;

    /**
     * @description 任务标签
     *
     * @var string
     */
    public $labels;

    /**
     * @description 任务输出拷贝目录
     *
     * @var string
     */
    public $outputFolder;

    /**
     * @description 任务名称
     *
     * @var string
     */
    public $runName;

    /**
     * @description 工作空间名字
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'appName'              => 'AppName',
        'appRevision'          => 'AppRevision',
        'clientToken'          => 'ClientToken',
        'defaultRuntime'       => 'DefaultRuntime',
        'description'          => 'Description',
        'executeDirectory'     => 'ExecuteDirectory',
        'executeOptionsShrink' => 'ExecuteOptions',
        'inputs'               => 'Inputs',
        'labels'               => 'Labels',
        'outputFolder'         => 'OutputFolder',
        'runName'              => 'RunName',
        'workspace'            => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appRevision) {
            $res['AppRevision'] = $this->appRevision;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->defaultRuntime) {
            $res['DefaultRuntime'] = $this->defaultRuntime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->executeDirectory) {
            $res['ExecuteDirectory'] = $this->executeDirectory;
        }
        if (null !== $this->executeOptionsShrink) {
            $res['ExecuteOptions'] = $this->executeOptionsShrink;
        }
        if (null !== $this->inputs) {
            $res['Inputs'] = $this->inputs;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->outputFolder) {
            $res['OutputFolder'] = $this->outputFolder;
        }
        if (null !== $this->runName) {
            $res['RunName'] = $this->runName;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRunShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppRevision'])) {
            $model->appRevision = $map['AppRevision'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DefaultRuntime'])) {
            $model->defaultRuntime = $map['DefaultRuntime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExecuteDirectory'])) {
            $model->executeDirectory = $map['ExecuteDirectory'];
        }
        if (isset($map['ExecuteOptions'])) {
            $model->executeOptionsShrink = $map['ExecuteOptions'];
        }
        if (isset($map['Inputs'])) {
            $model->inputs = $map['Inputs'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['OutputFolder'])) {
            $model->outputFolder = $map['OutputFolder'];
        }
        if (isset($map['RunName'])) {
            $model->runName = $map['RunName'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
