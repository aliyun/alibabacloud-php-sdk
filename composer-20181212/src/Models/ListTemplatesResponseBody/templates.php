<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models\ListTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @description The time when the template was created.
     *
     * @example 2020-08-19T03:31:32.415Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description A list of connectors that are used in the template. The connectors are separated by commas.
     *
     * @example oss,rds
     *
     * @var string
     */
    public $templateConnector;

    /**
     * @description The publisher of the template.
     *
     * @example Logic Composer
     *
     * @var string
     */
    public $templateCreator;

    /**
     * @description A brief introduction to the template.
     *
     * @example This is a test template.
     *
     * @var string
     */
    public $templateDescription;

    /**
     * @description The ID of the template.
     *
     * @example tp-uf6tbvhheciyxl
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The language that is used in the template. Chinese and English are supported.
     *
     * @example zh
     *
     * @var string
     */
    public $templateLocale;

    /**
     * @description The name of the template.
     *
     * @example test
     *
     * @var string
     */
    public $templateName;

    /**
     * @description An overview of the template, which is a JSON string.
     *
     * @example []
     *
     * @var string
     */
    public $templateOverview;

    /**
     * @description A description of the template.
     *
     * @example This is a test template.
     *
     * @var string
     */
    public $templateSummary;

    /**
     * @description A brief introduction to the template.
     *
     * @example This is a test template
     *
     * @var string
     */
    public $templateSummaryEn;

    /**
     * @description The tag of the template.
     *
     * @example finance
     *
     * @var string
     */
    public $templateTag;

    /**
     * @description The version of the template, which is a number that increments from 0.
     *
     * @example 0
     *
     * @var int
     */
    public $templateVersion;

    /**
     * @description The time when the template was last updated.
     *
     * @example 2020-08-19T03:31:32.415Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'templateConnector'   => 'TemplateConnector',
        'templateCreator'     => 'TemplateCreator',
        'templateDescription' => 'TemplateDescription',
        'templateId'          => 'TemplateId',
        'templateLocale'      => 'TemplateLocale',
        'templateName'        => 'TemplateName',
        'templateOverview'    => 'TemplateOverview',
        'templateSummary'     => 'TemplateSummary',
        'templateSummaryEn'   => 'TemplateSummaryEn',
        'templateTag'         => 'TemplateTag',
        'templateVersion'     => 'TemplateVersion',
        'updateTime'          => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->templateConnector) {
            $res['TemplateConnector'] = $this->templateConnector;
        }
        if (null !== $this->templateCreator) {
            $res['TemplateCreator'] = $this->templateCreator;
        }
        if (null !== $this->templateDescription) {
            $res['TemplateDescription'] = $this->templateDescription;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateLocale) {
            $res['TemplateLocale'] = $this->templateLocale;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateOverview) {
            $res['TemplateOverview'] = $this->templateOverview;
        }
        if (null !== $this->templateSummary) {
            $res['TemplateSummary'] = $this->templateSummary;
        }
        if (null !== $this->templateSummaryEn) {
            $res['TemplateSummaryEn'] = $this->templateSummaryEn;
        }
        if (null !== $this->templateTag) {
            $res['TemplateTag'] = $this->templateTag;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['TemplateConnector'])) {
            $model->templateConnector = $map['TemplateConnector'];
        }
        if (isset($map['TemplateCreator'])) {
            $model->templateCreator = $map['TemplateCreator'];
        }
        if (isset($map['TemplateDescription'])) {
            $model->templateDescription = $map['TemplateDescription'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateLocale'])) {
            $model->templateLocale = $map['TemplateLocale'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateOverview'])) {
            $model->templateOverview = $map['TemplateOverview'];
        }
        if (isset($map['TemplateSummary'])) {
            $model->templateSummary = $map['TemplateSummary'];
        }
        if (isset($map['TemplateSummaryEn'])) {
            $model->templateSummaryEn = $map['TemplateSummaryEn'];
        }
        if (isset($map['TemplateTag'])) {
            $model->templateTag = $map['TemplateTag'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
