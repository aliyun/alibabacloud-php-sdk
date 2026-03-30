<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\UpdateVoiceAccessProfileRequest;

use AlibabaCloud\Dara\Model;

class profile extends Model
{
    /**
     * @var string
     */
    public $accessKey;

    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $apiSecret;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $asrAppKey;

    /**
     * @var string
     */
    public $ttsApiKey;
    protected $_name = [
        'accessKey' => 'AccessKey',
        'apiKey' => 'ApiKey',
        'apiSecret' => 'ApiSecret',
        'appId' => 'AppId',
        'appKey' => 'AppKey',
        'asrAppKey' => 'AsrAppKey',
        'ttsApiKey' => 'TtsApiKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }

        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->apiSecret) {
            $res['ApiSecret'] = $this->apiSecret;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->asrAppKey) {
            $res['AsrAppKey'] = $this->asrAppKey;
        }

        if (null !== $this->ttsApiKey) {
            $res['TtsApiKey'] = $this->ttsApiKey;
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
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }

        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['ApiSecret'])) {
            $model->apiSecret = $map['ApiSecret'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['AsrAppKey'])) {
            $model->asrAppKey = $map['AsrAppKey'];
        }

        if (isset($map['TtsApiKey'])) {
            $model->ttsApiKey = $map['TtsApiKey'];
        }

        return $model;
    }
}
