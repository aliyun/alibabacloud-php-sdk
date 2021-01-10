<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models\ListFlowTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class flowTemplates extends Model
{
    /**
     * @var string
     */
    public $summary;

    /**
     * @var string
     */
    public $locale;

    /**
     * @var string
     */
    public $summaryEn;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $overview;

    /**
     * @var string
     */
    public $connector;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $version;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'summary'     => 'Summary',
        'locale'      => 'Locale',
        'summaryEn'   => 'SummaryEn',
        'createdAt'   => 'CreatedAt',
        'overview'    => 'Overview',
        'connector'   => 'Connector',
        'tag'         => 'Tag',
        'creator'     => 'Creator',
        'description' => 'Description',
        'version'     => 'Version',
        'updatedAt'   => 'UpdatedAt',
        'name'        => 'Name',
        'templateId'  => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }
        if (null !== $this->locale) {
            $res['Locale'] = $this->locale;
        }
        if (null !== $this->summaryEn) {
            $res['SummaryEn'] = $this->summaryEn;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->overview) {
            $res['Overview'] = $this->overview;
        }
        if (null !== $this->connector) {
            $res['Connector'] = $this->connector;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowTemplates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }
        if (isset($map['Locale'])) {
            $model->locale = $map['Locale'];
        }
        if (isset($map['SummaryEn'])) {
            $model->summaryEn = $map['SummaryEn'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Overview'])) {
            $model->overview = $map['Overview'];
        }
        if (isset($map['Connector'])) {
            $model->connector = $map['Connector'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
