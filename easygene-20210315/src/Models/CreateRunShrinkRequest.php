<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class CreateRunShrinkRequest extends Model
{
    /**
     * @example Sentieon
     *
     * @var string
     */
    public $appName;

    /**
     * @example 16
     *
     * @var string
     */
    public $appRevision;

    /**
     * @example MTIzNDU2P1dvcmtzcGFjZT93cy1mMDE4OTgxNGU1ZTkK
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example {}
     *
     * @var string
     */
    public $defaultRuntime;

    /**
     * @example test run
     *
     * @var string
     */
    public $description;

    /**
     * @example oss://my-bucket/exec/
     *
     * @var string
     */
    public $executeDirectory;

    /**
     * @example { 	"CallCaching": true,     "FailureMode": "NoNewCalls" }
     *
     * @var string
     */
    public $executeOptionsShrink;

    /**
     * @example {         "workflow1.task1.param1": "helloooo.txt",         "workflow1.task1.param2": "abc",         "workflow1.task2.param1": "new_helloooo.txt",         "workflow1.task2.param2": "def"     }
     *
     * @var string
     */
    public $inputs;

    /**
     * @example {"env": "test"}
     *
     * @var string
     */
    public $labels;

    /**
     * @example oss://my-bucket/output/
     *
     * @var string
     */
    public $outputFolder;

    /**
     * @example ProduceVersion
     *
     * @var string
     */
    public $revisionTag;

    /**
     * @example TestRole
     *
     * @var string
     */
    public $role;

    /**
     * @example wgs_sentieon_hc_with_qc_NGPTS1900029301
     *
     * @var string
     */
    public $runName;

    /**
     * @example test-workspace
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
        'revisionTag'          => 'RevisionTag',
        'role'                 => 'Role',
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
        if (null !== $this->revisionTag) {
            $res['RevisionTag'] = $this->revisionTag;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
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
        if (isset($map['RevisionTag'])) {
            $model->revisionTag = $map['RevisionTag'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
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
