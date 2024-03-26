<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models;

use AlibabaCloud\Tea\Model;

class CreateLivePortraitProjectRequest extends Model
{
    /**
     * @var string
     */
    public $audioId;

    /**
     * @var string
     */
    public $audioUrl;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $customParams;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $intro;

    /**
     * @var string
     */
    public $jwtToken;

    /**
     * @deprecated
     *
     * @var bool
     */
    public $lightModel;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $outputConfig;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $ttsVoiceId;

    /**
     * @var string
     */
    public $watermarkImageUrl;

    /**
     * @var string
     */
    public $watermarkStyle;
    protected $_name = [
        'audioId'           => 'AudioId',
        'audioUrl'          => 'AudioUrl',
        'content'           => 'Content',
        'customParams'      => 'CustomParams',
        'imageId'           => 'ImageId',
        'imageUrl'          => 'ImageUrl',
        'intro'             => 'Intro',
        'jwtToken'          => 'JwtToken',
        'lightModel'        => 'LightModel',
        'mode'              => 'Mode',
        'outputConfig'      => 'OutputConfig',
        'title'             => 'Title',
        'ttsVoiceId'        => 'TtsVoiceId',
        'watermarkImageUrl' => 'WatermarkImageUrl',
        'watermarkStyle'    => 'WatermarkStyle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioId) {
            $res['AudioId'] = $this->audioId;
        }
        if (null !== $this->audioUrl) {
            $res['AudioUrl'] = $this->audioUrl;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->customParams) {
            $res['CustomParams'] = $this->customParams;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->intro) {
            $res['Intro'] = $this->intro;
        }
        if (null !== $this->jwtToken) {
            $res['JwtToken'] = $this->jwtToken;
        }
        if (null !== $this->lightModel) {
            $res['LightModel'] = $this->lightModel;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = $this->outputConfig;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->ttsVoiceId) {
            $res['TtsVoiceId'] = $this->ttsVoiceId;
        }
        if (null !== $this->watermarkImageUrl) {
            $res['WatermarkImageUrl'] = $this->watermarkImageUrl;
        }
        if (null !== $this->watermarkStyle) {
            $res['WatermarkStyle'] = $this->watermarkStyle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLivePortraitProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioId'])) {
            $model->audioId = $map['AudioId'];
        }
        if (isset($map['AudioUrl'])) {
            $model->audioUrl = $map['AudioUrl'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CustomParams'])) {
            $model->customParams = $map['CustomParams'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['Intro'])) {
            $model->intro = $map['Intro'];
        }
        if (isset($map['JwtToken'])) {
            $model->jwtToken = $map['JwtToken'];
        }
        if (isset($map['LightModel'])) {
            $model->lightModel = $map['LightModel'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['OutputConfig'])) {
            $model->outputConfig = $map['OutputConfig'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['TtsVoiceId'])) {
            $model->ttsVoiceId = $map['TtsVoiceId'];
        }
        if (isset($map['WatermarkImageUrl'])) {
            $model->watermarkImageUrl = $map['WatermarkImageUrl'];
        }
        if (isset($map['WatermarkStyle'])) {
            $model->watermarkStyle = $map['WatermarkStyle'];
        }

        return $model;
    }
}
