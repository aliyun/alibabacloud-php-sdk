<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models\ListTemplatesResponse;

use AlibabaCloud\Tea\Model;

class templates extends Model
{
    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateDescription;

    /**
     * @var string
     */
    public $templateTag;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $templateConnector;

    /**
     * @var string
     */
    public $templateSummary;

    /**
     * @var string
     */
    public $templateSummaryEn;

    /**
     * @var string
     */
    public $templateLocale;

    /**
     * @var int
     */
    public $templateVersion;

    /**
     * @var string
     */
    public $templateCreator;

    /**
     * @var string
     */
    public $templateOverview;
    protected $_name = [
        'templateId'          => 'TemplateId',
        'templateName'        => 'TemplateName',
        'templateDescription' => 'TemplateDescription',
        'templateTag'         => 'TemplateTag',
        'createTime'          => 'CreateTime',
        'updateTime'          => 'UpdateTime',
        'templateConnector'   => 'TemplateConnector',
        'templateSummary'     => 'TemplateSummary',
        'templateSummaryEn'   => 'TemplateSummaryEn',
        'templateLocale'      => 'TemplateLocale',
        'templateVersion'     => 'TemplateVersion',
        'templateCreator'     => 'TemplateCreator',
        'templateOverview'    => 'TemplateOverview',
    ];

    public function validate()
    {
        Model::validateRequired('templateId', $this->templateId, true);
        Model::validateRequired('templateName', $this->templateName, true);
        Model::validateRequired('templateDescription', $this->templateDescription, true);
        Model::validateRequired('templateTag', $this->templateTag, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('templateConnector', $this->templateConnector, true);
        Model::validateRequired('templateSummary', $this->templateSummary, true);
        Model::validateRequired('templateSummaryEn', $this->templateSummaryEn, true);
        Model::validateRequired('templateLocale', $this->templateLocale, true);
        Model::validateRequired('templateVersion', $this->templateVersion, true);
        Model::validateRequired('templateCreator', $this->templateCreator, true);
        Model::validateRequired('templateOverview', $this->templateOverview, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateDescription) {
            $res['TemplateDescription'] = $this->templateDescription;
        }
        if (null !== $this->templateTag) {
            $res['TemplateTag'] = $this->templateTag;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->templateConnector) {
            $res['TemplateConnector'] = $this->templateConnector;
        }
        if (null !== $this->templateSummary) {
            $res['TemplateSummary'] = $this->templateSummary;
        }
        if (null !== $this->templateSummaryEn) {
            $res['TemplateSummaryEn'] = $this->templateSummaryEn;
        }
        if (null !== $this->templateLocale) {
            $res['TemplateLocale'] = $this->templateLocale;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->templateCreator) {
            $res['TemplateCreator'] = $this->templateCreator;
        }
        if (null !== $this->templateOverview) {
            $res['TemplateOverview'] = $this->templateOverview;
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
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateDescription'])) {
            $model->templateDescription = $map['TemplateDescription'];
        }
        if (isset($map['TemplateTag'])) {
            $model->templateTag = $map['TemplateTag'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['TemplateConnector'])) {
            $model->templateConnector = $map['TemplateConnector'];
        }
        if (isset($map['TemplateSummary'])) {
            $model->templateSummary = $map['TemplateSummary'];
        }
        if (isset($map['TemplateSummaryEn'])) {
            $model->templateSummaryEn = $map['TemplateSummaryEn'];
        }
        if (isset($map['TemplateLocale'])) {
            $model->templateLocale = $map['TemplateLocale'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['TemplateCreator'])) {
            $model->templateCreator = $map['TemplateCreator'];
        }
        if (isset($map['TemplateOverview'])) {
            $model->templateOverview = $map['TemplateOverview'];
        }

        return $model;
    }
}
