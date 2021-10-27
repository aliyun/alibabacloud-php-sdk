<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class GetTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $templateConnector;

    /**
     * @var string
     */
    public $templateCreator;

    /**
     * @var string
     */
    public $templateDescription;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateLocale;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $templateOverview;

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
    public $templateTag;

    /**
     * @var int
     */
    public $templateVersion;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'definition'          => 'Definition',
        'regionId'            => 'RegionId',
        'requestId'           => 'RequestId',
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
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return GetTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
