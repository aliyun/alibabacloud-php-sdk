<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class CreateTemplateShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example MyApp
     *
     * @var string
     */
    public $appName;

    /**
     * @example 4.1.4.1-v1.0
     *
     * @var string
     */
    public $appRevision;

    /**
     * @example GFjZT93cy1mMDE4OTgxNGU1ZTkK
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example This is a test template
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $inputsExpressionShrink;

    /**
     * @example {"key1": "value1"}
     *
     * @var string
     */
    public $labels;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $outputsExpressionShrink;

    /**
     * @example ProduceVersion
     *
     * @var string
     */
    public $revisionTag;

    /**
     * @example TestEntity
     *
     * @var string
     */
    public $rootEntity;

    /**
     * @description This parameter is required.
     *
     * @example test-template
     *
     * @var string
     */
    public $templateName;

    /**
     * @description This parameter is required.
     *
     * @example test-workspace
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'appName'                 => 'AppName',
        'appRevision'             => 'AppRevision',
        'clientToken'             => 'ClientToken',
        'description'             => 'Description',
        'inputsExpressionShrink'  => 'InputsExpression',
        'labels'                  => 'Labels',
        'outputsExpressionShrink' => 'OutputsExpression',
        'revisionTag'             => 'RevisionTag',
        'rootEntity'              => 'RootEntity',
        'templateName'            => 'TemplateName',
        'workspace'               => 'Workspace',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->inputsExpressionShrink) {
            $res['InputsExpression'] = $this->inputsExpressionShrink;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->outputsExpressionShrink) {
            $res['OutputsExpression'] = $this->outputsExpressionShrink;
        }
        if (null !== $this->revisionTag) {
            $res['RevisionTag'] = $this->revisionTag;
        }
        if (null !== $this->rootEntity) {
            $res['RootEntity'] = $this->rootEntity;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTemplateShrinkRequest
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InputsExpression'])) {
            $model->inputsExpressionShrink = $map['InputsExpression'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['OutputsExpression'])) {
            $model->outputsExpressionShrink = $map['OutputsExpression'];
        }
        if (isset($map['RevisionTag'])) {
            $model->revisionTag = $map['RevisionTag'];
        }
        if (isset($map['RootEntity'])) {
            $model->rootEntity = $map['RootEntity'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
