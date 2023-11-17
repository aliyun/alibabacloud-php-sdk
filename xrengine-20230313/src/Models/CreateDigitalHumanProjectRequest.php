<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models;

use AlibabaCloud\Tea\Model;

class CreateDigitalHumanProjectRequest extends Model
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
    public $backgroundId;

    /**
     * @var string
     */
    public $backgroundUrl;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $foregroundId;

    /**
     * @var string
     */
    public $foregroundUrl;

    /**
     * @var string
     */
    public $humanLayerStyle;

    /**
     * @var string
     */
    public $intro;

    /**
     * @var string
     */
    public $jwtToken;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $modelId;

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
        'backgroundId'      => 'BackgroundId',
        'backgroundUrl'     => 'BackgroundUrl',
        'content'           => 'Content',
        'foregroundId'      => 'ForegroundId',
        'foregroundUrl'     => 'ForegroundUrl',
        'humanLayerStyle'   => 'HumanLayerStyle',
        'intro'             => 'Intro',
        'jwtToken'          => 'JwtToken',
        'mode'              => 'Mode',
        'modelId'           => 'ModelId',
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
        if (null !== $this->backgroundId) {
            $res['BackgroundId'] = $this->backgroundId;
        }
        if (null !== $this->backgroundUrl) {
            $res['BackgroundUrl'] = $this->backgroundUrl;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->foregroundId) {
            $res['ForegroundId'] = $this->foregroundId;
        }
        if (null !== $this->foregroundUrl) {
            $res['ForegroundUrl'] = $this->foregroundUrl;
        }
        if (null !== $this->humanLayerStyle) {
            $res['HumanLayerStyle'] = $this->humanLayerStyle;
        }
        if (null !== $this->intro) {
            $res['Intro'] = $this->intro;
        }
        if (null !== $this->jwtToken) {
            $res['JwtToken'] = $this->jwtToken;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
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
     * @return CreateDigitalHumanProjectRequest
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
        if (isset($map['BackgroundId'])) {
            $model->backgroundId = $map['BackgroundId'];
        }
        if (isset($map['BackgroundUrl'])) {
            $model->backgroundUrl = $map['BackgroundUrl'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ForegroundId'])) {
            $model->foregroundId = $map['ForegroundId'];
        }
        if (isset($map['ForegroundUrl'])) {
            $model->foregroundUrl = $map['ForegroundUrl'];
        }
        if (isset($map['HumanLayerStyle'])) {
            $model->humanLayerStyle = $map['HumanLayerStyle'];
        }
        if (isset($map['Intro'])) {
            $model->intro = $map['Intro'];
        }
        if (isset($map['JwtToken'])) {
            $model->jwtToken = $map['JwtToken'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
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
