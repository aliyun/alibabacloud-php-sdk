<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAIStudioResponseBody\studioConfigs;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAIStudioResponseBody\studioConfigs\subtitleConfig\ruleIds;
use AlibabaCloud\Tea\Model;

class subtitleConfig extends Model
{
    /**
     * @description The ID of the background material.
     *
     * @example d0eb493192c771efba644531858c0102
     *
     * @var string
     */
    public $backgroundResourceId;

    /**
     * @description The URL of the background material. Make sure that the URL is accessible over the Internet. Either this parameter or the BackgroundResourceId parameter is returned.
     *
     * @example https://testbucket.xx.com/2.jpg
     *
     * @var string
     */
    public $backgroundResourceUrl;

    /**
     * @description The type of the background material. Valid values:
     *
     *   VOD: a video in ApsaraVideo VOD
     *   PIC: an image
     *   LIVE: a live stream
     *
     * @example VOD
     *
     * @var string
     */
    public $backgroundType;

    /**
     * @description The custom description.
     *
     * @example user defined description
     *
     * @var string
     */
    public $description;

    /**
     * @description The preview height. Unit: pixels.
     *
     * The following preview specifications (width × height) are supported:
     *
     *   Landscape low definition 360p (640×360)
     *   Portrait low definition 360p (360×640)
     *   Landscape standard definition 480p (854×480)
     *   Portrait standard definition 480p (480×854)
     *   Landscape high definition 720p (1280×720)
     *   Portrait high definition 720p (720×1280)
     *   Landscape ultra-high definition 1080p (1920×1080)
     *   Portrait ultra-high definition 1080p (1080×1920)
     *
     * @example 1080
     *
     * @var string
     */
    public $height;

    /**
     * @description The layout information of the multimedia material.
     *
     * @example "{\\"positionY\\":\\"0.0\\",\\"positionX\\":\\"0.0\\",\\"heightNormalized\\":\\"0.5\\"}"
     *
     * @var string
     */
    public $mattingLayout;

    /**
     * @description The type of chroma key that is performed on ingested streams. Valid values:
     *
     *   green: green-key chroma key
     *   blue: blue-screen chroma key
     *   complex: background replacement
     *
     * @example complex
     *
     * @var string
     */
    public $mattingType;

    /**
     * @description LIVE, live streaming
     *
     * @example "{\\"positionY\\":\\"0.0\\",\\"positionX\\":\\"0.0\\",\\"heightNormalized\\":\\"0.5\\"}"
     *
     * @var string
     */
    public $mediaLayout;

    /**
     * @description The ID of the multimedia material in ApsaraVideo VOD.
     *
     * @example d0eb493192c771efba644531858c0102
     *
     * @var string
     */
    public $mediaResourceId;

    /**
     * @description The URL of the multimedia material.
     *
     * @example https://testbucket.xx.com/2.jpg
     *
     * @var string
     */
    public $mediaResourceUrl;

    /**
     * @description The type of the multimedia material. Valid values:
     *
     *   VOD: a video in ApsaraVideo VOD
     *   PIC: an image
     *   LIVE: a live stream
     *
     * @example VOD
     *
     * @var string
     */
    public $mediaType;

    /**
     * @description The IDs of the bound rules.
     *
     * @var ruleIds
     */
    public $ruleIds;

    /**
     * @description The ID of the virtual studio template.
     *
     * @example 24654384-f5ac-40ea-823b-74e85a61dd9f
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The name of the virtual studio template. The name is the same as the value of the StudioName parameter that was specified when you called the CreateLiveAiStudio operation to create the virtual studio template.
     *
     * @example studio1
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The preview width.
     *
     * @example 1920
     *
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

    public function validate() {}

    public function toMap()
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
            $res['RuleIds'] = null !== $this->ruleIds ? $this->ruleIds->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return subtitleConfig
     */
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
