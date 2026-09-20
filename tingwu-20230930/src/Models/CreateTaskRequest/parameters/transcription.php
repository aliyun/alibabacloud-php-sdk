<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\transcription\diarization;

class transcription extends Model
{
    /**
     * @var int
     */
    public $additionalStreamOutputLevel;

    /**
     * @var bool
     */
    public $audioEventDetectionEnabled;

    /**
     * @var diarization
     */
    public $diarization;

    /**
     * @var bool
     */
    public $diarizationEnabled;

    /**
     * @var bool
     */
    public $disfluencyEnabled;

    /**
     * @var string
     */
    public $model;

    /**
     * @var int
     */
    public $outputLevel;

    /**
     * @var mixed[]
     */
    public $phrase;

    /**
     * @var string
     */
    public $phraseId;

    /**
     * @var bool
     */
    public $profanityFilterEnabled;

    /**
     * @var bool
     */
    public $realtimeDiarizationEnabled;
    protected $_name = [
        'additionalStreamOutputLevel' => 'AdditionalStreamOutputLevel',
        'audioEventDetectionEnabled' => 'AudioEventDetectionEnabled',
        'diarization' => 'Diarization',
        'diarizationEnabled' => 'DiarizationEnabled',
        'disfluencyEnabled' => 'DisfluencyEnabled',
        'model' => 'Model',
        'outputLevel' => 'OutputLevel',
        'phrase' => 'Phrase',
        'phraseId' => 'PhraseId',
        'profanityFilterEnabled' => 'ProfanityFilterEnabled',
        'realtimeDiarizationEnabled' => 'RealtimeDiarizationEnabled',
    ];

    public function validate()
    {
        if (null !== $this->diarization) {
            $this->diarization->validate();
        }
        if (\is_array($this->phrase)) {
            Model::validateArray($this->phrase);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->additionalStreamOutputLevel) {
            $res['AdditionalStreamOutputLevel'] = $this->additionalStreamOutputLevel;
        }

        if (null !== $this->audioEventDetectionEnabled) {
            $res['AudioEventDetectionEnabled'] = $this->audioEventDetectionEnabled;
        }

        if (null !== $this->diarization) {
            $res['Diarization'] = null !== $this->diarization ? $this->diarization->toArray($noStream) : $this->diarization;
        }

        if (null !== $this->diarizationEnabled) {
            $res['DiarizationEnabled'] = $this->diarizationEnabled;
        }

        if (null !== $this->disfluencyEnabled) {
            $res['DisfluencyEnabled'] = $this->disfluencyEnabled;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->outputLevel) {
            $res['OutputLevel'] = $this->outputLevel;
        }

        if (null !== $this->phrase) {
            if (\is_array($this->phrase)) {
                $res['Phrase'] = [];
                foreach ($this->phrase as $key1 => $value1) {
                    $res['Phrase'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->phraseId) {
            $res['PhraseId'] = $this->phraseId;
        }

        if (null !== $this->profanityFilterEnabled) {
            $res['ProfanityFilterEnabled'] = $this->profanityFilterEnabled;
        }

        if (null !== $this->realtimeDiarizationEnabled) {
            $res['RealtimeDiarizationEnabled'] = $this->realtimeDiarizationEnabled;
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
        if (isset($map['AdditionalStreamOutputLevel'])) {
            $model->additionalStreamOutputLevel = $map['AdditionalStreamOutputLevel'];
        }

        if (isset($map['AudioEventDetectionEnabled'])) {
            $model->audioEventDetectionEnabled = $map['AudioEventDetectionEnabled'];
        }

        if (isset($map['Diarization'])) {
            $model->diarization = diarization::fromMap($map['Diarization']);
        }

        if (isset($map['DiarizationEnabled'])) {
            $model->diarizationEnabled = $map['DiarizationEnabled'];
        }

        if (isset($map['DisfluencyEnabled'])) {
            $model->disfluencyEnabled = $map['DisfluencyEnabled'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['OutputLevel'])) {
            $model->outputLevel = $map['OutputLevel'];
        }

        if (isset($map['Phrase'])) {
            if (!empty($map['Phrase'])) {
                $model->phrase = [];
                foreach ($map['Phrase'] as $key1 => $value1) {
                    $model->phrase[$key1] = $value1;
                }
            }
        }

        if (isset($map['PhraseId'])) {
            $model->phraseId = $map['PhraseId'];
        }

        if (isset($map['ProfanityFilterEnabled'])) {
            $model->profanityFilterEnabled = $map['ProfanityFilterEnabled'];
        }

        if (isset($map['RealtimeDiarizationEnabled'])) {
            $model->realtimeDiarizationEnabled = $map['RealtimeDiarizationEnabled'];
        }

        return $model;
    }
}
