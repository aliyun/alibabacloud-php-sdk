<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Dara\Model;

class DescribeTTSConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $aliCustomizedVoice;
    /**
     * @var string
     */
    public $appKey;
    /**
     * @var string
     */
    public $engine;
    /**
     * @var string
     */
    public $engineXunfei;
    /**
     * @var string
     */
    public $nlsServiceType;
    /**
     * @var int
     */
    public $pitchRate;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $speechRate;
    /**
     * @var string
     */
    public $voice;
    /**
     * @var int
     */
    public $volume;
    protected $_name = [
        'aliCustomizedVoice' => 'AliCustomizedVoice',
        'appKey'             => 'AppKey',
        'engine'             => 'Engine',
        'engineXunfei'       => 'EngineXunfei',
        'nlsServiceType'     => 'NlsServiceType',
        'pitchRate'          => 'PitchRate',
        'requestId'          => 'RequestId',
        'speechRate'         => 'SpeechRate',
        'voice'              => 'Voice',
        'volume'             => 'Volume',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliCustomizedVoice) {
            $res['AliCustomizedVoice'] = $this->aliCustomizedVoice;
        }

        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->engineXunfei) {
            $res['EngineXunfei'] = $this->engineXunfei;
        }

        if (null !== $this->nlsServiceType) {
            $res['NlsServiceType'] = $this->nlsServiceType;
        }

        if (null !== $this->pitchRate) {
            $res['PitchRate'] = $this->pitchRate;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->speechRate) {
            $res['SpeechRate'] = $this->speechRate;
        }

        if (null !== $this->voice) {
            $res['Voice'] = $this->voice;
        }

        if (null !== $this->volume) {
            $res['Volume'] = $this->volume;
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
        if (isset($map['AliCustomizedVoice'])) {
            $model->aliCustomizedVoice = $map['AliCustomizedVoice'];
        }

        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['EngineXunfei'])) {
            $model->engineXunfei = $map['EngineXunfei'];
        }

        if (isset($map['NlsServiceType'])) {
            $model->nlsServiceType = $map['NlsServiceType'];
        }

        if (isset($map['PitchRate'])) {
            $model->pitchRate = $map['PitchRate'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SpeechRate'])) {
            $model->speechRate = $map['SpeechRate'];
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
