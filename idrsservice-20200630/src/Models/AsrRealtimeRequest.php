<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class AsrRealtimeRequest extends Model
{
    /**
     * @example 4a29b426-742f-4078-8386-79b440b25***
     *
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $customizationId;

    /**
     * @example false
     *
     * @var bool
     */
    public $disfluency;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableIgnoreSentenceTimeout;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableIntermediateResult;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableInverseTextNormalization;

    /**
     * @example false
     *
     * @var bool
     */
    public $enablePunctuationPrediction;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableSemanticSentenceDetection;

    /**
     * @example false
     *
     * @var bool
     */
    public $enableWords;

    /**
     * @example https://gw.alipayobjects.com/os/bmw-prod/0574ee2e-f494-45a5-820f-63aee***.wav
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @example PCM
     *
     * @var string
     */
    public $format;

    /**
     * @example 800
     *
     * @var int
     */
    public $maxSentenceSilence;

    /**
     * @example 16000
     *
     * @var int
     */
    public $sampleRate;

    /**
     * @example 0.3
     *
     * @var float
     */
    public $speechNoiseThreshold;

    /**
     * @var string
     */
    public $vocabularyId;
    protected $_name = [
        'appId'                           => 'AppId',
        'customizationId'                 => 'CustomizationId',
        'disfluency'                      => 'Disfluency',
        'enableIgnoreSentenceTimeout'     => 'EnableIgnoreSentenceTimeout',
        'enableIntermediateResult'        => 'EnableIntermediateResult',
        'enableInverseTextNormalization'  => 'EnableInverseTextNormalization',
        'enablePunctuationPrediction'     => 'EnablePunctuationPrediction',
        'enableSemanticSentenceDetection' => 'EnableSemanticSentenceDetection',
        'enableWords'                     => 'EnableWords',
        'fileUrl'                         => 'FileUrl',
        'format'                          => 'Format',
        'maxSentenceSilence'              => 'MaxSentenceSilence',
        'sampleRate'                      => 'SampleRate',
        'speechNoiseThreshold'            => 'SpeechNoiseThreshold',
        'vocabularyId'                    => 'VocabularyId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->customizationId) {
            $res['CustomizationId'] = $this->customizationId;
        }
        if (null !== $this->disfluency) {
            $res['Disfluency'] = $this->disfluency;
        }
        if (null !== $this->enableIgnoreSentenceTimeout) {
            $res['EnableIgnoreSentenceTimeout'] = $this->enableIgnoreSentenceTimeout;
        }
        if (null !== $this->enableIntermediateResult) {
            $res['EnableIntermediateResult'] = $this->enableIntermediateResult;
        }
        if (null !== $this->enableInverseTextNormalization) {
            $res['EnableInverseTextNormalization'] = $this->enableInverseTextNormalization;
        }
        if (null !== $this->enablePunctuationPrediction) {
            $res['EnablePunctuationPrediction'] = $this->enablePunctuationPrediction;
        }
        if (null !== $this->enableSemanticSentenceDetection) {
            $res['EnableSemanticSentenceDetection'] = $this->enableSemanticSentenceDetection;
        }
        if (null !== $this->enableWords) {
            $res['EnableWords'] = $this->enableWords;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->maxSentenceSilence) {
            $res['MaxSentenceSilence'] = $this->maxSentenceSilence;
        }
        if (null !== $this->sampleRate) {
            $res['SampleRate'] = $this->sampleRate;
        }
        if (null !== $this->speechNoiseThreshold) {
            $res['SpeechNoiseThreshold'] = $this->speechNoiseThreshold;
        }
        if (null !== $this->vocabularyId) {
            $res['VocabularyId'] = $this->vocabularyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AsrRealtimeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CustomizationId'])) {
            $model->customizationId = $map['CustomizationId'];
        }
        if (isset($map['Disfluency'])) {
            $model->disfluency = $map['Disfluency'];
        }
        if (isset($map['EnableIgnoreSentenceTimeout'])) {
            $model->enableIgnoreSentenceTimeout = $map['EnableIgnoreSentenceTimeout'];
        }
        if (isset($map['EnableIntermediateResult'])) {
            $model->enableIntermediateResult = $map['EnableIntermediateResult'];
        }
        if (isset($map['EnableInverseTextNormalization'])) {
            $model->enableInverseTextNormalization = $map['EnableInverseTextNormalization'];
        }
        if (isset($map['EnablePunctuationPrediction'])) {
            $model->enablePunctuationPrediction = $map['EnablePunctuationPrediction'];
        }
        if (isset($map['EnableSemanticSentenceDetection'])) {
            $model->enableSemanticSentenceDetection = $map['EnableSemanticSentenceDetection'];
        }
        if (isset($map['EnableWords'])) {
            $model->enableWords = $map['EnableWords'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['MaxSentenceSilence'])) {
            $model->maxSentenceSilence = $map['MaxSentenceSilence'];
        }
        if (isset($map['SampleRate'])) {
            $model->sampleRate = $map['SampleRate'];
        }
        if (isset($map['SpeechNoiseThreshold'])) {
            $model->speechNoiseThreshold = $map['SpeechNoiseThreshold'];
        }
        if (isset($map['VocabularyId'])) {
            $model->vocabularyId = $map['VocabularyId'];
        }

        return $model;
    }
}
