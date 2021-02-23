<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class GetTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $regionId;

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
    public $definition;

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
    public $templateOverview;

    /**
     * @var string
     */
    public $templateCreator;
    protected $_name = [
        'requestId'           => 'RequestId',
        'regionId'            => 'RegionId',
        'templateId'          => 'TemplateId',
        'templateName'        => 'TemplateName',
        'templateDescription' => 'TemplateDescription',
        'templateTag'         => 'TemplateTag',
        'definition'          => 'Definition',
        'createTime'          => 'CreateTime',
        'updateTime'          => 'UpdateTime',
        'templateConnector'   => 'TemplateConnector',
        'templateSummary'     => 'TemplateSummary',
        'templateSummaryEn'   => 'TemplateSummaryEn',
        'templateLocale'      => 'TemplateLocale',
        'templateVersion'     => 'TemplateVersion',
        'templateOverview'    => 'TemplateOverview',
        'templateCreator'     => 'TemplateCreator',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
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
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
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
        if (null !== $this->templateOverview) {
            $res['TemplateOverview'] = $this->templateOverview;
        }
        if (null !== $this->templateCreator) {
            $res['TemplateCreator'] = $this->templateCreator;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
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
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
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
        if (isset($map['TemplateOverview'])) {
            $model->templateOverview = $map['TemplateOverview'];
        }
        if (isset($map['TemplateCreator'])) {
            $model->templateCreator = $map['TemplateCreator'];
        }

        return $model;
    }
}
