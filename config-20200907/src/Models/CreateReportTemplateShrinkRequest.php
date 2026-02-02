<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;

class CreateReportTemplateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $reportFileFormats;

    /**
     * @var string
     */
    public $reportGranularity;

    /**
     * @var string
     */
    public $reportLanguage;

    /**
     * @var string
     */
    public $reportScopeShrink;

    /**
     * @var string
     */
    public $reportTemplateDescription;

    /**
     * @var string
     */
    public $reportTemplateName;

    /**
     * @var string
     */
    public $subscriptionFrequency;
    protected $_name = [
        'reportFileFormats' => 'ReportFileFormats',
        'reportGranularity' => 'ReportGranularity',
        'reportLanguage' => 'ReportLanguage',
        'reportScopeShrink' => 'ReportScope',
        'reportTemplateDescription' => 'ReportTemplateDescription',
        'reportTemplateName' => 'ReportTemplateName',
        'subscriptionFrequency' => 'SubscriptionFrequency',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reportFileFormats) {
            $res['ReportFileFormats'] = $this->reportFileFormats;
        }

        if (null !== $this->reportGranularity) {
            $res['ReportGranularity'] = $this->reportGranularity;
        }

        if (null !== $this->reportLanguage) {
            $res['ReportLanguage'] = $this->reportLanguage;
        }

        if (null !== $this->reportScopeShrink) {
            $res['ReportScope'] = $this->reportScopeShrink;
        }

        if (null !== $this->reportTemplateDescription) {
            $res['ReportTemplateDescription'] = $this->reportTemplateDescription;
        }

        if (null !== $this->reportTemplateName) {
            $res['ReportTemplateName'] = $this->reportTemplateName;
        }

        if (null !== $this->subscriptionFrequency) {
            $res['SubscriptionFrequency'] = $this->subscriptionFrequency;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReportFileFormats'])) {
            $model->reportFileFormats = $map['ReportFileFormats'];
        }

        if (isset($map['ReportGranularity'])) {
            $model->reportGranularity = $map['ReportGranularity'];
        }

        if (isset($map['ReportLanguage'])) {
            $model->reportLanguage = $map['ReportLanguage'];
        }

        if (isset($map['ReportScope'])) {
            $model->reportScopeShrink = $map['ReportScope'];
        }

        if (isset($map['ReportTemplateDescription'])) {
            $model->reportTemplateDescription = $map['ReportTemplateDescription'];
        }

        if (isset($map['ReportTemplateName'])) {
            $model->reportTemplateName = $map['ReportTemplateName'];
        }

        if (isset($map['SubscriptionFrequency'])) {
            $model->subscriptionFrequency = $map['SubscriptionFrequency'];
        }

        return $model;
    }
}
