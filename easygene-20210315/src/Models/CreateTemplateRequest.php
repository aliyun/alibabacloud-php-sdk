<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\SDK\EasyGene\V20210315\Models\CreateTemplateRequest\inputsExpression;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\CreateTemplateRequest\outputsExpression;
use AlibabaCloud\Tea\Model;

class CreateTemplateRequest extends Model
{
    /**
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
     * @var inputsExpression[]
     */
    public $inputsExpression;

    /**
     * @example {"key1": "value1"}
     *
     * @var string
     */
    public $labels;

    /**
     * @var outputsExpression[]
     */
    public $outputsExpression;

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
        'appName'           => 'AppName',
        'appRevision'       => 'AppRevision',
        'clientToken'       => 'ClientToken',
        'description'       => 'Description',
        'inputsExpression'  => 'InputsExpression',
        'labels'            => 'Labels',
        'outputsExpression' => 'OutputsExpression',
        'revisionTag'       => 'RevisionTag',
        'rootEntity'        => 'RootEntity',
        'templateName'      => 'TemplateName',
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
        if (null !== $this->appRevision) {
            $res['AppRevision'] = $this->appRevision;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->inputsExpression) {
            $res['InputsExpression'] = [];
            if (null !== $this->inputsExpression && \is_array($this->inputsExpression)) {
                $n = 0;
                foreach ($this->inputsExpression as $item) {
                    $res['InputsExpression'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->outputsExpression) {
            $res['OutputsExpression'] = [];
            if (null !== $this->outputsExpression && \is_array($this->outputsExpression)) {
                $n = 0;
                foreach ($this->outputsExpression as $item) {
                    $res['OutputsExpression'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return CreateTemplateRequest
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
            if (!empty($map['InputsExpression'])) {
                $model->inputsExpression = [];
                $n                       = 0;
                foreach ($map['InputsExpression'] as $item) {
                    $model->inputsExpression[$n++] = null !== $item ? inputsExpression::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['OutputsExpression'])) {
            if (!empty($map['OutputsExpression'])) {
                $model->outputsExpression = [];
                $n                        = 0;
                foreach ($map['OutputsExpression'] as $item) {
                    $model->outputsExpression[$n++] = null !== $item ? outputsExpression::fromMap($item) : $item;
                }
            }
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
