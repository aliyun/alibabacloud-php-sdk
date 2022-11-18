<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class CreateSubmissionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $defaultRuntime;

    /**
     * @var string
     */
    public $entityNamesShrink;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $executeDirectory;

    /**
     * @var string
     */
    public $executeOptions;

    /**
     * @var string
     */
    public $inputs;

    /**
     * @var string
     */
    public $outputFolder;

    /**
     * @var string
     */
    public $outputs;

    /**
     * @var string
     */
    public $revision;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'appName'           => 'AppName',
        'clientToken'       => 'ClientToken',
        'defaultRuntime'    => 'DefaultRuntime',
        'entityNamesShrink' => 'EntityNames',
        'entityType'        => 'EntityType',
        'executeDirectory'  => 'ExecuteDirectory',
        'executeOptions'    => 'ExecuteOptions',
        'inputs'            => 'Inputs',
        'outputFolder'      => 'OutputFolder',
        'outputs'           => 'Outputs',
        'revision'          => 'Revision',
        'workspace'         => 'Workspace',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->defaultRuntime) {
            $res['DefaultRuntime'] = $this->defaultRuntime;
        }
        if (null !== $this->entityNamesShrink) {
            $res['EntityNames'] = $this->entityNamesShrink;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->executeDirectory) {
            $res['ExecuteDirectory'] = $this->executeDirectory;
        }
        if (null !== $this->executeOptions) {
            $res['ExecuteOptions'] = $this->executeOptions;
        }
        if (null !== $this->inputs) {
            $res['Inputs'] = $this->inputs;
        }
        if (null !== $this->outputFolder) {
            $res['OutputFolder'] = $this->outputFolder;
        }
        if (null !== $this->outputs) {
            $res['Outputs'] = $this->outputs;
        }
        if (null !== $this->revision) {
            $res['Revision'] = $this->revision;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSubmissionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DefaultRuntime'])) {
            $model->defaultRuntime = $map['DefaultRuntime'];
        }
        if (isset($map['EntityNames'])) {
            $model->entityNamesShrink = $map['EntityNames'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['ExecuteDirectory'])) {
            $model->executeDirectory = $map['ExecuteDirectory'];
        }
        if (isset($map['ExecuteOptions'])) {
            $model->executeOptions = $map['ExecuteOptions'];
        }
        if (isset($map['Inputs'])) {
            $model->inputs = $map['Inputs'];
        }
        if (isset($map['OutputFolder'])) {
            $model->outputFolder = $map['OutputFolder'];
        }
        if (isset($map['Outputs'])) {
            $model->outputs = $map['Outputs'];
        }
        if (isset($map['Revision'])) {
            $model->revision = $map['Revision'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
