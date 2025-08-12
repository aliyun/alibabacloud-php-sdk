<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAIStudioResponseBody\studioConfigs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAIStudioResponseBody\studioConfigs\subtitleConfig\ruleIds;

class subtitleConfig extends Model
{
    /**
     * @var string
     */
    public $backgroundResourceId;

    /**
     * @var string
     */
    public $backgroundResourceUrl;

    /**
     * @var string
     */
    public $backgroundType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $height;

    /**
     * @var string
     */
    public $mattingLayout;

    /**
     * @var string
     */
    public $mattingType;

    /**
     * @var string
     */
    public $mediaLayout;

    /**
     * @var string
     */
    public $mediaResourceId;

    /**
     * @var string
     */
    public $mediaResourceUrl;

    /**
     * @var string
     */
    public $mediaType;

    /**
     * @var ruleIds
     */
    public $ruleIds;

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
    public $width;
    protected $_name = [
        'backgroundResourceId' => 'BackgroundResourceId',
        'backgroundResourceUrl' => 'BackgroundResourceUrl',
        'backgroundType' => 'BackgroundType',
        'description' => 'Description',
        'height' => 'Height',
        'mattingLayout' => 'MattingLayout',
        'mattingType' => 'MattingType',
        'mediaLayout' => 'MediaLayout',
        'mediaResourceId' => 'MediaResourceId',
        'mediaResourceUrl' => 'MediaResourceUrl',
        'mediaType' => 'MediaType',
        'ruleIds' => 'RuleIds',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
        'width' => 'Width',
    ];

    public function validate()
    {
        if (null !== $this->ruleIds) {
            $this->ruleIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->backgroundResourceId) {
            $res['BackgroundResourceId'] = $this->backgroundResourceId;
        }

        if (null !== $this->backgroundResourceUrl) {
            $res['BackgroundResourceUrl'] = $this->backgroundResourceUrl;
        }

        if (null !== $this->backgroundType) {
            $res['BackgroundType'] = $this->backgroundType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->mattingLayout) {
            $res['MattingLayout'] = $this->mattingLayout;
        }

        if (null !== $this->mattingType) {
            $res['MattingType'] = $this->mattingType;
        }

        if (null !== $this->mediaLayout) {
            $res['MediaLayout'] = $this->mediaLayout;
        }

        if (null !== $this->mediaResourceId) {
            $res['MediaResourceId'] = $this->mediaResourceId;
        }

        if (null !== $this->mediaResourceUrl) {
            $res['MediaResourceUrl'] = $this->mediaResourceUrl;
        }

        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }

        if (null !== $this->ruleIds) {
            $res['RuleIds'] = null !== $this->ruleIds ? $this->ruleIds->toArray($noStream) : $this->ruleIds;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['BackgroundResourceId'])) {
            $model->backgroundResourceId = $map['BackgroundResourceId'];
        }

        if (isset($map['BackgroundResourceUrl'])) {
            $model->backgroundResourceUrl = $map['BackgroundResourceUrl'];
        }

        if (isset($map['BackgroundType'])) {
            $model->backgroundType = $map['BackgroundType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['MattingLayout'])) {
            $model->mattingLayout = $map['MattingLayout'];
        }

        if (isset($map['MattingType'])) {
            $model->mattingType = $map['MattingType'];
        }

        if (isset($map['MediaLayout'])) {
            $model->mediaLayout = $map['MediaLayout'];
        }

        if (isset($map['MediaResourceId'])) {
            $model->mediaResourceId = $map['MediaResourceId'];
        }

        if (isset($map['MediaResourceUrl'])) {
            $model->mediaResourceUrl = $map['MediaResourceUrl'];
        }

        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }

        if (isset($map['RuleIds'])) {
            $model->ruleIds = ruleIds::fromMap($map['RuleIds']);
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
