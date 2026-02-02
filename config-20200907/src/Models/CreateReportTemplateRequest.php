<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\CreateReportTemplateRequest\reportScope;

class CreateReportTemplateRequest extends Model
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
     * @var reportScope[]
     */
    public $reportScope;

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
        'reportScope' => 'ReportScope',
        'reportTemplateDescription' => 'ReportTemplateDescription',
        'reportTemplateName' => 'ReportTemplateName',
        'subscriptionFrequency' => 'SubscriptionFrequency',
    ];

    public function validate()
    {
        if (\is_array($this->reportScope)) {
            Model::validateArray($this->reportScope);
        }
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

        if (null !== $this->reportScope) {
            if (\is_array($this->reportScope)) {
                $res['ReportScope'] = [];
                $n1 = 0;
                foreach ($this->reportScope as $item1) {
                    $res['ReportScope'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['ReportScope'])) {
                $model->reportScope = [];
                $n1 = 0;
                foreach ($map['ReportScope'] as $item1) {
                    $model->reportScope[$n1] = reportScope::fromMap($item1);
                    ++$n1;
                }
            }
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
