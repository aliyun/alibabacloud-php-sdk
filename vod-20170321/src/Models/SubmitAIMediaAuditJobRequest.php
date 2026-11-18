<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class SubmitAIMediaAuditJobRequest extends Model
{
    /**
     * @var string
     */
    public $censorProvider;

    /**
     * @var string
     */
    public $mediaAuditConfiguration;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $mediaType;

    /**
     * @var string
     */
    public $serviceParameters;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $videoService;

    /**
     * @var string
     */
    public $voiceService;
    protected $_name = [
        'censorProvider' => 'CensorProvider',
        'mediaAuditConfiguration' => 'MediaAuditConfiguration',
        'mediaId' => 'MediaId',
        'mediaType' => 'MediaType',
        'serviceParameters' => 'ServiceParameters',
        'templateId' => 'TemplateId',
        'userData' => 'UserData',
        'videoService' => 'VideoService',
        'voiceService' => 'VoiceService',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->censorProvider) {
            $res['CensorProvider'] = $this->censorProvider;
        }

        if (null !== $this->mediaAuditConfiguration) {
            $res['MediaAuditConfiguration'] = $this->mediaAuditConfiguration;
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }

        if (null !== $this->serviceParameters) {
            $res['ServiceParameters'] = $this->serviceParameters;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        if (null !== $this->videoService) {
            $res['VideoService'] = $this->videoService;
        }

        if (null !== $this->voiceService) {
            $res['VoiceService'] = $this->voiceService;
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
        if (isset($map['CensorProvider'])) {
            $model->censorProvider = $map['CensorProvider'];
        }

        if (isset($map['MediaAuditConfiguration'])) {
            $model->mediaAuditConfiguration = $map['MediaAuditConfiguration'];
        }

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }

        if (isset($map['ServiceParameters'])) {
            $model->serviceParameters = $map['ServiceParameters'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        if (isset($map['VideoService'])) {
            $model->videoService = $map['VideoService'];
        }

        if (isset($map['VoiceService'])) {
            $model->voiceService = $map['VoiceService'];
        }

        return $model;
    }
}
