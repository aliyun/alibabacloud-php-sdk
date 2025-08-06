<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTemplateGroupResponseBody\transcodeTemplateGroup;

use AlibabaCloud\Dara\Model;

class transcodeTemplateList extends Model
{
    /**
     * @var string
     */
    public $audio;

    /**
     * @var string
     */
    public $clip;

    /**
     * @var string
     */
    public $container;

    /**
     * @var string
     */
    public $copyrightMark;

    /**
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $encryptSetting;

    /**
     * @var string
     */
    public $muxConfig;

    /**
     * @var string
     */
    public $packageSetting;

    /**
     * @var string
     */
    public $rotate;

    /**
     * @var string
     */
    public $subtitleList;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $traceMark;

    /**
     * @var string
     */
    public $transConfig;

    /**
     * @var string
     */
    public $transcodeFileRegular;

    /**
     * @var string
     */
    public $transcodeTemplateId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $video;

    /**
     * @var string[]
     */
    public $watermarkIds;
    protected $_name = [
        'audio' => 'Audio',
        'clip' => 'Clip',
        'container' => 'Container',
        'copyrightMark' => 'CopyrightMark',
        'definition' => 'Definition',
        'encryptSetting' => 'EncryptSetting',
        'muxConfig' => 'MuxConfig',
        'packageSetting' => 'PackageSetting',
        'rotate' => 'Rotate',
        'subtitleList' => 'SubtitleList',
        'templateName' => 'TemplateName',
        'traceMark' => 'TraceMark',
        'transConfig' => 'TransConfig',
        'transcodeFileRegular' => 'TranscodeFileRegular',
        'transcodeTemplateId' => 'TranscodeTemplateId',
        'type' => 'Type',
        'video' => 'Video',
        'watermarkIds' => 'WatermarkIds',
    ];

    public function validate()
    {
        if (\is_array($this->watermarkIds)) {
            Model::validateArray($this->watermarkIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audio) {
            $res['Audio'] = $this->audio;
        }

        if (null !== $this->clip) {
            $res['Clip'] = $this->clip;
        }

        if (null !== $this->container) {
            $res['Container'] = $this->container;
        }

        if (null !== $this->copyrightMark) {
            $res['CopyrightMark'] = $this->copyrightMark;
        }

        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }

        if (null !== $this->encryptSetting) {
            $res['EncryptSetting'] = $this->encryptSetting;
        }

        if (null !== $this->muxConfig) {
            $res['MuxConfig'] = $this->muxConfig;
        }

        if (null !== $this->packageSetting) {
            $res['PackageSetting'] = $this->packageSetting;
        }

        if (null !== $this->rotate) {
            $res['Rotate'] = $this->rotate;
        }

        if (null !== $this->subtitleList) {
            $res['SubtitleList'] = $this->subtitleList;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->traceMark) {
            $res['TraceMark'] = $this->traceMark;
        }

        if (null !== $this->transConfig) {
            $res['TransConfig'] = $this->transConfig;
        }

        if (null !== $this->transcodeFileRegular) {
            $res['TranscodeFileRegular'] = $this->transcodeFileRegular;
        }

        if (null !== $this->transcodeTemplateId) {
            $res['TranscodeTemplateId'] = $this->transcodeTemplateId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->video) {
            $res['Video'] = $this->video;
        }

        if (null !== $this->watermarkIds) {
            if (\is_array($this->watermarkIds)) {
                $res['WatermarkIds'] = [];
                $n1 = 0;
                foreach ($this->watermarkIds as $item1) {
                    $res['WatermarkIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Audio'])) {
            $model->audio = $map['Audio'];
        }

        if (isset($map['Clip'])) {
            $model->clip = $map['Clip'];
        }

        if (isset($map['Container'])) {
            $model->container = $map['Container'];
        }

        if (isset($map['CopyrightMark'])) {
            $model->copyrightMark = $map['CopyrightMark'];
        }

        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }

        if (isset($map['EncryptSetting'])) {
            $model->encryptSetting = $map['EncryptSetting'];
        }

        if (isset($map['MuxConfig'])) {
            $model->muxConfig = $map['MuxConfig'];
        }

        if (isset($map['PackageSetting'])) {
            $model->packageSetting = $map['PackageSetting'];
        }

        if (isset($map['Rotate'])) {
            $model->rotate = $map['Rotate'];
        }

        if (isset($map['SubtitleList'])) {
            $model->subtitleList = $map['SubtitleList'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['TraceMark'])) {
            $model->traceMark = $map['TraceMark'];
        }

        if (isset($map['TransConfig'])) {
            $model->transConfig = $map['TransConfig'];
        }

        if (isset($map['TranscodeFileRegular'])) {
            $model->transcodeFileRegular = $map['TranscodeFileRegular'];
        }

        if (isset($map['TranscodeTemplateId'])) {
            $model->transcodeTemplateId = $map['TranscodeTemplateId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Video'])) {
            $model->video = $map['Video'];
        }

        if (isset($map['WatermarkIds'])) {
            if (!empty($map['WatermarkIds'])) {
                $model->watermarkIds = [];
                $n1 = 0;
                foreach ($map['WatermarkIds'] as $item1) {
                    $model->watermarkIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
