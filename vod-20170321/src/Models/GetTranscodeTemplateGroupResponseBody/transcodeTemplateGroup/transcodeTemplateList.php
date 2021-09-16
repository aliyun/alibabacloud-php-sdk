<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTemplateGroupResponseBody\transcodeTemplateGroup;

use AlibabaCloud\Tea\Model;

class transcodeTemplateList extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $video;

    /**
     * @var string
     */
    public $transConfig;

    /**
     * @var string
     */
    public $rotate;

    /**
     * @var string
     */
    public $transcodeTemplateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $encryptSetting;

    /**
     * @var string
     */
    public $audio;

    /**
     * @var string
     */
    public $transcodeFileRegular;

    /**
     * @var string
     */
    public $container;

    /**
     * @var string
     */
    public $clip;

    /**
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $packageSetting;

    /**
     * @var string
     */
    public $subtitleList;

    /**
     * @var string
     */
    public $muxConfig;

    /**
     * @var string[]
     */
    public $watermarkIds;
    protected $_name = [
        'type'                 => 'Type',
        'video'                => 'Video',
        'transConfig'          => 'TransConfig',
        'rotate'               => 'Rotate',
        'transcodeTemplateId'  => 'TranscodeTemplateId',
        'templateName'         => 'TemplateName',
        'encryptSetting'       => 'EncryptSetting',
        'audio'                => 'Audio',
        'transcodeFileRegular' => 'TranscodeFileRegular',
        'container'            => 'Container',
        'clip'                 => 'Clip',
        'definition'           => 'Definition',
        'packageSetting'       => 'PackageSetting',
        'subtitleList'         => 'SubtitleList',
        'muxConfig'            => 'MuxConfig',
        'watermarkIds'         => 'WatermarkIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->video) {
            $res['Video'] = $this->video;
        }
        if (null !== $this->transConfig) {
            $res['TransConfig'] = $this->transConfig;
        }
        if (null !== $this->rotate) {
            $res['Rotate'] = $this->rotate;
        }
        if (null !== $this->transcodeTemplateId) {
            $res['TranscodeTemplateId'] = $this->transcodeTemplateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->encryptSetting) {
            $res['EncryptSetting'] = $this->encryptSetting;
        }
        if (null !== $this->audio) {
            $res['Audio'] = $this->audio;
        }
        if (null !== $this->transcodeFileRegular) {
            $res['TranscodeFileRegular'] = $this->transcodeFileRegular;
        }
        if (null !== $this->container) {
            $res['Container'] = $this->container;
        }
        if (null !== $this->clip) {
            $res['Clip'] = $this->clip;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->packageSetting) {
            $res['PackageSetting'] = $this->packageSetting;
        }
        if (null !== $this->subtitleList) {
            $res['SubtitleList'] = $this->subtitleList;
        }
        if (null !== $this->muxConfig) {
            $res['MuxConfig'] = $this->muxConfig;
        }
        if (null !== $this->watermarkIds) {
            $res['WatermarkIds'] = $this->watermarkIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeTemplateList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Video'])) {
            $model->video = $map['Video'];
        }
        if (isset($map['TransConfig'])) {
            $model->transConfig = $map['TransConfig'];
        }
        if (isset($map['Rotate'])) {
            $model->rotate = $map['Rotate'];
        }
        if (isset($map['TranscodeTemplateId'])) {
            $model->transcodeTemplateId = $map['TranscodeTemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['EncryptSetting'])) {
            $model->encryptSetting = $map['EncryptSetting'];
        }
        if (isset($map['Audio'])) {
            $model->audio = $map['Audio'];
        }
        if (isset($map['TranscodeFileRegular'])) {
            $model->transcodeFileRegular = $map['TranscodeFileRegular'];
        }
        if (isset($map['Container'])) {
            $model->container = $map['Container'];
        }
        if (isset($map['Clip'])) {
            $model->clip = $map['Clip'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['PackageSetting'])) {
            $model->packageSetting = $map['PackageSetting'];
        }
        if (isset($map['SubtitleList'])) {
            $model->subtitleList = $map['SubtitleList'];
        }
        if (isset($map['MuxConfig'])) {
            $model->muxConfig = $map['MuxConfig'];
        }
        if (isset($map['WatermarkIds'])) {
            if (!empty($map['WatermarkIds'])) {
                $model->watermarkIds = $map['WatermarkIds'];
            }
        }

        return $model;
    }
}
