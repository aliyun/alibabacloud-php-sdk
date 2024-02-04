<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class AuditTTSVoiceRequest extends Model
{
    /**
     * @var string
     */
    public $accessKey;

    /**
     * @var string
     */
    public $appKey;

    /**
     * @var string
     */
    public $engine;

    /**
     * @example af81a389-91f0-4157-8d82-720edd02b66a
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $pitchRate;

    /**
     * @var string
     */
    public $secretKey;

    /**
     * @example 100
     *
     * @var string
     */
    public $speechRate;

    /**
     * @var string
     */
    public $text;

    /**
     * @example aixia
     *
     * @var string
     */
    public $voice;

    /**
     * @example 10
     *
     * @var string
     */
    public $volume;
    protected $_name = [
        'accessKey'  => 'AccessKey',
        'appKey'     => 'AppKey',
        'engine'     => 'Engine',
        'instanceId' => 'InstanceId',
        'pitchRate'  => 'PitchRate',
        'secretKey'  => 'SecretKey',
        'speechRate' => 'SpeechRate',
        'text'       => 'Text',
        'voice'      => 'Voice',
        'volume'     => 'Volume',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pitchRate) {
            $res['PitchRate'] = $this->pitchRate;
        }
        if (null !== $this->secretKey) {
            $res['SecretKey'] = $this->secretKey;
        }
        if (null !== $this->speechRate) {
            $res['SpeechRate'] = $this->speechRate;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->voice) {
            $res['Voice'] = $this->voice;
        }
        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AuditTTSVoiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PitchRate'])) {
            $model->pitchRate = $map['PitchRate'];
        }
        if (isset($map['SecretKey'])) {
            $model->secretKey = $map['SecretKey'];
        }
        if (isset($map['SpeechRate'])) {
            $model->speechRate = $map['SpeechRate'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Voice'])) {
            $model->voice = $map['Voice'];
        }
        if (isset($map['Volume'])) {
            $model->volume = $map['Volume'];
        }

        return $model;
    }
}
