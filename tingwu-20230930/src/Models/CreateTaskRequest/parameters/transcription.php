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
     * @var string
     */
    public $model;
    /**
     * @var int
     */
    public $outputLevel;
    /**
     * @var string
     */
    public $phraseId;
    /**
     * @var bool
     */
    public $realtimeDiarizationEnabled;
    protected $_name = [
        'additionalStreamOutputLevel' => 'AdditionalStreamOutputLevel',
        'audioEventDetectionEnabled'  => 'AudioEventDetectionEnabled',
        'diarization'                 => 'Diarization',
        'diarizationEnabled'          => 'DiarizationEnabled',
        'model'                       => 'Model',
        'outputLevel'                 => 'OutputLevel',
        'phraseId'                    => 'PhraseId',
        'realtimeDiarizationEnabled'  => 'RealtimeDiarizationEnabled',
    ];

    public function validate()
    {
        if (null !== $this->diarization) {
            $this->diarization->validate();
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

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->outputLevel) {
            $res['OutputLevel'] = $this->outputLevel;
        }

        if (null !== $this->phraseId) {
            $res['PhraseId'] = $this->phraseId;
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

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['OutputLevel'])) {
            $model->outputLevel = $map['OutputLevel'];
        }

        if (isset($map['PhraseId'])) {
            $model->phraseId = $map['PhraseId'];
        }

        if (isset($map['RealtimeDiarizationEnabled'])) {
            $model->realtimeDiarizationEnabled = $map['RealtimeDiarizationEnabled'];
        }

        return $model;
    }
}
