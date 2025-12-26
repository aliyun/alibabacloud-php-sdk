<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAILangStudio\V20240710\Models\Flow\runtime;

class Flow extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var string
     */
    public $codeModeRunInfo;

    /**
     * @var string
     */
    public $createFrom;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @var string
     */
    public $flowStoragePath;

    /**
     * @var string
     */
    public $flowTemplateId;

    /**
     * @var string
     */
    public $flowType;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var runtime
     */
    public $runtime;

    /**
     * @var string
     */
    public $runtimeId;

    /**
     * @var string
     */
    public $sourceUri;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $workDir;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'codeModeRunInfo' => 'CodeModeRunInfo',
        'createFrom' => 'CreateFrom',
        'creator' => 'Creator',
        'description' => 'Description',
        'flowId' => 'FlowId',
        'flowName' => 'FlowName',
        'flowStoragePath' => 'FlowStoragePath',
        'flowTemplateId' => 'FlowTemplateId',
        'flowType' => 'FlowType',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'runtime' => 'Runtime',
        'runtimeId' => 'RuntimeId',
        'sourceUri' => 'SourceUri',
        'version' => 'Version',
        'workDir' => 'WorkDir',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->runtime) {
            $this->runtime->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->codeModeRunInfo) {
            $res['CodeModeRunInfo'] = $this->codeModeRunInfo;
        }

        if (null !== $this->createFrom) {
            $res['CreateFrom'] = $this->createFrom;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }

        if (null !== $this->flowStoragePath) {
            $res['FlowStoragePath'] = $this->flowStoragePath;
        }

        if (null !== $this->flowTemplateId) {
            $res['FlowTemplateId'] = $this->flowTemplateId;
        }

        if (null !== $this->flowType) {
            $res['FlowType'] = $this->flowType;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->runtime) {
            $res['Runtime'] = null !== $this->runtime ? $this->runtime->toArray($noStream) : $this->runtime;
        }

        if (null !== $this->runtimeId) {
            $res['RuntimeId'] = $this->runtimeId;
        }

        if (null !== $this->sourceUri) {
            $res['SourceUri'] = $this->sourceUri;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->workDir) {
            $res['WorkDir'] = $this->workDir;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

        if (isset($map['CodeModeRunInfo'])) {
            $model->codeModeRunInfo = $map['CodeModeRunInfo'];
        }

        if (isset($map['CreateFrom'])) {
            $model->createFrom = $map['CreateFrom'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }

        if (isset($map['FlowStoragePath'])) {
            $model->flowStoragePath = $map['FlowStoragePath'];
        }

        if (isset($map['FlowTemplateId'])) {
            $model->flowTemplateId = $map['FlowTemplateId'];
        }

        if (isset($map['FlowType'])) {
            $model->flowType = $map['FlowType'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['Runtime'])) {
            $model->runtime = runtime::fromMap($map['Runtime']);
        }

        if (isset($map['RuntimeId'])) {
            $model->runtimeId = $map['RuntimeId'];
        }

        if (isset($map['SourceUri'])) {
            $model->sourceUri = $map['SourceUri'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['WorkDir'])) {
            $model->workDir = $map['WorkDir'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
