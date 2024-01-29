<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class UpdateTemplateShrinkRequest extends Model
{
    /**
     * @example This is a test template
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $inputsExpressionShrink;

    /**
     * @example {"key": "value"}
     *
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $outputsExpressionShrink;

    /**
     * @example test-entity
     *
     * @var string
     */
    public $rootEntity;

    /**
     * @example test-template
     *
     * @var string
     */
    public $templateName;

    /**
     * @example test-workspace
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
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
     * @return UpdateTemplateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
