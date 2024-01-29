<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models\ListTemplatesResponseBody;

use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListTemplatesResponseBody\templates\inputsExpression;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\ListTemplatesResponseBody\templates\outputsExpression;
use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @example my-app
     *
     * @var string
     */
    public $appName;

    /**
     * @example 1
     *
     * @var string
     */
    public $appRevision;

    /**
     * @example 2021-06-10T13:30:20.414557061Z
     *
     * @var string
     */
    public $createTime;

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
     * @var string[]
     */
    public $labels;

    /**
     * @example 2021-06-10T13:30:20.414557061Z
     *
     * @var string
     */
    public $lastModifiedTime;

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
        'appName'           => 'AppName',
        'appRevision'       => 'AppRevision',
        'createTime'        => 'CreateTime',
        'description'       => 'Description',
        'inputsExpression'  => 'InputsExpression',
        'labels'            => 'Labels',
        'lastModifiedTime'  => 'LastModifiedTime',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
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
     * @return templates
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
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
