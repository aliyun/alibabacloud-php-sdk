<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class CreateTemplateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appRevision;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $inputsExpressionShrink;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $outputsExpressionShrink;

    /**
     * @var string
     */
    public $rootEntity;

    /**
     * @var string
     */
    public $templateName;

    /**
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
