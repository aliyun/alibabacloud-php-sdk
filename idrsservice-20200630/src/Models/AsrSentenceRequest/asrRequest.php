<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\AsrSentenceRequest;

use AlibabaCloud\Tea\Model;

class asrRequest extends Model
{
    /**
     * @example d61be709-49d2-4cf1-b219-cd6181f72db8
     *
     * @var string
     */
    public $appId;

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
    public $enableVoiceDetection;

    /**
     * @example http://shuanglu-record-finance.oss-cn-shanghai.aliyuncs.com/record/4x5avhil/047730_30307_0/2022-02-12-10-20****
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
     * @example 16000
     *
     * @var int
     */
    public $sampleRate;
    protected $_name = [
        'appId'                          => 'AppId',
        'enableInverseTextNormalization' => 'EnableInverseTextNormalization',
        'enablePunctuationPrediction'    => 'EnablePunctuationPrediction',
        'enableVoiceDetection'           => 'EnableVoiceDetection',
        'fileUrl'                        => 'FileUrl',
        'format'                         => 'Format',
        'sampleRate'                     => 'SampleRate',
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
        if (null !== $this->enableInverseTextNormalization) {
            $res['EnableInverseTextNormalization'] = $this->enableInverseTextNormalization;
        }
        if (null !== $this->enablePunctuationPrediction) {
            $res['EnablePunctuationPrediction'] = $this->enablePunctuationPrediction;
        }
        if (null !== $this->enableVoiceDetection) {
            $res['EnableVoiceDetection'] = $this->enableVoiceDetection;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->sampleRate) {
            $res['SampleRate'] = $this->sampleRate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return asrRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EnableInverseTextNormalization'])) {
            $model->enableInverseTextNormalization = $map['EnableInverseTextNormalization'];
        }
        if (isset($map['EnablePunctuationPrediction'])) {
            $model->enablePunctuationPrediction = $map['EnablePunctuationPrediction'];
        }
        if (isset($map['EnableVoiceDetection'])) {
            $model->enableVoiceDetection = $map['EnableVoiceDetection'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['SampleRate'])) {
            $model->sampleRate = $map['SampleRate'];
        }

        return $model;
    }
}
