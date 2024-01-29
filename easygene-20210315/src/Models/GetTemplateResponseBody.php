<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetTemplateResponseBody\inputsExpression;
use AlibabaCloud\SDK\EasyGene\V20210315\Models\GetTemplateResponseBody\outputsExpression;
use AlibabaCloud\Tea\Model;

class GetTemplateResponseBody extends Model
{
    /**
     * @example MyApp
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
     * @example test template
     *
     * @var string
     */
    public $description;

    /**
     * @example easygene.cn-beijing.aliyuncs.com
     *
     * @var string
     */
    public $hostId;

    /**
     * @var inputsExpression[]
     */
    public $inputsExpression;

    /**
     * @var string[]
     */
    public $labels;

    /**
     * @example 2021-06-10T13:30:20.405878292Z
     *
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var outputsExpression[]
     */
    public $outputsExpression;

    /**
     * @example DA980AD0-158F-44F3-847D-5EAB96C0EB6B
     *
     * @var string
     */
    public $requestId;

    /**
     * @example produceVersion
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
     * @example EasyGene
     *
     * @var string
     */
    public $source;

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
        'hostId'            => 'HostId',
        'inputsExpression'  => 'InputsExpression',
        'labels'            => 'Labels',
        'lastModifiedTime'  => 'LastModifiedTime',
        'outputsExpression' => 'OutputsExpression',
        'requestId'         => 'RequestId',
        'revisionTag'       => 'RevisionTag',
        'rootEntity'        => 'RootEntity',
        'source'            => 'Source',
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
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->revisionTag) {
            $res['RevisionTag'] = $this->revisionTag;
        }
        if (null !== $this->rootEntity) {
            $res['RootEntity'] = $this->rootEntity;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
     * @return GetTemplateResponseBody
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
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RevisionTag'])) {
            $model->revisionTag = $map['RevisionTag'];
        }
        if (isset($map['RootEntity'])) {
            $model->rootEntity = $map['RootEntity'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
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
