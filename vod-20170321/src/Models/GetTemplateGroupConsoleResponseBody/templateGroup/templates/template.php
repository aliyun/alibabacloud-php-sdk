<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetTemplateGroupConsoleResponseBody\templateGroup\templates;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTemplateGroupConsoleResponseBody\templateGroup\templates\template\audio;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTemplateGroupConsoleResponseBody\templateGroup\templates\template\container;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTemplateGroupConsoleResponseBody\templateGroup\templates\template\encryptionConfig;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTemplateGroupConsoleResponseBody\templateGroup\templates\template\muxConfig;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTemplateGroupConsoleResponseBody\templateGroup\templates\template\transConfig;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetTemplateGroupConsoleResponseBody\templateGroup\templates\template\video;

class template extends Model
{
    /**
     * @var audio
     */
    public $audio;

    /**
     * @var string
     */
    public $condition;

    /**
     * @var container
     */
    public $container;

    /**
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $encrypt;

    /**
     * @var encryptionConfig
     */
    public $encryptionConfig;

    /**
     * @var string
     */
    public $isLocked;

    /**
     * @var string
     */
    public $mediaDefinition;

    /**
     * @var muxConfig
     */
    public $muxConfig;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $narrowBand;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var transConfig
     */
    public $transConfig;

    /**
     * @var string
     */
    public $useWaterMark;

    /**
     * @var string
     */
    public $userWaterMark;

    /**
     * @var video
     */
    public $video;
    protected $_name = [
        'audio' => 'Audio',
        'condition' => 'Condition',
        'container' => 'Container',
        'definition' => 'Definition',
        'encrypt' => 'Encrypt',
        'encryptionConfig' => 'EncryptionConfig',
        'isLocked' => 'IsLocked',
        'mediaDefinition' => 'MediaDefinition',
        'muxConfig' => 'MuxConfig',
        'name' => 'Name',
        'narrowBand' => 'NarrowBand',
        'status' => 'Status',
        'templateId' => 'TemplateId',
        'transConfig' => 'TransConfig',
        'useWaterMark' => 'UseWaterMark',
        'userWaterMark' => 'UserWaterMark',
        'video' => 'Video',
    ];

    public function validate()
    {
        if (null !== $this->audio) {
            $this->audio->validate();
        }
        if (null !== $this->container) {
            $this->container->validate();
        }
        if (null !== $this->encryptionConfig) {
            $this->encryptionConfig->validate();
        }
        if (null !== $this->muxConfig) {
            $this->muxConfig->validate();
        }
        if (null !== $this->transConfig) {
            $this->transConfig->validate();
        }
        if (null !== $this->video) {
            $this->video->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audio) {
            $res['Audio'] = null !== $this->audio ? $this->audio->toArray($noStream) : $this->audio;
        }

        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }

        if (null !== $this->container) {
            $res['Container'] = null !== $this->container ? $this->container->toArray($noStream) : $this->container;
        }

        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }

        if (null !== $this->encrypt) {
            $res['Encrypt'] = $this->encrypt;
        }

        if (null !== $this->encryptionConfig) {
            $res['EncryptionConfig'] = null !== $this->encryptionConfig ? $this->encryptionConfig->toArray($noStream) : $this->encryptionConfig;
        }

        if (null !== $this->isLocked) {
            $res['IsLocked'] = $this->isLocked;
        }

        if (null !== $this->mediaDefinition) {
            $res['MediaDefinition'] = $this->mediaDefinition;
        }

        if (null !== $this->muxConfig) {
            $res['MuxConfig'] = null !== $this->muxConfig ? $this->muxConfig->toArray($noStream) : $this->muxConfig;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->narrowBand) {
            $res['NarrowBand'] = $this->narrowBand;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->transConfig) {
            $res['TransConfig'] = null !== $this->transConfig ? $this->transConfig->toArray($noStream) : $this->transConfig;
        }

        if (null !== $this->useWaterMark) {
            $res['UseWaterMark'] = $this->useWaterMark;
        }

        if (null !== $this->userWaterMark) {
            $res['UserWaterMark'] = $this->userWaterMark;
        }

        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toArray($noStream) : $this->video;
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
            $model->audio = audio::fromMap($map['Audio']);
        }

        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }

        if (isset($map['Container'])) {
            $model->container = container::fromMap($map['Container']);
        }

        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }

        if (isset($map['Encrypt'])) {
            $model->encrypt = $map['Encrypt'];
        }

        if (isset($map['EncryptionConfig'])) {
            $model->encryptionConfig = encryptionConfig::fromMap($map['EncryptionConfig']);
        }

        if (isset($map['IsLocked'])) {
            $model->isLocked = $map['IsLocked'];
        }

        if (isset($map['MediaDefinition'])) {
            $model->mediaDefinition = $map['MediaDefinition'];
        }

        if (isset($map['MuxConfig'])) {
            $model->muxConfig = muxConfig::fromMap($map['MuxConfig']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NarrowBand'])) {
            $model->narrowBand = $map['NarrowBand'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TransConfig'])) {
            $model->transConfig = transConfig::fromMap($map['TransConfig']);
        }

        if (isset($map['UseWaterMark'])) {
            $model->useWaterMark = $map['UseWaterMark'];
        }

        if (isset($map['UserWaterMark'])) {
            $model->userWaterMark = $map['UserWaterMark'];
        }

        if (isset($map['Video'])) {
            $model->video = video::fromMap($map['Video']);
        }

        return $model;
    }
}
