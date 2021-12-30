<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QuerySmarttagTemplateListResponseBody\templates;

use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @var string
     */
    public $analyseTypes;

    /**
     * @var string
     */
    public $faceCategoryIds;

    /**
     * @var string
     */
    public $faceCustomParamsConfig;

    /**
     * @var string
     */
    public $industry;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var string
     */
    public $keywordConfig;

    /**
     * @var string
     */
    public $knowledgeConfig;

    /**
     * @var string
     */
    public $labelType;

    /**
     * @var string
     */
    public $labelVersion;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'analyseTypes'           => 'AnalyseTypes',
        'faceCategoryIds'        => 'FaceCategoryIds',
        'faceCustomParamsConfig' => 'FaceCustomParamsConfig',
        'industry'               => 'Industry',
        'isDefault'              => 'IsDefault',
        'keywordConfig'          => 'KeywordConfig',
        'knowledgeConfig'        => 'KnowledgeConfig',
        'labelType'              => 'LabelType',
        'labelVersion'           => 'LabelVersion',
        'scene'                  => 'Scene',
        'templateId'             => 'TemplateId',
        'templateName'           => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analyseTypes) {
            $res['AnalyseTypes'] = $this->analyseTypes;
        }
        if (null !== $this->faceCategoryIds) {
            $res['FaceCategoryIds'] = $this->faceCategoryIds;
        }
        if (null !== $this->faceCustomParamsConfig) {
            $res['FaceCustomParamsConfig'] = $this->faceCustomParamsConfig;
        }
        if (null !== $this->industry) {
            $res['Industry'] = $this->industry;
        }
        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }
        if (null !== $this->keywordConfig) {
            $res['KeywordConfig'] = $this->keywordConfig;
        }
        if (null !== $this->knowledgeConfig) {
            $res['KnowledgeConfig'] = $this->knowledgeConfig;
        }
        if (null !== $this->labelType) {
            $res['LabelType'] = $this->labelType;
        }
        if (null !== $this->labelVersion) {
            $res['LabelVersion'] = $this->labelVersion;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return template
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnalyseTypes'])) {
            $model->analyseTypes = $map['AnalyseTypes'];
        }
        if (isset($map['FaceCategoryIds'])) {
            $model->faceCategoryIds = $map['FaceCategoryIds'];
        }
        if (isset($map['FaceCustomParamsConfig'])) {
            $model->faceCustomParamsConfig = $map['FaceCustomParamsConfig'];
        }
        if (isset($map['Industry'])) {
            $model->industry = $map['Industry'];
        }
        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }
        if (isset($map['KeywordConfig'])) {
            $model->keywordConfig = $map['KeywordConfig'];
        }
        if (isset($map['KnowledgeConfig'])) {
            $model->knowledgeConfig = $map['KnowledgeConfig'];
        }
        if (isset($map['LabelType'])) {
            $model->labelType = $map['LabelType'];
        }
        if (isset($map['LabelVersion'])) {
            $model->labelVersion = $map['LabelVersion'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
